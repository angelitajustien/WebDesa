<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function registered($encript_password,$level)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'noTelepon' => $this->input->post('noTelepon'),
			'alamat' => $this->input->post('alamat'),
			'kodepos' => $this->input->post('kodepos'),
			'username' => $this->input->post('username'),
			'password' => $encript_password,
			'level' => $level
		);

		return $this->db->insert('users', $data);
	}

	public function login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		//$result = $this->db->query("select * from users where username = '".$username."' AND password = '".$password."'");
		$result = $this->db->get('users');

		if($result->num_rows() == 1)
		{
			return $result->result_array();
		}
		else
		{
			return false;
		}
	}

	public function getData()
	{
		$this->db->select('*');
		$this->db->from("users");

		$query = $this->db->get();
		return $query->result_array();
	}

	public function hapusData($id)
    {

        $this->db->where('user_id',$id);

        if($this->db->delete("users")){
            return "Berhasil";
        }
    }
	

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */