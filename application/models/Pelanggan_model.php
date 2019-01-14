<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {
	public $table = 'pelanggan';
    public $idData = 'id_pelanggan';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

	public function getData()
	{
		//untuk select column
		$this->db->select('*');
		//untuk from table pelanggan
		$this->db->from("pelanggan");
		//$get eksekusi fungsi select
		//hasil eksesusi = "select * from pelanggan"

		
		$query = $this->db->get();
		//untuk merubah table menjadi array
		return $query->result_array();
	}

	public function getDataGambar($table)
	{
		return $this->db->get($table);
	}

	 public function get_by_id($idData)
    {
        $this->db->where($this->idData, $idData);
        return $this->db->get($this->table)->row();
    }


	public function getDataWhereId($id)
	{
		$this->db->select('*');
		$this->db->from("pelanggan");
		$this->db->where('id_pelanggan',$id);
		return $this->db->get()->result_array();
	}

	public function insertData($upload_name)
	{
		/* get post data dari form input menurut "name" nya
		contoh <input name="..."> */
		
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		$data['image'] = $upload_name;
		/* eksekusi query insert into "pelanggan" diisi dengan variable $data
		face2face ae lek bingung :| */
		$this->db->insert("pelanggan",$data);
	}

	public function updateData($id,$upload_name=null)	
	{
		/* get post data dari form input menurut "name" nya
		contoh <input name="..."> */
		
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();

		if($upload_name!=null)
			$data['image'] = $upload_name;
		//mengeset where id=$id
		$this->db->where('id_pelanggan',$id);
		/*eksekusi update pelanggan set $data from pelanggan where id=$id
		jika berhasil return berhasil */
		if($this->db->update("pelanggan",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id)
	{
		//mengeset where id=$id
		$this->db->where('id_pelanggan',$id);
		/* eksekusi delete from pelanggan where id=$id 
		jika berhasil return berhasil*/
		if($this->db->delete("pelanggan")){
			return "Berhasil";
		}
	}

	public function upload(){
        $config['upload_path'] = './img/pelanggan/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['remove_space'] = TRUE;
        $this->load->library('upload', $config);
        if($this->upload->do_upload('image')){
            $return = array('result' => 'success', 'file' => $this->upload->data(),
            'error' => '');
            return $return;
        }else{
            $return = array('result' => 'failed', 'file' => '', 'error' =>
            $this->upload->display_errors());
            return $return;
        }
    }
}
