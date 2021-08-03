<?php 
class Root extends CI_Controller{
    function __construct(){
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url=base_url;
            redirect($url);
        }
    }
    function index(){
        $this->load->view('Root/Template/headerandmenu.php');
        $this->load->view('Root/Template/menu2.php');
        $this->load->view('Root/index.php');
        $this->load->view('Root/Template/footer.php');
    }
    // toko
    function data_toko(){
        $this->load->model('M_Toko');
        $data['tbl_toko'] = $this->M_Toko->tampil_data()->result();
        $this->load->view('Root/Template/headerandmenu.php');
        $this->load->view('Root/Template/menu2.php');
        $this->load->view('Root/data_toko.php',$data);
        $this->load->view('Root/Template/footer.php');
    }
    function data_toko_input(){
        $this->load->view('Root/Template/headerandmenu.php');
        $this->load->view('Root/Template/menu2.php');
        $this->load->view('Root/data_toko_input.php');
        $this->load->view('Root/Template/footer.php');
    }
    function data_toko_input_aksi(){
        $username = $this->input->POST('username');
        $nm_toko = $this->input->POST('nm_toko');
        $password = $this->input->POST('password');
        
        $data = array(
            'username' => $username,
            'nm_toko' => $nm_toko,
            'password' => $password
        ) ;
        $this->load->model('M_Toko');
        $this->M_Toko->input_data($data,'tbl_toko');
        redirect('Root/Root/data_toko');
    }
    function data_toko_edit($id_toko){
        $where = array('id_toko'=> $id_toko);
        $this->load->model('M_Toko');
        $data['tbl_toko']=$this->M_Toko->view_data($where,'tbl_toko')->result();
        $this->load->view('Root/Template/headerandmenu.php');
        $this->load->view('Root/Template/menu2.php');
        $this->load->view('Root/data_toko_edit.php',$data);
        $this->load->view('Root/Template/footer.php');
    }
    function data_toko_edit_aksi(){
        $id_toko = $this->input->POST('id_toko');
        $username = $this->input->POST('username');
        $nm_toko = $this->input->POST('nm_toko');
        $password = $this->input->POST('password');
        $data = array(
            'username' => $username,
            'nm_toko' => $nm_toko,
            'password' => $password
        ) ;
        $where = array(
            'id_toko'=> $id_toko
        );
        $this->load->model('M_Toko');
        $this->M_Toko->update_data($where,$data,'tbl_toko');
        redirect('Root/Root/data_toko');
    }
    function data_toko_delete($id_toko){
        $where = array('id_toko' => $id_toko);
        $this->load->model('M_Toko');
        $this->M_Toko->delete_data($where,'tbl_toko');
        redirect('Root/Root/data_toko');
    }
    //karyawan
    function data_karyawan(){
        $this->load->model('M_Karyawan');
        $data['tbl_karyawan'] = $this->M_Karyawan->tampil_data()->result();
        $this->load->view('Root/Template/headerandmenu.php');
        $this->load->view('Root/Template/menu2.php');
        $this->load->view('Root/data_karyawan.php',$data);
        $this->load->view('Root/Template/footer.php');
    }
    function data_karyawan_input(){
        $this->load->view('Root/Template/headerandmenu.php');
        $this->load->view('Root/Template/menu2.php');
        $this->load->view('Root/data_karyawan_input.php');
        $this->load->view('Root/Template/footer.php');
    }
    function data_karyawan_input_aksi(){
        $nm_karyawan = $this->input->POST('nm_karyawan');
        $nohp = $this->input->POST('nohp');
        $alamat = $this->input->POST('alamat');
        $nip = $this->input->POST('nip');
        $gender = $this->input->POST('gender');
        
        $data = array(
            'nm_karyawan' => $nm_karyawan,
            'nohp' => $nohp,
            'alamat' => $alamat,
            'nip' => $nip,
            'gender' => $gender
        ) ;
        $this->load->model('M_Karyawan');
        $this->M_Karyawan->input_data($data,'tbl_karyawan');
        redirect('Root/Root/data_karyawan');
    }
    function data_karyawan_edit($id_karyawan){
        $where = array('id_karyawan'=> $id_karyawan);
        $this->load->model('M_Karyawan');
        $data['tbl_karyawan']=$this->M_Karyawan->view_data($where,'tbl_karyawan')->result();
        $this->load->view('Root/Template/headerandmenu.php');
        $this->load->view('Root/Template/menu2.php');
        $this->load->view('Root/data_karyawan_edit.php',$data);
        $this->load->view('Root/Template/footer.php');
    }
    
    function data_karyawan_edit_aksi(){
        $id_karyawan = $this->input->POST('id_karyawan');
        $nm_karyawan = $this->input->POST('nm_karyawan');
        $gender = $this->input->POST('gender');
        $nohp = $this->input->POST('nohp');
        $alamat = $this->input->POST('alamat');

        $data = array(
            'nm_karyawan' => $nm_karyawan,
            'gender' => $gender,
            'nohp' => $nohp,
            'alamat' => $alamat
        ) ;
        $where = array(
            'id_karyawan'=> $id_karyawan
        );
        $this->load->model('M_Karyawan');
        $this->M_Karyawan->update_data($where,$data,'tbl_karyawan');
        redirect('Root/Root/data_karyawan');
    }
    function data_karyawan_delete($id_karyawan){
        $where = array('id_karyawan' => $id_karyawan);
        $this->load->model('M_Karyawan');
        $this->M_Karyawan->delete_data($where,'tbl_karyawan');
        redirect('Root/Root/data_karyawan');
    }
    //Motor
    function data_motor(){
        $this->load->model('M_Motor');
        $data['tbl_motor'] = $this->M_Motor->tampil_data()->result();
        $this->load->view('Root/Template/headerandmenu.php');
        $this->load->view('Root/Template/menu2.php');
        $this->load->view('Root/data_motor.php',$data);
        $this->load->view('Root/Template/footer.php');
    }
    function data_motor_input(){
        $this->load->view('Root/Template/headerandmenu.php');
        $this->load->view('Root/Template/menu2.php');
        $this->load->view('Root/data_motor_input.php');
        $this->load->view('Root/Template/footer.php');
    }
    function data_motor_input_aksi(){
        $nm_motor = $this->input->POST('nm_motor');
        $jns_motor = $this->input->POST('jns_motor');
        $hg_motor = $this->input->POST('hg_motor');
        $merk_motor = $this->input->POST('merk_motor');
        
        $data = array(
            'nm_motor' => $nm_motor,
            'jns_motor' => $jns_motor,
            'hg_motor' => $hg_motor,
            'merk_motor' => $merk_motor
        ) ;
        $this->load->model('M_Motor');
        $this->M_Motor->input_data($data,'tbl_motor');
        redirect('Root/Root/data_motor');
    }
    function data_motor_edit($id_motor){
        $where = array('id_motor'=> $id_motor);
        $this->load->model('M_Motor');
        $data['tbl_motor']=$this->M_Motor->view_data($where,'tbl_motor')->result();
        $this->load->view('Root/Template/headerandmenu.php');
        $this->load->view('Root/Template/menu2.php');
        $this->load->view('Root/data_motor_edit.php',$data);
        $this->load->view('Root/Template/footer.php');
    }
    function data_motor_edit_aksi(){
        $id_motor = $this->input->POST('id_motor');
        $nm_motor = $this->input->POST('nm_motor');
        $jns_motor = $this->input->POST('jns_motor');
        $hg_motor = $this->input->POST('hg_motor');
        $merk_motor = $this->input->POST('merk_motor');
        $alamat = $this->input->POST('alamat');

        $data = array(
            'nm_motor' => $nm_motor,
            'jns_motor' => $jns_motor,
            'hg_motor' => $hg_motor,
            'merk_motor' => $merk_motor
        ) ;
        $where = array(
            'id_motor'=> $id_motor
        );
        $this->load->model('M_Motor');
        $this->M_Motor->update_data($where,$data,'tbl_motor');
        redirect('Root/Root/data_motor');
    }
    function data_motor_delete($id_motor){
        $where = array('id_motor' => $id_motor);
        $this->load->model('M_Motor');
        $this->M_Motor->delete_data($where,'tbl_motor');
        redirect('Root/Root/data_motor');
    }
    //data suplier
    function data_suplier(){
        $this->load->model('M_Suplier');
        $data['tbl_suplier'] = $this->M_Suplier->tampil_data()->result();
        $this->load->view('Root/Template/headerandmenu.php');
        $this->load->view('Root/Template/menu2.php');
        $this->load->view('Root/data_suplier.php',$data);
        $this->load->view('Root/Template/footer.php');
    }
    function data_suplier_input(){
        $this->load->view('Root/Template/headerandmenu.php');
        $this->load->view('Root/Template/menu2.php');
        $this->load->view('Root/data_suplier_input.php');
        $this->load->view('Root/Template/footer.php');
    }
    function data_suplier_input_aksi(){
        $nm_sup = $this->input->POST('nm_sup');
        $merk_motor = $this->input->POST('merk_motor');
        $jns_motor = $this->input->POST('jns_motor');
        $jmlh = $this->input->POST('jmlh');
        
        $data = array(
            'nm_sup' => $nm_sup,
            'merk_motor' => $merk_motor,
            'jns_motor' => $jns_motor,
            'jmlh' => $jmlh
        ) ;
        $this->load->model('M_Suplier');
        $this->M_Suplier->input_data($data,'tbl_suplier');
        redirect('Root/Root/data_suplier');
    }
    function data_suplier_edit($id_sup){
        $where = array('id_sup'=> $id_sup);
        $this->load->model('M_Suplier');
        $data['tbl_suplier']=$this->M_Suplier->view_data($where,'tbl_suplier')->result();
        $this->load->view('Root/Template/headerandmenu.php');
        $this->load->view('Root/Template/menu2.php');
        $this->load->view('Root/data_suplier_edit.php',$data);
        $this->load->view('Root/Template/footer.php');
    }
    function data_suplier_edit_aksi(){
        $id_sup = $this->input->POST('id_sup');
        $nm_sup = $this->input->POST('nm_sup');
        $merk_motor = $this->input->POST('merk_motor');
        $jns_motor = $this->input->POST('jns_motor');
        $jmlh = $this->input->POST('jmlh');
        
        $data = array(
            'nm_sup' => $nm_sup,
            'merk_motor' => $merk_motor,
            'jns_motor' => $jns_motor,
            'jmlh' => $jmlh,
        ) ;
        $where = array(
            'id_sup'=> $id_sup
        );
        $this->load->model('M_Suplier');
        $this->M_Suplier->update_data($where,$data,'tbl_suplier');
        redirect('Root/Root/data_suplier');
    }
    function data_suplier_delete($id_sup){
        $where = array('id_sup' => $id_sup);
        $this->load->model('M_Suplier');
        $this->M_Suplier->delete_data($where,'tbl_suplier');
        redirect('Root/Root/data_suplier');
    }
    //Data kredit
    function data_kredit(){
        $this->load->model('M_Kredit');
        $data['tbl_kredit'] = $this->M_Kredit->tampil_data()->result();
        $this->load->view('Root/Template/headerandmenu.php');
        $this->load->view('Root/Template/menu2.php');
        $this->load->view('Root/data_kredit.php',$data);
        $this->load->view('Root/Template/footer.php');
    }
    function data_kredit_input(){
        $this->load->view('Root/Template/headerandmenu.php');
        $this->load->view('Root/Template/menu2.php');
        $this->load->model('ModCus');
        $data['tbl_customer'] = $this->ModCus->getAll();
        $this->load->model('ModMot');
        $data['tbl_motor'] = $this->ModMot->getAll();
        $this->load->view('Root/data_kredit_input.php',$data);
        $this->load->view('Root/Template/footer.php');
    }
    
    function data_kredit_input_aksi(){
        $lm_angsuran = $this->input->POST('lm_angsuran');
        $nm_kredit = $this->input->POST('nm_kredit');
        $dp_awal = $this->input->POST('dp_awal');
        $bln_angsuran = $this->input->POST('bln_angsuran');
        $hg_motor = $this->input->POST('hg_motor');
        $nm_motor = $this->input->POST('nm_motor');
        
        $data = array(
            'lm_angsuran' => $lm_angsuran,
            'nm_kredit' => $nm_kredit,
            'dp_awal' => $dp_awal,
            'bln_angsuran' => ($hg_motor - $dp_awal) / $lm_angsuran,
            'hg_motor' => $hg_motor,
            'nm_motor' => $nm_motor
        ) ;
        $this->load->model('M_Kredit');
        $this->M_Kredit->input_data($data,'tbl_kredit');
        redirect('Root/Root/data_kredit');
    }
    function data_kredit_edit($id_kredit){
         $where = array('id_kredit'=> $id_kredit);
         $this->load->model('M_Kredit');
         $data['tbl_kredit']=$this->M_Kredit->view_data($where,'tbl_kredit')->result();
         $this->load->view('Root/Template/headerandmenu.php');
         $this->load->view('Root/Template/menu2.php');
         $this->load->model('ModCus');
         $data['tbl_customer'] = $this->ModCus->getAll();
         $this->load->model('ModMot');
         $data['tbl_motor'] = $this->ModMot->getAll();
         $this->load->view('Root/data_kredit_edit.php',$data);
         $this->load->view('Root/Template/footer.php');
    }
    function data_kredit_edit_aksi(){
        $id_kredit = $this->input->POST('id_kredit');
        $nm_kredit = $this->input->POST('nm_kredit');
        $lm_angsuran = $this->input->POST('lm_angsuran');
        $dp_awal = $this->input->POST('dp_awal');
        $hg_motor = $this->input->POST('hg_motor');
        $nm_motor = $this->input->POST('nm_motor');
        $bln_angsuran = $this->input->POST('bln_angsuran');
     
        $data = array(
            'nm_kredit' => $nm_kredit,
            'lm_angsuran' => $lm_angsuran,
            'dp_awal' => $dp_awal,
            'hg_motor' => $hg_motor,
            'nm_motor' => $nm_motor,
            'bln_angsuran' => ($hg_motor - $dp_awal) / $lm_angsuran
        ) ;
        $where = array(
            'id_kredit'=> $id_kredit
        );
        $this->load->model('M_Kredit');
        $this->M_Kredit->update_data($where,$data,'tbl_kredit');
        redirect('Root/Root/data_kredit');
    }
    function data_kredit_delete($id_kredit){
        $where = array('id_kredit' => $id_kredit);
        $this->load->model('M_Kredit');
        $this->M_Kredit->delete_data($where,'tbl_kredit');
        redirect('Root/Root/data_kredit');
    }
    //
    function laporan_pdf(){

        $this->load->model('M_Kredit');
        $data['tbl_kredit'] = $this->M_Kredit->tampil_data()->result();
        
    
        $this->load->library('pdf');
    
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('laporan_pdf', $data);
    
    
    }
}
?>