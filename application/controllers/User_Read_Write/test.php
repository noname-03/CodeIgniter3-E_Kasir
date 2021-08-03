<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Read_Write extends CI_Controller {

    public function index(){
        $this->load->view('Admin/Template/headerandmenu.php');
        $this->load->view('Admin/Template/menu2.php');
        $this->load->view('Admin/index.php');
        $this->load->view('Admin/Template/footer.php');
    }
    //user
    function data_user_input(){
        // $this->load->view('Admin/Template/headerandmenu.php');
        // $this->load->view('Admin/Template/menu2.php');
        $this->load->view('Admin/data_user_input.php');
        // $this->load->view('Admin/Template/footer.php');
    }
    function data_user_input_aksi(){
        $username = $this->input->POST('username');
        $password = $this->input->POST('password');
        $nm_toko = $this->input->POST('nm_toko');
        $status = $this->input->POST('status');
        
        $data = array(
            'username' => $username,
            'password' => $password,
            'nm_toko' => $nm_toko
        ) ;
        $this->load->model('M_User');
        $this->M_User->input_data($data,'tbl_toko');
        redirect('');
    }
}

    