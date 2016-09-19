<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_berita extends CI_Model {

	public function lists()
	{	
		$this->db->select('tbl_berita.*, tbl_kategori_berita.nama_kategori');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_kategori_berita', 'tbl_berita.id_kategori_berita = tbl_kategori_berita.id_kategori_berita');
		$this->db->order_by('tbl_berita.id_berita','desc');
		$list = $this->db->get();

		return $list->result();
	}

	public function save($data)
	{		
		$id_user = $this->session->userdata('id_user');
		$data['id_user'] = $id_user;
		$this->db->insert('tbl_berita', $data);
	}

}

/* End of file Model_berita.php */
/* Location: ./application/modules/berita/models/Model_berita.php */