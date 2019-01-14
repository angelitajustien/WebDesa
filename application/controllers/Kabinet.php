<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kabinet extends CI_Controller {

	public function index()
	{
		$this->load->model('Kabinet_m');
		$data['kabinet'] = $this->Kabinet_m->get();
		$this->load->view('home/header');
		$this->load->view('home/kabinet',$data);
		$this->load->view('home/footer');
	}
}