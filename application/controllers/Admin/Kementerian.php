<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kementerian extends CI_Controller {

	var $c_name = "Kementerian";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kementerian_m');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$dataheader = [];
		$data = [
			'c_name' => $this->c_name,
			'data' => $this->Kementerian_m->get(),
		];
		$datafooter = [
			'content' => "datatables",
		];
		$this->load->view('admin/template/header',$dataheader);
		$this->load->view('admin/kementerian/index',$data);
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
		$this->form_validation->set_rules('sub_nama',"Sub Nama","required");
		$this->form_validation->set_rules('deskripsi',"Deskripsi","required");

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/template/header',$dataheader);
			$this->load->view('admin/kementerian/insert',$data);
			$this->load->view('admin/template/footer',$datafooter);
		}else{
			$config['upload_path'] = './assets_admin/images/gambar/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '3000';
			$config['max_width']  = '10240';
			$config['max_height']  = '7680';
			
			$this->load->library('upload', $config);
			$Is_error = false;
			if ($_FILES['gambar']['name'] != "") {
				if ( ! $this->upload->do_upload('gambar')){
					$data['error'] = $this->upload->display_errors();
					$Is_error = true;
				}
				else{
					$gambar = $this->upload->data('file_name');
				}
			}else{
				$gambar = "";
			}

			if ($Is_error) {
				$this->load->view('admin/template/header',$dataheader);
				$this->load->view('admin/kementerian/insert',$data);
				$this->load->view('admin/template/footer',$datafooter);
			}else{
				$this->Kementerian_m->insert($gambar);
				redirect('Admin/'.$this->c_name,'refresh');
			}

			
		}
	}
	public function update($id)
	{
		$dataheader = [];
		$data = [
			'c_name' => $this->c_name,
			'kementerian' => $this->Kementerian_m->get_id($id),
		];
		$datafooter = [
			'content' => "datatables",
		];
		$this->form_validation->set_rules('nama',"Nama","required");
		$this->form_validation->set_rules('sub_nama',"Sub Nama","required");
		$this->form_validation->set_rules('deskripsi',"Deskripsi","required");

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/template/header',$dataheader);
			$this->load->view('admin/kementerian/update',$data);
			$this->load->view('admin/template/footer',$datafooter);
		}else{
			$config['upload_path'] = './assets_admin/images/gambar/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '3000';
			$config['max_width']  = '10240';
			$config['max_height']  = '7680';
			
			$this->load->library('upload', $config);
			$Is_error = false;
			if ($_FILES['gambar']['name'] != "") {
				if ( ! $this->upload->do_upload('gambar')){
					$data['error'] = $this->upload->display_errors();
					$Is_error = true;
				}
				else{
					$gambar = $this->upload->data('file_name');
				}
			}else{
				$gambar = "";
			}

			if ($Is_error) {
				$this->load->view('admin/template/header',$dataheader);
				$this->load->view('admin/kementerian/update',$data);
				$this->load->view('admin/template/footer',$datafooter);
			}else{
				$this->Kementerian_m->update($id,$gambar);
				redirect('Admin/'.$this->c_name,'refresh');
			}
			
		}
	}
	public function delete($id)
	{
		$this->Kementerian_m->delete($id);
		redirect('Admin/'.$this->c_name,'refresh');
	}
}
