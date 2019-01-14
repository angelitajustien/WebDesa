<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

	var $c_name = "Comment";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Comment_m');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$dataheader = [];
		$data = [
			'c_name' => $this->c_name,
			'data' => $this->Comment_m->get(),
		];
		$datafooter = [
			'content' => "datatables",
		];
		$this->load->view('admin/template/header',$dataheader);
		$this->load->view('admin/comment/index',$data);
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
		$this->form_validation->set_rules('email',"Email","required");
		$this->form_validation->set_rules('pesan',"Pesan","required");
		$this->form_validation->set_rules('fk_berita',"Berita","required");

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/template/header',$dataheader);
			$this->load->view('admin/comment/insert',$data);
			$this->load->view('admin/template/footer',$datafooter);
		}else{
			$this->Comment_m->insert();
			redirect('Admin/'.$this->c_name,'refresh');
		}
	}
	public function update($id)
	{
		$dataheader = [];
		$data = [
			'c_name' => $this->c_name,
			'kementerian' => $this->Comment_m->get_id($id),
		];
		$datafooter = [
			'content' => "datatables",
		];
			$this->form_validation->set_rules('nama',"Nama","required");
		$this->form_validation->set_rules('email',"Email","required");
		$this->form_validation->set_rules('pesan',"Pesan","required");
		$this->form_validation->set_rules('fk_berita',"Berita","required");

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/template/header',$dataheader);
			$this->load->view('admin/comment/update',$data);
			$this->load->view('admin/template/footer',$datafooter);
		}else{
			$this->Comment_m->update($id);
			redirect('Admin/'.$this->c_name,'refresh');
		}
	}
	public function delete($id)
	{
		$this->Comment_m->delete($id);
		redirect('Admin/'.$this->c_name,'refresh');
	}
}
