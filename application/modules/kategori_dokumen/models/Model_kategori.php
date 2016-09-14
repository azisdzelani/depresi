<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {

	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_kategori_dokumen');
		$this->db->order_by('tbl_kategori_dokumen.id_kategori_dokumen','desc');
		$list = $this->db->get();

		return $list->result();
	}

	public function save($data)
	{

		$this->db->insert('tbl_kategori_dokumen', $data);
	}

	public function delete($id)
	{
		$this->db->delete('tbl_kategori_dokumen', array('id_kategori_dokumen' => $id));
	}

}

/* End of file Model_kategori.php */
/* Location: ./application/modules/dokumen/models/Model_kategori.php */