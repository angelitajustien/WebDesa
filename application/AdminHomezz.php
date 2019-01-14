<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class AdminHome extends CI_Controller {
	
		public function index()
		{
			$this->load->view('admin');
			$this->load->helper('url');
		}
	
	}
	
	/* End of file Admin.php */
	/* Location: ./application/controllers/Admin.php */