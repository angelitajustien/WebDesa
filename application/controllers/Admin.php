<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		/*$this->load->model('Admin_model');*/
		$this->load->model('Karyawan_model');
		$this->load->helper('form');	
	}

	public function index()
	{
		/*$data['getData'] = $this->Admin_model->getData();*/
		$data['getData'] = $this->Karyawan_model->getData();
		$levelUser = $this->session->userdata('levelUser');
		if ($levelUser['level'] == 1)
		{
			$this->load->view('karyawan/karyawan.php',$data);
		}
		else if ($levelUser['level'] == 2)
		{
			redirect('user');
		}
		else
		{
			$this->load->view('user/login');
		}
	}
	/*public function tambah()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/tambah');
		}
		else{
			$data = array(
				"username" => $this->input->post('username'),
				"password" => $this->input->post('password')
			);
			$this->Admin_model->insertData($data);
			redirect('admin');
		}
	}
	public function ubah($id)
	{
		$data['id'] = $id;
		$this->load->library("form_validation");
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		$data['getData'] = $this->Admin_model->getData(array('id' => $id))[0];
		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/ubah',$data);
		}
		else{
			$data = array(
				"username" => $this->input->post('username'),
				"password" => $this->input->post('password')
			);
			$where = array('id' => $this->input->post('old_id'));
			$this->Admin_model->updateData($data,$where);
			redirect('admin');
		}
	}
	public function hapus($id)
	{
		$data['id'] = $id;
		$this->Admin_model->hapusData(array('id'=>$id));
		redirect('admin');
	}*/
}

	
	/* End of file Admin.php */
	/* Location: ./application/controllers/Admin.php */