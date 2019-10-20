<?php

class User_model extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('user')->result();
    }
    public function inputData()
    {
        $data = [
            "username" => $this->input->post('username', true), //mengamankan data dengan parameter true, pake XSS filter seperti binding
            "email" => $this->input->post('email', true),
            "password" => $this->input->post('password', true)
        ];
        return $this->db->insert('user', $data);
    }

    function updateData()
    {
        $id = $this->input->post('id'); //diambil dari data-id
        $username = $this->input->post('username', true);
        $email = $this->input->post('email', true);
        $this->db->set('username', $username);
        $this->db->set('email', $email);
        $this->db->where('id', $id);
        return $this->db->update('user');
    }

    public function hapusData()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }
}
