<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_discussion extends CI_Model {

		public function lists()
		{
			$this->db->order_by('tanggal', 'DESC');
			$list = $this->db->get('tbl_diskusi');
	
			return $list->result();
		}
		
		public function get_by_id($id)
		{
			$this->db->where('id_diskusi', $id);
			$list = $this->db->get('tbl_diskusi');
			

		return $list->row();
		}

}

/* End of file Model_discussion.php */
/* Location: ./application/modules/discussion/models/Model_discussion.php */