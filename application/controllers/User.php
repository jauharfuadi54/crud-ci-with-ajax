<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        // $data['user'] = $this->User_model->getAllUser();
        // $this->load->view('users/index', $data);

        //Menggunakan ajax
        $this->load->view('users/index');
    }
    function tampilkanData()
    {
        $data = $this->User_model->getAllUser();
        echo json_encode($data);
    }
    // public function formTambah()
    // {
    //     $this->load->view('users/form_tambah');
    // }
    public function simpanData()
    {
        $data = $this->User_model->inputData();
        echo json_encode($data);
    }
    // public function formEdit($id)
    // {
    //     $data['user'] = $this->User_model->getUserById($id);
    //     $this->load->view('users/form_edit', $data);
    // }
    // public function ubahData()
    // {
    //     $this->User_model->updateData();
    //     redirect('index');
    // }
    function update()
    {
        $data = $this->User_model->updateData();
        echo json_encode($data);
    }
    public function hapus()
    {
        $data = $this->User_model->hapusData();
        echo json_encode($data);
    }
}
