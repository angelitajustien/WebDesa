<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Pricing extends CI_Controller {
	
		public function index()
		{
			$this->load->view('home/pricing');
		}
	}
	
	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */