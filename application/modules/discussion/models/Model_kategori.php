<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {

	public function lists()
	{
		
		$this->db->order_by('nama_kategori', 'DESC');
		$list = $this->db->get('tbl_kategori');

		return $list->result();
		
	}	

}

/* End of file Model_kategori.php */
/* Location: ./application/modules/discussion/models/Model_kategori.php */