<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_dokumen'  => 'dokumen',
								 'model_kategori' => 'kategori'));
	}

	public function index()
	{

		$data = array(
				'title'		=> 'Daftar Master Dokumen',
				'dokumen'	=> $this->dokumen->lists());

		$this->template->content->view('dokumen_view', $data);
		$this->template->publish('template', array('title'=>'Dokumen'));	
	}

	public function create()
	{
		$data = array('title' 	 => 'Form Tambah Dokumen',
					  'kategori' => $this->kategori->lists());

		$this->template->content->view('form_input_dokumen', $data);
		$this->template->publish('template', array('title'=>'Input Dokumen'));
	}

	public function do_create()
	{
		$config['upload_path']          = './uploads/';
       	$config['allowed_types']        = 'docx|doc|pdf';
        $config['max_size']             = '300';
        $config['max_width']            = '2000';
        $config['max_height']           = '2000';

        $this->load->library('upload', $config);

         if ( ! $this->upload->do_upload()){	

         	//file gagal di upload -> kembali ke form tambah dokumen
         	$data = array('title' 	 => 'Form Tambah Dokumen',
					  'kategori' => $this->kategori->lists());

			$this->template->content->view('form_input_dokumen', $data);
			$this->template->publish('template', array('title'=>'Input Dokumen'));
         }
         else{
         	// file berhasil di upload -> lanjutkan INSERT
         	$dokumen = $this->upload->data();
			$data = array(
			'id_kategori_dokumen'	=> $this->input->post('kategori'),
			'judul' 				=> $this->input->post('judul'),
			'keterangan' 			=> $this->input->post('keterangan'),
			'tanggal'				=> $this->input->post('tanggal'),
			'file' 					=> $this->input->post('file'),
			'file'					=> $dokumen['file_name']
			);

			$this->dokumen->save($data);
			redirect('dokumen');
         }


	}

	public function delete($id)
	{

		$file = $this->input->post('file');

		$this->dokumen->delete($id, $file);

		redirect('dokumen');
	}

}

/* End of file Dokumen.php */
/* Location: ./application/modules/dokumen/controllers/Dokumen.php */