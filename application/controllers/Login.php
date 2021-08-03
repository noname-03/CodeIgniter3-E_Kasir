<?php 
class Login extends CI_Controller{
    function __construct(){
    parent::__construct();
    $this->load->Model('M_Login');
    }
    function index(){
        $this->load->view('login');
    }
    function auth(){
        $username = htmlspecialchars($this->input->post('username', TRUE),ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE),ENT_QUOTES);
    
    $cek_admin = $this->M_Login->auth_admin($username,$password);
    $cek_toko = $this->M_Login->auth_toko($username,$password);
    $cek_user = $this->M_Login->auth_user($username,$password);

    if ($cek_admin->num_rows() > 0) {
        $data = $cek_admin->row_array();
        $this->session->set_userdata('masuk', TRUE);
        if ($data['status']=='Administrator') {
            $this->session->set_userdata('akses','Administrator');
            $this->session->set_userdata('ses_id',$data['username']);
            $this->session->set_userdata('ses_nama',$data['nm_user']);
            redirect('Root/Root');
                }
            }
            else if($cek_toko->num_rows() > 0){
                $data = $cek_toko->row_array();
                $this->session->set_userdata('masuk', TRUE);
                $this->session->set_userdata('akses','Dosen');
                $this->session->set_userdata('id',$data['id_toko']);
                $this->session->set_userdata('ses_id',$data['username']);
                $this->session->set_userdata('ses_nama',$data['nm_toko']);
                redirect('Admin/Admin');
            }else if ($cek_user->num_rows() > 0) {
                $data = $cek_user->row_array();
                $this->session->set_userdata('masuk', TRUE);
                if ($data['status']=='read') {
                    $this->session->set_userdata('akses','read');
                    $this->session->set_userdata('id',$data['id_toko']);
                    $this->session->set_userdata('ses_id',$data['username']);
                    $this->session->set_userdata('ses_nama',$data['nm_user']);
                    redirect('User_Read/User_Read');
                        }else{
                            $this->session->set_userdata('akses','read');
                            $this->session->set_userdata('id',$data['id_toko']);
                            $this->session->set_userdata('ses_id',$data['username']);
                            $this->session->set_userdata('ses_nama',$data['nm_user']);
                            redirect('User_Read_Write/User_Read_Write');
                        }
                    }else{
                $url=base_url();
                echo $this->session->set_flashdata('msg', '<div class="alert alert-warning alert-dismissible bg-warning tect-white border-0 fade show"
                        role="alert">
                        <button type="button" class="close" data-dismiss="alert"
                        aria-label="close">
                        <span aria-hidden="true">&times;</span></button> Username & Password Salah </div>');
                redirect($url);
        }
    }
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
}
?>