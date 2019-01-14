<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Transaction_model');
		$this->load->helper('form');	
	}
	public function index()
	{
		$data['transaksi'] = $this->Transaction_model->get_transaksi();
		$this->load->view("transaksi/read",$data);
	}
	public function barang()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules('nama_barang','nama_barang','required');
		$this->form_validation->set_rules('deskripsi_barang','deskripsi_barang','required');
		$this->form_validation->set_rules('berat','berat','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run()==FALSE){
			$this->load->view('transaksi/barang');
		}
		else{
			$id_barang = $this->Transaction_model->tambah_barang();
			redirect('Transaction/transaksi/'.$id_barang);
		}
	}
	public function transaksi($id)
	{
		$data['barang'] = $this->db->where('id_barang',$id)->get('barang')->result()[0];
		$data['pelanggan'] = $this->db->get('pelanggan')->result();
		$data['jenis'] = $this->db->get('jenis')->result();
		$this->load->library("form_validation");
		$this->form_validation->set_rules('alamat_rinci','alamat_rinci','required');
		$this->form_validation->set_rules('penerima','penerima','required');
		$this->form_validation->set_rules('telepon_penerima','telepon_penerima','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run()==FALSE){
			$this->load->view('transaksi/transaksi',$data);
		}
		else{
			$id_transaksi = $this->Transaction_model->transaksi($id);
			redirect("Transaction/complete/".$id_transaksi);
		}
	}
	public function complete($id)
	{
		$data['transaksi'] = $this->Transaction_model->get_transaksi_id($id);
		$this->load->view("transaksi/complete",$data);
	}

	public function hapus($id)
	{
	    $this->Transaction_model->hapusData($id);
	    redirect('Transaction');
	}
}

	
	/* End of file Admin.php */
	/* Location: ./application/controllers/Admin.php */