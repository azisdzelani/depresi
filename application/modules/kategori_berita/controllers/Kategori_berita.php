<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_berita extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_kategori_berita', 'kategori_berita');
	}

	// listing
	public function index()
	{
		$kategori_berita = $this->kategori_berita->listing();

		// validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama_kategori_berita', 'Nama Kategori Berita', 
				'required|is_unique[tbl_kategori_berita.nama_kategori_berita]',
				array('required' 	=> '%s Harus Diisi',
					  'is_unique'	=>  'Oopss.. Kategori Berita: <strong>'.
					  $this->input->post('nama_kategori_berita').
					  '</strong>) sudah ada'));

		if ($valid->run() == FALSE) 
		{ 
			$data = array(
				'title'				=> 'Data Kategori Berita',
				'kategori_berita'	=> $kategori_berita
				);

			$this->template->content->view('kategori_view', $data);
			$this->template->publish('template', array('title'=>'Kategori Berita'));			

		} 
		else 
		{
			// input kedatabase
			$slug = url_title($this->input->post('nama_kategori_berita'), 'dash', TRUE);
			$data = array('nama_kategori_berita'	=> $this->input->post('nama_kategori_berita'),	
						  'urutan'					=> $this->input->post('urutan'),	
						  'keterangan'				=> $this->input->post('keterangan'),
						  'slug_kategori_berita'	=> $slug,
						  );

			$this->kategori_berita->save($data);
			$this->session->set_flashdata('sukses', 'Data Kategori Berhasil Ditambah');
			redirect(base_url('kategori_berita'));
		}
	}

	// save
	public function do_create()
	{

	}

	// Edit
	public function edit($id_kategori_berita)
	{

	} 

	// Delete
	public function delete($id_kategori_berita)
	{
		$data = array('id_kategori_berita' => $id_kategori_berita);
		$this->model_berita->delete($data);

		$this->session->set_flashdata('sukses', 'Data kategori_berita Berhasil Dihapus');
		redirect(base_url('kategori_berita'));
	}





}

/* End of file Kategori_berita.php */
/* Location: ./application/modules/kategori_berita/controllers/Kategori_berita.php */