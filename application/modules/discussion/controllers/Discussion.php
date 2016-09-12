<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discussion extends CI_Controller {


	public function index()
	{
		$data['title'] = 'Halaman User';

		$this->load->model('model_discussion', 'diskusi');
		$data['lists'] = $this->diskusi->lists();
		
		$this->template->content->view('diskusi_view', $data);
		$this->template->publish('template', array('title'=>'Diskusi'));		
	}

	public function create()
	{
		$data['title'] = 'Tambah Diskusi';

		$this->template->content->view('form_diskusi_view', $data);
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