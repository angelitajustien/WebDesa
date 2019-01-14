<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Berita_m');
		$data['berita'] = $this->Berita_m->get();
		$this->load->view('home/headerHome');
		$this->load->view('home/index',$data);
		$this->load->view('home/footerHome');
	}
	public function kementerian($kementerianhash)
	{
		$this->load->library('form_validation');
		$this->load->model('Berita_m');
		$this->load->model('Kementerian_m');
		$kementerian = str_replace("-", " ", $kementerianhash);
		$id = $this->Kementerian_m->find_id_by_kementerian($kementerian);
		$data = [
			'berita' => $this->Berita_m->get_by_kementerian($id),
			'kementerian' => $this->Kementerian_m->get_id($id)
		];	

		$this->form_validation->set_rules('nama',"nama","required");
		$this->form_validation->set_rules('email',"email","required");
		$this->form_validation->set_rules('pesan',"pesan","required");
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home/headerHome');
			$this->load->view('home/berita/kementerian',$data);
			$this->load->view('home/footerHome');
		} else {
			$this->Comment_m->insert($id);
			redirect('Home/berita_detail/'.$judulhash,'refresh');
		}
	}
	public function berita_detail($judulhash)
	{
		$this->load->library('form_validation');
		$this->load->model('Berita_m');
		$this->load->model('Comment_m');
		$judul = str_replace("-", " ", $judulhash);
		$id = $this->Berita_m->find_id_by_judul($judul);
		$data = [
			'judul' => $judul,
			'berita' => $this->Berita_m->get_id($id),
			'comment' => $this->Comment_m->get_berita($id)
		];	

		$this->form_validation->set_rules('nama',"nama","required");
		$this->form_validation->set_rules('email',"email","required");
		$this->form_validation->set_rules('pesan',"pesan","required");
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home/headerHome');
			$this->load->view('home/berita/detail',$data);
			$this->load->view('home/footerHome');
		} else {
			$this->Comment_m->insert($id);
			redirect('Home/berita_detail/'.$judulhash,'refresh');
		}
	}
	public function kegiatan($kegiatanhash)
	{
		$this->load->model('Berita_m');
		$this->load->model('Kegiatan_m');
		$kegiatan = ($kegiatanhash == "Agenda" ? "Agenda" : "Program Kerja");
		$data = [
			'kegiatan' => $this->Kegiatan_m->get_by_jenis($kegiatan)
		];	

		$this->load->view('home/headerHome');
		$this->load->view('home/kegiatan/kegiatan',$data);
		$this->load->view('home/footerHome');
	}
	public function kegiatan_detail($kegiatanhash)
	{
		$this->load->model('Berita_m');
		$this->load->model('Kegiatan_m');

		$judul = str_replace("-", " ", $kegiatanhash);
		$id = $this->Kegiatan_m->find_id_by_judul($judul);
		$data = [
			'kegiatan' => $this->Kegiatan_m->get_id($id)
		];	

		$this->load->view('home/headerHome');
		$this->load->view('home/kegiatan/detail',$data);
		$this->load->view('home/footerHome');
	}
	public function kabinet()
	{
		$this->load->model('Kabinet_m');
		$data['kabinet'] = $this->Kabinet_m->get();
		$this->load->view('home/headerHome');
		$this->load->view('home/kabinet',$data);
		$this->load->view('home/footerHome');
	}
}
