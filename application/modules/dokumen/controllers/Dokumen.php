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
        $config['max_size']             = '2000';
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

	public function user_view()
	{
		$data = array(
				'title'		=> 'Explicit Knowledge',
				'kategori'  => $this->kategori->lists(),
				'dokumen'	=> $this->dokumen->user_view());
		// echo "<pre>";
  //       var_dump($data);

		$this->template->content->view('user_view', $data);
		$this->template->publish('template', array('title'=>'Dokumen'));
	}

	public function download($str)
	{
		force_download('./uploads/'.$str, NULL);
	}

	public function xmlDokumen($filter)
	{
		$this->db->select('tbl_dokumen.*, tbl_kategori_dokumen.*, tbl_user.id_pegawai, tbl_pegawai.*')
					->from('tbl_dokumen')
					->join('tbl_kategori_dokumen', 'tbl_dokumen.id_kategori_dokumen = tbl_kategori_dokumen.id_kategori_dokumen')
					->where('nama_kategori',$filter)
					->join('tbl_user', 'tbl_dokumen.id_user = tbl_user.id_user')
					->join('tbl_pegawai', 'tbl_user.id_pegawai = tbl_pegawai.id_pegawai');
		$list = $this->db->get();

		$xml = $list->result();

		$data['xml'] = $xml;
		$this->load->view('xml',$data);
	}

}

/* End of file Dokumen.php */
/* Location: ./application/modules/dokumen/controllers/Dokumen.php */