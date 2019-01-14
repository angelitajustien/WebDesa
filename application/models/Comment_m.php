<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_m extends CI_Model {

	var $table_name = "comment";
	public function get()
	{
		$this->db->select("*");
		$this->db->from($this->table_name);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_berita($id)
	{
		$this->db->select("*");
		$this->db->from($this->table_name);
		$this->db->where('fk_berita',$id);
		$this->db->order_by('tanggal','asc');
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
	public function insert($id)
	{
		$set = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'pesan' => $this->input->post('pesan'),
			'fk_berita' => $id,
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
			'judul' => $this->input->post('judul'),
			'tanggal' => $this->input->post('tanggal'),
			'deskripsi' => $this->input->post('deskripsi'),
			'gambar' => $this->input->post('gambar'),
		];
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
