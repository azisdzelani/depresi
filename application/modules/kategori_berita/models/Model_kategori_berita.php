<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori_berita extends CI_Model {


	// Listing
	public function listing()
	{
		$list = $this->db->get('tbl_kategori_berita');
		return $list->result();
	}	

	public function save($data)
	{
		$this->db->insert('tbl_kategori_berita', $data);
	}

}

/* End of file Model_kategori_berita.php */
/* Location: ./application/modules/kategori_berita/models/Model_kategori_berita.php */