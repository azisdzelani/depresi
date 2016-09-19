<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {

	public function lists()
	{
		$list = $this->db->get('tbl_kategori_berita');
		return $list->result();
	}

}

/* End of file Model_kategori.php */
/* Location: ./application/modules/berita/models/Model_kategori.php */