<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_m extends CI_Model {

	var $table_name = "berita";
	public function get()
	{
		$this->db->select("*");
		$this->db->from($this->table_name);
		$query = $this->db->get();
		return $query->result();
	}
	
	
	public function find_id_by_judul($judul)
	{
		$this->db->select("id");
		$this->db->from($this->table_name);
		$this->db->where("judul",$judul);
		$query = $this->db->get();
		return $query->row(0)->id;
	}
	public function insert($gambar)
	{
		$set = [
			'judul' => $this->input->post('judul'),
			'tanggal' => $this->input->post('tanggal'),
			'konten' => $this->input->post('konten'),
			'kategori' => $this->input->post('kategori'),
			
			
		];
		if ($gambar != "") {
			$set['gambar'] = $gambar;
		}else{
			$set['gambar'] = 'default.png';
		}
		$insert = $this->db->insert($this->table_name,$set);
		if($insert){
			$this->session->set_flashdata("success_message","Data Berhasil di Tambahkan");
		}else{
			$this->session->set_flashdata("error_message","Data Gagal di Tambahkan");
		}
	}
	public function update($id,$gambar)
	{
		$set = [
			'judul' => $this->input->post('judul'),
			'tanggal' => $this->input->post('tanggal'),
			'konten' => $this->input->post('konten'),
			'kategori' => $this->input->post('kategori'),
		];
		if ($gambar != "") {
			$set['gambar'] = $gambar;
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
