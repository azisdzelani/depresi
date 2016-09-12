<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['title'] = 'Halaman User';
		$this->load->model('model_user', 'user');

		$this->load->library('pagination');

		$config['base_url']	= base_url('user/index/hal/');
		$config['total_rows']	= $this->user->total_rows('tbl_user');
		$config['per_page']	= 5;

		
		$config['query_string_segment'] = 'start';
 
		$config['full_tag_open'] = '<div class="pagination"><ul>';
		$config['full_tag_close'] = '</ul></div>';
		 
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		 
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		 
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		 
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		 
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		 
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$limit	= $config['per_page'];
		$offset	= (int) $this->uri->segment(4);

		$data = array(
				'lists'			=> $this->user->lists($limit, $offset),
				'pagination'	=> $this->pagination->create_links()
				);
			
		$this->template->content->view('user_view', $data);
		$this->template->publish('template', array('title'=>'User'));		
	}

	public function create()
	{
		$data['title'] = 'Tambah User';

		$this->load->model('model_jabatan','jabatan');
		$data['jabatan'] = $this->jabatan->lists();


		$this->template->content->view('form_input_pegawai', $data);
		$this->template->publish('template', array('title'=>'Input Pegawai'));
	}

	public function do_create()
	{
		
		$data_pegawai = array(
		'nip' 		   	=> $this->input->post('nip'),
		'nama_lengkap' 	=> $this->input->post('nama'),
		'tempat_lahir' 	=> $this->input->post('tempat_lahir'),
		'tgl_lahir'    	=> $this->input->post('tanggal_lahir'),
		'jenis_kelamin' => $this->input->post('jenis_kelamin'),
		'agama' 		=> $this->input->post('agama'),
		'id_jabatan' 	=> $this->input->post('jabatan'),
		'email' 		=> $this->input->post('email'),
		'alamat_rumah' 	=> $this->input->post('alamat'),
		'telepon' 		=> $this->input->post('telepon')
		);

		$data_user = array(
			'username' 	 	=> $this->input->post('nip'),
			'password' 	 	=> $this->input->post('nip'),
			'status'     	=> ('Aktif'),
			'level_user'	=> $this->input->post('level_user')
			);

		$this->load->model('model_user', 'user');
		$this->user->save($data_pegawai, $data_user);
		redirect('user');
		
		
	}

	public function edit($id)
	{
		$data['title'] = 'Edit User';
		$this->load->model('model_user', 'user');

		$data['user'] = $this->user->get_by_id($id);

		$this->load->model('model_jabatan','jabatan');
		$data['jabatan'] = $this->jabatan->lists();


		$this->template->content->view('form_edit_pegawai', $data);
		$this->template->publish('template', array('title'=>'Edit Pegawai'));
	}

	public function update()
	{
		
		$data = array(
			'id_pegawai'	=> $this->input->post('id_pegawai'),
			'nip' 		   	=> $this->input->post('nip'),
			'nama_lengkap' 	=> $this->input->post('nama'),
			'tempat_lahir' 	=> $this->input->post('tempat_lahir'),
			'tgl_lahir'    	=> $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'agama' 		=> $this->input->post('agama'),
			'id_jabatan' 	=> $this->input->post('jabatan'),
			'email' 		=> $this->input->post('email'),
			'alamat_rumah' 	=> $this->input->post('alamat'),
			'telepon' 		=> $this->input->post('telepon'),
			'status'		=> $this->input->post('status'),
			'level_user'	=> $this->input->post('level_user')
			);
		$this->load->model('model_user', 'user');
		$this->user->edit($data);

		redirect('user');
	}

	public function delete($id)
	{
		$this->load->model('model_user', 'user');
		$this->user->delete($id);

		redirect('user');
	}

	

	public function register()
	{
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('nip', 'NIP', 'required|numeric|max_length[22]');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');
		$this->form_validation->set_rules('level_user', 'Level User', 'required');
		$this->form_validation->set_message('required', '{field} masih kosong silahkan diisi');
		$this->form_validation->set_message('valid_email', 'Silahka Isi dengan format email valid');
		$this->form_validation->set_message('max_length', 'maksimal 22 karakter');
		$this->form_validation->set_message('required', '{field} masih kosong silahkan diisi');
		$this->form_validation->set_error_delimiters('<p class="alert">','</p>');


	}





}

/* End of file Users.php */
/* Location: ./application/modules/user/controllers/Users.php */