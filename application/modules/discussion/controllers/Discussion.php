<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discussion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array( 'model_discussion' => 'diskusi',
								  'model_komentar' 	 => 'komentar',
								  'model_kategori'	 => 'kategori'));
	}

	public function index()
	{
		$data = array('title' => 'Kategori Diskusi',
					  'lists' => $this->kategori->lists());
				
		$this->template->content->view('kategori_view', $data);
		$this->template->publish('template', array('title'=>'Kategori Diskusi'));		
	}

	public function get_by_kategori()
    {
        $id = $this->uri->segment(3); //tangkep param yag dilempar dari url

        $data = array('title' => 'halaman diskusi',
        		      'list_kategori' => $this->diskusi->get_by_kategori($id));
        // echo "<pre>";
        // var_dump($data['list_kategori']);
        // echo "</pre>";
        // print_r($data);
       
        $this->template->content->view('diskusi_view', $data);
        $this->template->publish('template', array('title'=>'Dashboard')); 
    }

	public function detail_by_id($id)
	{
		$data['title'] = 'Detail Diskusi';

		$id = $this->uri->segment(3); //tangkep param yag dilempar dari url

        $data = array('title' => 'halaman diskusi',
        		      'list_kategori' => $this->diskusi->get_discussion_detail($id));
		
		// $data['discussion'] = $this->discussion->get_by_kategori($id);
		$data['komentar'] = $this->diskusi->get_comment($id);
		echo "</pre>";
        print_r($data['komentar']);

		// $this->load->model('model_jabatan','jabatan');
		// $data['jabatan'] = $this->jabatan->lists();


		$this->template->content->view('detail_diskusi', $data);
		$this->template->publish('template', array('title'=>'Edit Pegawai'));
	}

	public function do_create()
	{
		
		$data_comment = array(
						'id_diskusi' => $this->input->post('id_diskusi'),
						'isi_komentar' 	=> $this->input->post('komen'),
						'date'			=> date('Y-m-d H:i:s'),
						'id_pegawai'	=> $this->session->userdata('id_pegawai')
			);

		$this->diskusi->save($data_comment);
		redirect('discussion');
	}

	

}

/* End of file Discussion.php */
/* Location: ./application/modules/discussion/controllers/Discussion.php */