<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_dokumen extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_kategori', 'kategori');
	}

	public function index()
	{

		$data = array(
				'title'		=> 'Daftar Master Kategori Dokumen',
				'kategori'	=> $this->kategori->lists());

		$this->template->content->view('kategori_view', $data);
		$this->template->publish('template', array('title'=>'Kategori'));	
	}

	public function do_create()
	{
         	// lanjutkan INSERT
			$data['nama_kategori'] = $this->input->post('nama_kategori');

			$this->kategori->save($data);
			redirect('kategori_dokumen');
         
	}

	public function delete($id)
	{
		$this->kategori->delete($id);

		redirect('kategori_dokumen');
	}

}

/* End of file Dokumen.php */
/* Location: ./application/modules/dokumen/controllers/Dokumen.php */