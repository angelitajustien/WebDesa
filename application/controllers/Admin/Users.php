<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	var $c_name = "Users";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_m');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$dataheader = [];
		$data = [
			'c_name' => $this->c_name,
			'data' => $this->Users_m->get(),
		];
		$datafooter = [
			'content' => "datatables",
		];
		$this->load->view('admin/template/header',$dataheader);
		$this->load->view('admin/users/index',$data);
		$this->load->view('admin/template/footer',$datafooter);
	}
	public function insert()
	{
		$dataheader = [];
		$data = [
			'c_name' => $this->c_name,
		];
		$datafooter = [
			'content' => "datatables",
		];
		$this->form_validation->set_rules('nama',"Nama","required");
		$this->form_validation->set_rules('username',"Username","required|alpha_numeric|min_length[6]");
		$this->form_validation->set_rules('password',"Password","required|min_length[6]");
		$this->form_validation->set_rules('re-password',"Ketik Ulang Password","required|matches[password]");

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/template/header',$dataheader);
			$this->load->view('admin/users/insert',$data);
			$this->load->view('admin/template/footer',$datafooter);
		}else{
			$this->Users_m->insert();
			redirect('Admin/'.$this->c_name,'refresh');
		}
	}
	public function update($id)
	{
		$dataheader = [];
		$data = [
			'c_name' => $this->c_name,
			'users' => $this->Users_m->get_id($id),
		];
		$datafooter = [
			'content' => "datatables",
		];
		$this->form_validation->set_rules('nama',"Nama","required");
		$this->form_validation->set_rules('username',"Username","required|alpha_numeric|min_length[6]");

		if ($this->input->post('password') != "") {
			$this->form_validation->set_rules('password',"Password","min_length[6]");
			$this->form_validation->set_rules('re-password',"Ketik Ulang Password","required|matches[password]");
		}

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/template/header',$dataheader);
			$this->load->view('admin/users/update',$data);
			$this->load->view('admin/template/footer',$datafooter);
		}else{
			$this->Users_m->update($id);
			redirect('Admin/'.$this->c_name,'refresh');
		}
	}
	public function delete($id)
	{
		$this->Users_m->delete($id);
		redirect('Admin/'.$this->c_name,'refresh');
	}
}
