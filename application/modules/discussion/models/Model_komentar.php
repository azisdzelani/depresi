<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_komentar extends CI_Model {

	public function get_by_id_diskusi($id)
	{
			/*$list = $this->db->get('tbl_komentar');
	
			return $list->result();*/
			
		$this->db->select('tbl_komentar.*, tbl_pegawai.nama_lengkap');
		$this->db->from('tbl_komentar');
		$this->db->join('tbl_pegawai', 'tbl_pegawai.id_pegawai = tbl_komentar.id_pegawai');
		$this->db->where('tbl_komentar.id_diskusi', $id);
		$list = $this->db->get();

		return $list->result();
	}	

}

/* End of file Model_komentar.php */
/* Location: ./application/modules/discussion/models/Model_komentar.php */