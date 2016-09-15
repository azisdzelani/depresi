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

	public function list_by_kategori()
    {
        $id = $this->uri->segment(3); //tangkep param yag dilempar dari url

        $data = array('title' => 'halaman diskusi',
        		      'list_kategori' => $this->diskusi->get_by_kategori($id));
        echo "<pre>";
        print_r($data);
       
        $this->template->content->view('diskusi_view', $data);
        $this->template->publish('template', array('title'=>'Dashboard')); 
    }

	public function get_by_id($id)
	{
		$data['title'] = 'Detail Diskusi';
		$this->load->model('model_discussion', 'discussion');
		$this->load->model('model_komentar', 'komentar');


		$data['discussion'] = $this->discussion->get_by_id($id);
		$data['komentar'] = $this->komentar->get_by_id_diskusi($id);
		print_r($data); die;

		$this->load->model('model_jabatan','jabatan');
		$data['jabatan'] = $this->jabatan->lists();


		$this->template->content->view('form_edit_pegawai', $data);
		$this->template->publish('template', array('title'=>'Edit Pegawai'));
	}

}

/* End of file Discussion.php */
/* Location: ./application/modules/discussion/controllers/Discussion.php */