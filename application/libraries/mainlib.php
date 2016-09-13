<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainlib
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function pagination_load()
	{
		$_this =& get_instance();

		$config['base_url']	= base_url('user/index/hal/');
		$config['total_rows']	= $_this->user->total_rows('tbl_user');
		$config['per_page']	= 5;

		
		$config['query_string_segment'] = 'start';
 
		$config['full_tag_open'] = '<div class="pagination"><ul>';
		$config['full_tag_close'] = '</ul></div>';
		 
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		 
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		 
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		 
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		 
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		 
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$_this->pagination->initialize($config);
	}

	

}

/* End of file mainlib.php */
/* Location: ./application/libraries/mainlib.php */
