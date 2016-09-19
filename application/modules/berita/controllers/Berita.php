<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_berita' => 'berita',
								 'model_kategori' => 'kategori'));
	}

	public function index()
	{
		$data = array('title' => 'Berita');

		$this->template->content->view('berita_view', $data);
		$this->template->publish('template', array('title'=>'Berita'));	
	}

	public function admin_view()
	{
		$data['berita'] = $this->berita->lists();
		 // echo "<pre>";
   //      var_dump($data['berita']);
  
		$this->template->content->view('master_berita_view', $data);
		$this->template->publish('template', array('title'=>'Berita'));	
	}

	public function create()
	{
		$data = array('title' => 'form input berita',
					 'kategori' => $this->kategori->lists());
  
		$this->template->content->view('form_input_berita', $data);
		$this->template->publish('template', array('title'=>'Berita'));	
	}

	public function do_create()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'png|jpg|jpeg';
		$config['max_size']             = '300';
		$config['max_width']            = '2000';
		$config['max_height']           = '2000';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload()){	

         	//file gagal di upload -> kembali ke form tambah dokumen
			$data = array('title' => 'Data Master Berita',
				'kategori' => $this->kategori->lists());

			$this->template->content->view('form_input_berita', $data);
			$this->template->publish('template', array('title'=>'Berita'));	
		}
		else{
         	// file berhasil di upload -> lanjutkan INSERT
			$dokumen = $this->upload->data();
			$data = array(
				'id_kategori_berita'	=> $this->input->post('kategori'),
				'judul' 				=> $this->input->post('judul'),
				'isi'					=> $this->input->post('isi'),
				'tanggal'				=> $this->input->post('tanggal'),
				'gambar' 				=> $this->input->post('file'),
				'gambar'					=> $dokumen['file_name']
				);

			$this->berita->save($data);
			redirect('berita/admin_view');
		}

	}

}

/* End of file Berita.php */
/* Location: ./application/modules/berita/controllers/Berita.php */