<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Halaman dashboard';

		$this->template->content->view('dashboard_view', $data);
		$this->template->publish('template', array('title'=>'Dashboard'));		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/modules/dashboard/controllers/Dashboard.php */