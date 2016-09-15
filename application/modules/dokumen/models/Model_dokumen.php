<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dokumen extends CI_Model 
{
	
	public function lists()
	{
		$this->db->select('tbl_dokumen.*, tbl_kategori_dokumen.nama_kategori');
		$this->db->from('tbl_dokumen');
		$this->db->join('tbl_kategori_dokumen', 'tbl_dokumen.id_kategori_dokumen = tbl_kategori_dokumen.id_kategori_dokumen');
		$this->db->order_by('tbl_dokumen.id_dokumen','desc');
		$list = $this->db->get();

		return $list->result();
	}

	public function save($data)
	{		
		$id_user = $this->session->userdata('id_user');
		$data['id_user'] = $id_user;
		$this->db->insert('tbl_dokumen', $data);
	}

	public function delete($id, $file)
	{
		$this->db->where('id_dokumen', $id);

		unlink("uploads/".$file);

		$this->db->delete('tbl_dokumen', array('id_dokumen' => $id));

	}

}

/* End of file Model_dokumen.php */
/* Location: ./application/modules/dokumen/models/Model_dokumen.php */