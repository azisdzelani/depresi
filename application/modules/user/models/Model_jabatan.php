<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jabatan extends CI_Model {

	public function lists()
	{
		$list = $this->db->get('tbl_jabatan');
		return $list->result();
	}

}

/* End of file Model_jabatan.php */
/* Location: ./application/modules/user/models/Model_jabatan.php */