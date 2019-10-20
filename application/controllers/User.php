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
        $this->load->view('users/index');
    }
    function tampilkanData()
    {
        $data = $this->User_model->getAllUser();
        echo json_encode($data);
    }

    public function simpanData()
    {
        $data = $this->User_model->inputData();
        echo json_encode($data);
    }

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
