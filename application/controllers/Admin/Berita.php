<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	var $c_name = "Berita";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Berita_m');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$dataheader = [];
		$data = [
			'c_name' => $this->c_name,
			'data' => $this->Berita_m->get(),
		];
		$datafooter = [
			'content' => "datatables",
		];
		$this->load->view('admin/template/header',$dataheader);
		$this->load->view('admin/berita/index',$data);
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
		$this->form_validation->set_rules('judul',"Judul","required|is_unique[berita.judul]");
		$this->form_validation->set_rules('tanggal',"Tanggal","required");
		$this->form_validation->set_rules('konten',"Konten","required");
		$this->form_validation->set_rules('kategori',"Kategori","required");
		

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/template/header',$dataheader);
			$this->load->view('admin/berita/insert',$data);
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
				$this->load->view('admin/berita/insert',$data);
				$this->load->view('admin/template/footer',$datafooter);
			}else{
				$this->Berita_m->insert($gambar);
				redirect('Admin/'.$this->c_name,'refresh');
			}
			
		}
	}
	public function update($id)
	{
		$dataheader = [];
		$data = [
			'c_name' => $this->c_name,
			'berita' => $this->Berita_m->get_id($id),
		];
		$datafooter = [
			'content' => "datatables",
		];
		$judul_unique = "";
		if ($this->input->post('judul') != $data['berita']->judul) {
			$judul_unique = "|is_unique['berita.judul']";
		}
		$this->form_validation->set_rules('judul',"Judul","required".$judul_unique);
		$this->form_validation->set_rules('tanggal',"Tanggal","required");
		$this->form_validation->set_rules('konten',"Konten","required");
		$this->form_validation->set_rules('kategori',"Kategori","required");
		


		if ($this->form_validation->run() == false) {
			$this->load->view('admin/template/header',$dataheader);
			$this->load->view('admin/berita/update',$data);
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
				$this->load->view('admin/berita/update',$data);
				$this->load->view('admin/template/footer',$datafooter);
			}else{
				$this->Berita_m->update($id,$gambar);
				redirect('Admin/'.$this->c_name,'refresh');
			}
			
		}
	}
	public function delete($id)
	{
		$this->Berita_m->delete($id);
		redirect('Admin/'.$this->c_name,'refresh');
	}
}
