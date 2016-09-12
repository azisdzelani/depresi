<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

	public function save($data_pegawai, $data_user)
	{
		$this->db->insert('tbl_pegawai', $data_pegawai);
		
		$id_pegawai = $this->db->insert_id();
		$data_user['id_pegawai'] = $id_pegawai;
		$this->db->insert('tbl_user', $data_user);
	}

	public function lists()
	{
		$this->db->select('tbl_pegawai.id_pegawai, tbl_pegawai.nama_lengkap, tbl_pegawai.email, tbl_user.level_user, tbl_user.status');
		$this->db->from('tbl_pegawai');
		$this->db->join('tbl_user', 'tbl_pegawai.id_pegawai = tbl_user.id_pegawai');
		$this->db->order_by('tbl_pegawai.id_pegawai','desc');
		$list = $this->db->get();
		/*
		$sql="SELECT tbl_pegawai.id_pegawai, tbl_pegawai.nama_lengkap, tbl_pegawai.email, tbl_user.level_user, tbl_user.status 
		      FROM tbl_pegawai
		      JOIN tbl_user USING(id_pegawai)";
		$list = $this->db->query($sql);
		*/
		return $list->result();
	}

	public function get_by_id($id)
	{
		$this->db->select('tbl_pegawai.*, tbl_user.level_user, tbl_user.status');
		$this->db->from('tbl_pegawai');
		$this->db->join('tbl_user', 'tbl_pegawai.id_pegawai = tbl_user.id_pegawai');
		$this->db->where('tbl_pegawai.id_pegawai', $id);
		$list = $this->db->get();

		return $list->row();
	}	

	public function edit($data)
	{
		$this->db->where('id_pegawai', $data['id_pegawai']);
		$data_edit = array(
				'nip'  			=> $data['nip'],
				'nama_lengkap' 	=> $data['nama_lengkap'],
				'tempat_lahir' 	=> $data['tempat_lahir'],
				'tgl_lahir'    	=> $data['tgl_lahir'],
				'jenis_kelamin' => $data['jenis_kelamin'],
				'agama' 		=> $data['agama'],
				'id_jabatan' 	=> $data['id_jabatan'],
				'email' 		=> $data['email'],
				'alamat_rumah' 	=> $data['alamat_rumah'],
				'telepon' 		=> $data['telepon']
				);
		$this->db->update('tbl_pegawai', $data_edit);

		$this->db->where('id_pegawai', $data['id_pegawai']);
		$this->db->update('tbl_user', array('status' => $data['status'],
											'level_user' => $data['id_jabatan']+1));
	}

	public function delete($id)
	{
		$this->db->delete('tbl_pegawai', array('id_pegawai' => $id));
		$this->db->delete('tbl_user', array('id_pegawai' => $id));

	}

}

/* End of file Model_user.php */
/* Location: ./application/modules/user/models/Model_user.php */