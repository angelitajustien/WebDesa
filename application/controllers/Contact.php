<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Contact extends CI_Controller {
	
		public function index()
		{
			$this->load->view('home/contact');
		}
	}
	
	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */