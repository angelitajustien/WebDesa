<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CekHarga extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'form'));
	}


	public function cekHarga()
	{
		$jenis['jenis'] = $this->input->post('jenis', true);
		$berat['berat'] = $this->input->post('berat', true);
		$jumlah['jumlah'] = $this->input->post('jumlah', true);
		if($jenis['jenis'] == 1)
		{
			$hasil['hasil'] = ($berat['berat'] * 20000)*$jumlah['jumlah'];
			$this->load->view('cekHarga/gold', $hasil);
		}
		else
		{
			$hasil['hasil'] = ($berat['berat'] * 10000)*$jumlah['jumlah'];
			$this->load->view('cekHarga/reguler', $hasil);
		}
	}

}

/* End of file CekHarga.php */
/* Location: ./application/controllers/CekHarga.php */