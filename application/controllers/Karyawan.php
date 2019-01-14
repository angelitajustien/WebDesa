<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Karyawan_model');
        $this->load->helper('form');    
    }

    public function index()
    {
        $data['getData'] = $this->Karyawan_model->getData();
        $levelUser = $this->session->userdata('levelUser');
        if ($levelUser['level'] == 1)
        {
            $this->load->view('karyawan/karyawan.php',$data);
        }
        else if ($levelUser['level'] == 2)
        {
            redirect('karyawan/karyawan.php',$data);
        }
        else
        {
            $this->load->view('user/login');
        }
        
    }

    public function read($idData) 
    {
        $row = $this->Karyawan_model->get_by_id($idData);
        if ($row) {
            $data = array(
        'ID' => $row->id_karyawan,
        'Nama' => $row->Nama,
        'JenisKelamin' => $row->JenisKelamin,
        'Alamat' => $row->Alamat,
        'NoHp' => $row->NoHp,
        'Email' => $row->Email,
        'KodePos' => $row->KodePos,
        'Hobby' => $row->Hobby,
        'Pendidikan' => $row->Pendidikan,
        'Image' => $row->image,
        );
            $this->load->view('karyawan/read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('karyawan'));
        }
    }

    public function tambah()
    {
        $data['message'] = "";
        $this->load->library("form_validation");

        $this->form_validation->set_rules('Nama','Nama','required');
        $this->form_validation->set_rules('JenisKelamin','JenisKelamin','required');
        $this->form_validation->set_rules('Alamat','Alamat','required');
        $this->form_validation->set_rules('NoHp','NoHp','required');
        $this->form_validation->set_rules('Email','Email','required');
        $this->form_validation->set_rules('KodePos','KodePos','required');
        $this->form_validation->set_rules('Hobby','Hobby','required');
        $this->form_validation->set_rules('Pendidikan','Pendidikan','required');

  
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if($this->form_validation->run()==FALSE){

            $this->load->view('karyawan/tambah.php',$data); 
        }

        else{
            $upload = $this->Karyawan_model->upload();
            if($upload['result'] == "success"){ 

                $this->Karyawan_model->insertData($upload['file']['file_name']);

                redirect('karyawan');
            }else{ 
                $data['message'] = $upload['error'];
                $this->load->view('karyawan/tambah.php',$data); 
            }
        }
    }

    public function ubah($id)
    {
        $data['message'] = "";

        $this->load->library("form_validation");

        $this->form_validation->set_rules('Nama','Nama','required');
        $this->form_validation->set_rules('JenisKelamin','JenisKelamin','required');
        $this->form_validation->set_rules('Alamat','Alamat','required');
        $this->form_validation->set_rules('NoHp','NoHp','required');
        $this->form_validation->set_rules('Email','Email','required');
        $this->form_validation->set_rules('KodePos','KodePos','required');
        $this->form_validation->set_rules('Hobby','Hobby','required');
        $this->form_validation->set_rules('Pendidikan','Pendidikan','required');    

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        $data['getData'] = $this->Karyawan_model->getDataWhereId($id)[0];

        if($this->form_validation->run()==FALSE){

            $this->load->view('karyawan/ubah',$data);
        }

        else{
            if ($_FILES['image']['name'] == "")
            {
                $this->Karyawan_model->updateData($id);

                redirect('karyawan');
            }
            else
            {
                $upload = $this->Karyawan_model->upload();
                if($upload['result'] == "success"){ 
                    $this->Karyawan_model->updateData($id,$upload['file']['file_name']);
                    redirect('karyawan');
                }else{ 
                    $data['error_upload'] = $upload['error'];
                    $this->load->view('karyawan/ubah',$data);
                }
            }
        }
    }

    public function hapus($id)
    {
        $this->Karyawan_model->hapusData($id);
        redirect('karyawan');
    }
}
