<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Model_login' => 'login'));
	}

	public function login()
	{	

		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric');

		$this->form_validation->set_message('required', '%s Masih Kosong Silahkan Diisi');
		$this->form_validation->set_message('alpha_numeric', '%s Gunakan Hanya Huruf dan Angka');

		$this->form_validation->set_error_delimiters('<p class="alert">', '</p');


		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('page_login');
		} 
		else 
		{
			$check_username 	= $this->login->check_username(); //mengecek username terdaftar atau tidak
			$check_status_user 	= $this->login->check_status_user(); //mengecek status user
			$valid_user			= $this->login->check_credential(); //mengecek apakah username dan password sama

			if ($check_username == FALSE) //username tidak terdaftar
			{
				$this->session->set_flashdata('username_not_register', '<div class="alert alert-info">
                                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                  <strong>Username Tidak Terdaftar</strong></div>');
				redirect('auth/login');
			}
			elseif ($check_status_user == FALSE) //status tidak aktif
			{
				$this->session->set_flashdata('status_tidak_aktif', '<div class="alert alert-info">
                                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                  <strong>Status User Tidak Aktif</strong></div>');
				redirect('auth/login');
			}
			elseif ($valid_user == FALSE) //username dan password salah
			{
				$this->session->set_flashdata('wrong_password', '<div class="alert alert-info">
                                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                  <strong>Password Salah</strong></div>');
				redirect('auth/login');
			}
			else
			{
				//jika semua kondisi terpenuhi, eksekusi perintah dibawah
				$data	= array( 	'id_user'		=> $valid_user->id_user,
									'username'		=> $valid_user->username,
									'level_user'	=> $valid_user->level_user,
									'status'		=> $valid_user->status,
									'id_pegawai'	=> $valid_user->id_pegawai
							);
				
				$this->session->set_userdata($data);

					switch (TRUE)
				{
					case ($valid_user->level_user == 'Admin' && $valid_user->status == 'Aktif'):
						redirect('dashboard');
						break;
					case ($valid_user->level_user == 'Kepala Bagian' && $valid_user->status == 'Aktif'):
						redirect('Kabag');
						break;
					case ($valid_user->level_user == 'Kepala Sub Bagian' && $valid_user->status == 'Aktif'):
						redirect('Kasubag');
						break;
					case ($valid_user->level_user == 'Staff' && $valid_user->status == 'Aktif'):
						redirect('Staff');
						break;
					default : 
						break;
				}

			}
		}	
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}

}

/* End of file Auth.php */
/* Location: ./application/modules/auth/controllers/Auth.php */