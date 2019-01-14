<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$dataheader = [];
		$data = [];
		$datafooter = [
			'content' => "dashboard",
		];
		$this->load->view('admin/template/header',$dataheader);
		$this->load->view('admin/index',$data);
		$this->load->view('admin/template/footer',$datafooter);
	}

	public function setting()
	{
		$this->load->model('Pages_m');
		$dataheader = [];
		$data = [];
		$datafooter = [
			'content' => "dashboard",
		];
		$this->load->view('admin/template/header',$dataheader);
		$this->load->view('admin/setting',$data);
		$this->load->view('admin/template/footer',$datafooter);
	}

	public function setting_proses()
	{
		$this->load->model('Pages_m');
		$this->Pages_m->updateData();
		redirect('Admin/Dashboard/setting');
	}
}
