<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_m extends CI_Model {

	var $table_name = "users";
	public function get()
	{
		$this->db->select("*");
		$this->db->from($this->table_name);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_id($id)
	{
		$this->db->select("*");
		$this->db->from($this->table_name);
		$this->db->where("id",$id);
		$query = $this->db->get();
		return $query->row(0);
	}
	public function insert()
	{
		$set = [
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'fk_level' => '1',
		];
		$insert = $this->db->insert($this->table_name,$set);
		if($insert){
			$this->session->set_flashdata("success_message","Data Berhasil di Tambahkan");
		}else{
			$this->session->set_flashdata("error_message","Data Gagal di Tambahkan");
		}
	}
	public function update($id)
	{
		$set = [
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'fk_level' => '1',
		];
		if($this->input->post("password") != ""){
			$set['password'] = $this->input->post("password");
		}
		$this->db->where("id",$id);
		$update = $this->db->update($this->table_name,$set);
		if($update){
			$this->session->set_flashdata("success_message","Data Berhasil di Ubah");
		}else{
			$this->session->set_flashdata("error_message","Data Gagal di Ubah");
		}
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$delete = $this->db->delete($this->table_name);
		if($delete){
			$this->session->set_flashdata("success_message","Data Berhasil di Hapus");
		}else{
			$this->session->set_flashdata("error_message","Data Gagal di Hapus");
		}
	}
}
