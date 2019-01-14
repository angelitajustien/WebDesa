<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Karyawan_model');
		$this->load->helper('form');	
	}

	public function index()
	{
		$data['page_title'] = 'List Karyawan';

        $limit_per_page = 20;

        $start_index = ($this->uri->segment(3))? $this->uri->segment(3) : 0;

        $total_records = $this->Karyawan_model->get_total();

        if ($total_records > 0) {

        $data["gambar"] = $this->Karyawan_model->getDataGambar($limit_per_page, $start_index)->result();

        $config['base_url'] = base_url(). 'about/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;

        $this->pagination->initialize($config);

        $data["links"] = $this->pagination->create_links();

    	}

		/*$data['gambar'] = $this->Karyawan_model->getDataGambar('karyawan')->result();*/
		$this->load->view('home/about', $data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */