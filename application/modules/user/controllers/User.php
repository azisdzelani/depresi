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
		$data['lists'] = $this->user->lists();
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
		
		$this->_rules();
		if ($this->form_validation->run() == FALSE) 
		{
			$data['title'] = 'Tambah User';

			$this->template->content->view('form_input_pegawai', $data);
			$this->template->publish('template', array('title'=>'Input Pegawai'));
		} 
		else 
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
		$data['title'] = 'Tambah User';
	
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
			'status'		=> $this->input->post('status')
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

	public function _rules()
	{
		$config = array(

	        array(
	                'field'  => 'nama',
	                'label'  => 'Nama Lengkap',
	                'rules'  => 'required|max_length[22]|is_unique[tbl_pegawai.nama_lengkap]',
	                'errors' => array(
	                			'required' 	=> 'Kolom %s Harus Diisi',
	                			'is_unique' =>	'nama Sudah Digunakan'
	                	),
	        ),
	         array(
	                'field'  => 'nama',
	                'label'  => 'Nama Lengkap',
	                'rules'  => 'required|max_length[22]|is_unique[tbl_pegawai.nama_lengkap]',
	                'errors' => array(
	                			'required' 	=> 'Kolom %s Harus Diisi',
	                			'is_unique' =>	'nama Sudah Digunakan'
	                	),
	        ),
	       
	);

		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<p class="alert">','</p>');
	
	}

}

/* End of file Users.php */
/* Location: ./application/modules/user/controllers/Users.php */