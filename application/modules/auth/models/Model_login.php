<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

		// cek users login
	public function check_credential()
	{
		// $this->load->helper('security');

		// $pwd = $this->input->post('password');
		$data = array(
			'username'	=> $this->input->post('username'),
			'password'	=> $this->input->post('password')
			); 

		$query = $this->db->where($data)
						  ->limit(1)
						  ->get('tbl_user');

		if ($query->num_rows() > 0)
		{
			return $query->row();
		} 
		else 
		{
			return FALSE;
		}
	}


	// cek username
	public function check_username()
	{
		$data = array( 'username'	=> $this->input->post('username')
			);

		$query = $this->db->where($data)
						  ->limit(1)
						  ->get('tbl_user');

		if ($query->num_rows() > 0)
		{
			return $query->row();
		} 
		else 
		{
			return FALSE;
		}

	}

	// cek status aktif / tidak aktif
	public function check_status_user()
	{
		$data = array( 	
			'username'	=> $this->input->post('username'),
			'status'	=> 'Aktif'
			); 

		$query = $this->db->where($data)
						  ->limit(1)
						  ->get('tbl_user');

		if ($query->num_rows() > 0)
		{
			return $query->row();
		} 
		else 
		{
			return FALSE;
		}	
	}











}

/* End of file model_user.php */
/* Location: ./application/models/model_user.php */

