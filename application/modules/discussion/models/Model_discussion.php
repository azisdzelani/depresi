<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_discussion extends CI_Model {

		public function lists()
		{
			$this->db->order_by('tanggal', 'DESC');
			$list = $this->db->get('tbl_diskusi');
	
			return $list->result();
		}

		public function get_by_kategori($id)
		{

			$this->db->select('tbl_diskusi.*,tbl_pegawai.id_pegawai, tbl_pegawai.nama_lengkap, (SELECT count(id_komentar) FROM tbl_komentar WHERE tbl_komentar.id_diskusi = tbl_diskusi.id_diskusi) as komentar');
			$this->db->from('tbl_diskusi');
			$this->db->join('tbl_pegawai', 'tbl_pegawai.id_pegawai = tbl_diskusi.id_pegawai');
			$this->db->where('id_kategori', $id);
			$this->db->order_by('tanggal', 'DESC');
			$list = $this->db->get();
			
			return $list->result();
		}
		
		public function get_by_id($id)
		{
			$this->db->where('id_diskusi', $id);
			$list = $this->db->get('tbl_diskusi');
			

			return $list->row();
		}

		public function get_discussion_detail($id)
		{
			$this->db->select('*');
			$this->db->from('tbl_diskusi');
			$this->db->where('id_diskusi', $id);

			$list = $this->db->get();
			return $list->row();
		}

		public function get_comment($id)
		{
			$this->db->select('tbl_komentar.*, tbl_pegawai.id_pegawai, tbl_pegawai.nama_lengkap');
			$this->db->from('tbl_komentar');
			// $this->db->join('tbl_diskusi', 'tbl_diskusi.id_diskusi = tbl_komentar.id_diskusi');
			$this->db->join('tbl_pegawai', 'tbl_pegawai.id_pegawai = tbl_komentar.id_pegawai', 'left');
			$this->db->where('tbl_komentar.id_diskusi', $id);

			$list = $this->db->get();
			return $list->result();
		}

		public function save($data_comment)
		{
			$this->db->insert('tbl_komentar', $data_comment);
	
		}

}

/* End of file Model_discussion.php */
/* Location: ./application/modules/discussion/models/Model_discussion.php */