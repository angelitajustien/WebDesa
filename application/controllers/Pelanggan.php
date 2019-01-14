<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	//konstruktor (statement yang selalu dipanggil pada setiap function)
	function __construct() {
		parent::__construct();
		//load model Pelanggan_m
		$this->load->model('Pelanggan_model');
		//load helper form
		$this->load->helper('form');	
	}

	/* index (fungsi yang akan berjalan jika tidak ada fungsi yang dipangggil)
	jika url = ".[]/pelanggan" maka fungsi index yang dijalankan */
	public function index()
	{
		/* mengisi $data['getData'] berupa data yang 
		terlah direturn pada fungsi getData() pada Pelanggan_m */
		$data['getData'] = $this->Pelanggan_model->getData();
		$levelUser = $this->session->userdata('levelUser');
		if ($levelUser['level'] == 1)
		{
			// memanggil view 'pelanggan/pelanggan.php' dan diberi variable $data
			$this->load->view('pelanggan/pelanggan.php',$data);
		}
		else if ($levelUser['level'] == 2)
		{
			$this->load->view('pelanggan/pelanggan.php',$data);
		}
		else
		{
			$this->load->view('user/login');
		}
		
		
	}

    public function read($idData) 
    {
        $row = $this->Pelanggan_model->get_by_id($idData);
        if ($row) {
            $data = array(
		'ID' => $row->id_pelanggan,
		'Nama' => $row->Nama,
		'JenisKelamin' => $row->JenisKelamin,
		'Alamat' => $row->Alamat,
		'NoHp' => $row->NoHp,
		'Email' => $row->Email,
		'Username' => $row->Username,
		'Password' => $row->Password,
		'Image' => $row->image,
	    );
            $this->load->view('pelanggan/read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pelanggan'));
        }
    }

	public function tambah()
	{
		$data['message'] = "";
		//load library form_validation
		$this->load->library("form_validation");
		/* aturan form validation 
		- parameter 1 ('id') = ditujukan pada input yang name="id"
		- parameter 2 ('ID') = untuk tampilan error
		- parameter 3 ('required') = rule nya (ada banyak rule buka di userguide)
		*/
		/*$this->form_validation->set_rules('id_pelanggan','ID','required');*/
		$this->form_validation->set_rules('Nama','Nama','required');
		$this->form_validation->set_rules('JenisKelamin','JenisKelamin','required');
		$this->form_validation->set_rules('Alamat','Alamat','required');
		$this->form_validation->set_rules('NoHp','NoHp','required');
		$this->form_validation->set_rules('Email','Email','required');
		$this->form_validation->set_rules('Username','Username','required');
		$this->form_validation->set_rules('Password','Password','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'pelanggan/tambah.php'
			$this->load->view('pelanggan/tambah.php',$data); 
		}
		// jika kita sudah melalukan submit
		else{
			$upload = $this->Pelanggan_model->upload();
			if($upload['result'] == "success"){ // Jika proses upload sukses
				//memanggil fungsi insertData pada model
				$this->Pelanggan_model->insertData($upload['file']['file_name']);
				//redirect / pergi ke halaman 'pelanggan'
				redirect('pelanggan');
			}else{ // Jika proses upload gagal
				$data['message'] = $upload['error'];
				$this->load->view('pelanggan/tambah.php',$data); 
			}
		}
	}

	/*$id adalah parameter
	contoh penggunakan pelanggan/ubah/1 
	*/ 
	public function ubah($id)
	{
		$data['message'] = "";
		//load library form_validation
		$this->load->library("form_validation");
		/* aturan form validation 
		- parameter 1 ('id') = ditujukan pada input yang name="id"
		- parameter 2 ('ID') = untuk tampilan error
		- parameter 3 ('required') = rule nya (ada banyak rule buka di userguide)
		*/
		$this->form_validation->set_rules('id_pelanggan','ID','required');
		$this->form_validation->set_rules('Nama','Nama','required');
		$this->form_validation->set_rules('JenisKelamin','JenisKelamin','required');
		$this->form_validation->set_rules('Alamat','Alamat','required');
		$this->form_validation->set_rules('NoHp','NoHp','required');
		$this->form_validation->set_rules('Email','Email','required');
		$this->form_validation->set_rules('Username','Username','required');
		$this->form_validation->set_rules('Password','Password','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		

		//memberikan data berisi data yang sesuai dengan $id
		$data['getData'] = $this->Pelanggan_model->getDataWhereId($id)[0];

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'pelanggan/ubah.php'
			$this->load->view('pelanggan/ubah',$data);
		}
		// jika kita sudah melalukan submit
		else{
			if ($_FILES['image']['name'] == "")
			{
				//memanggil fungsi insertData pada model
				$this->Pelanggan_model->updateData($id);
			//redirect / pergi ke halaman 'pelanggan'
				redirect('pelanggan');
			}
			else
			{
				$upload = $this->Pelanggan_model->upload();
				if($upload['result'] == "success"){ 
					$this->Pelanggan_model->updateData($id,$upload['file']['file_name']);
					redirect('pelanggan');
				}else{ 
					$data['error_upload'] = $upload['error'];
					$this->load->view('pelanggan/ubah',$data);
				}
			}
		}
	}

	/*$id adalah parameter
	contoh penggunakan pelanggan/hapus/1 
	*/ 
	public function hapus($id)
	{
		//memanggil fungsi hapusData pada model
		$this->Pelanggan_model->hapusData($id);
		redirect('pelanggan');
	}
}
