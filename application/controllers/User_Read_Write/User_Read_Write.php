<?php 
class User_Read_Write extends CI_Controller{
    function __construct(){
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url=base_url;
            redirect($url);
        }
    }
    function index(){
        $this->load->view('User_Read_Write/Template/headerandmenu.php');
        $this->load->view('User_Read_Write/Template/menu2.php');
        $this->load->view('User_Read_Write/index.php');
        $this->load->view('User_Read_Write/Template/footer.php');
    }
    // user toko
    function data_user_toko(){
        $where = $this->session->userdata('id');
        $this->load->model('M_User');
        $data['tbl_user_toko'] = $this->M_User->data_user_toko($where);
        $this->load->view('User_Read_Write/Template/headerandmenu.php');
        $this->load->view('User_Read_Write/Template/menu2.php');
        $this->load->view('User_Read_Write/data_user_toko.php',$data);
        $this->load->view('User_Read_Write/Template/footer.php');
    }
    function data_user_toko_input(){
        $this->load->view('User_Read_Write/Template/headerandmenu.php');
        $this->load->view('User_Read_Write/Template/menu2.php');
        $this->load->view('User_Read_Write/data_user_toko_input.php');
        $this->load->view('User_Read_Write/Template/footer.php');
    }
    function data_user_toko_input_aksi(){
        $id_toko = $this->input->POST('id_toko');
        $nm_user = $this->input->POST('nm_user');
        $password = $this->input->POST('password');
        $status = $this->input->POST('status');
        
        $data = array(
            'id_toko' => $id_toko = $this->session->userdata('id'),
            'nm_user' => $nm_user,
            'password' => $password,
            'status' => $status
        ) ;
        $this->load->model('M_Customer');
        $this->M_Customer->input_data($data,'tbl_user_toko');
        redirect('User_Read_Write/User_Read_Write/data_user_toko');
    }
    function data_user_toko_edit($id_user_toko){
        $where = array('id_user_toko'=> $id_user_toko);
        $this->load->model('M_User');
        $data['tbl_user_toko']=$this->M_User->view_data($where,'tbl_user_toko')->result();
        $this->load->view('User_Read_Write/Template/headerandmenu.php');
        $this->load->view('User_Read_Write/Template/menu2.php');
        $this->load->view('User_Read_Write/data_user_toko_edit.php',$data);
        $this->load->view('User_Read_Write/Template/footer.php');
    }
    function data_user_toko_edit_aksi(){
        $id_user_toko = $this->input->POST('id_user_toko');
        $id_toko = $this->input->POST('id_toko');
        $nm_user = $this->input->POST('nm_user');
        $password = $this->input->POST('password');
        $status = $this->input->POST('status'); 

        $data = array(
            'id_toko' => $id_toko = $this->session->userdata('id'),
            'nm_user' => $nm_user,
            'password' => $password,
            'status' => $status
        ) ;
        $where = array(
            'id_user_toko'=> $id_user_toko
        );
        $this->load->model('M_User');
        $this->M_User->update_data($where,$data,'tbl_user_toko');
        redirect('User_Read_Write/User_Read_Write/data_user_toko');
    }
    function data_user_toko_delete($id_user_toko){
        $where = array('id_user_toko' => $id_user_toko);
        $this->load->model('M_User');
        $this->M_User->delete_data($where,'tbl_user_toko');
        redirect('User_Read_Write/User_Read_Write/data_user_toko');
    }
    //Barang
    function data_barang(){
        $where = $this->session->userdata('id');
        $this->load->model('M_Barang');
        $data['tbl_barang'] = $this->M_Barang->data_barang_toko($where);
        $this->load->view('User_Read_Write/Template/headerandmenu.php');
        $this->load->view('User_Read_Write/Template/menu2.php');
        $this->load->view('User_Read_Write/data_barang.php',$data);
        $this->load->view('User_Read_Write/Template/footer.php');
    }
    function data_barang_input(){
        $this->load->view('User_Read_Write/Template/headerandmenu.php');
        $this->load->view('User_Read_Write/Template/menu2.php');
        $this->load->view('User_Read_Write/data_barang_input.php');
        $this->load->view('User_Read_Write/Template/footer.php');
    }
    function data_barang_input_aksi(){
        $id_toko = $this->input->POST('id_toko');
        $nm_barang = $this->input->POST('nm_barang');
        $hg_barang = $this->input->POST('hg_barang');
        $jmlh = $this->input->POST('jmlh');
        
        $data = array(
            'id_toko' => $id_toko = $this->session->userdata('id'),
            'nm_barang' => $nm_barang,
            'hg_barang' => $hg_barang,
            'jmlh' => $jmlh
        ) ;
        $this->load->model('M_Barang');
        $this->M_Barang->input_data($data,'tbl_barang');
        redirect('User_Read_Write/User_Read_Write/data_barang');
    }
    function data_barang_edit($id_barang){
        $where = array('id_barang'=> $id_barang);
        $this->load->model('M_Barang');
        $data['tbl_barang']=$this->M_Barang->view_data($where,'tbl_barang')->result();
        $this->load->view('User_Read_Write/Template/headerandmenu.php');
        $this->load->view('User_Read_Write/Template/menu2.php');
        $this->load->view('User_Read_Write/data_barang_edit.php',$data);
        $this->load->view('User_Read_Write/Template/footer.php');
    }
    
    function data_barang_edit_aksi(){
        $id_barang = $this->input->POST('id_barang');
        $id_toko = $this->input->POST('id_toko');
        $nm_barang = $this->input->POST('nm_barang');
        $hg_barang = $this->input->POST('hg_barang');
        $jmlh = $this->input->POST('jmlh');

        $data = array(
            'nm_barang' => $nm_barang,
            'hg_barang' => $hg_barang,
            'jmlh' => $jmlh,
            'id_toko' => $id_toko = $this->session->userdata('id')
        ) ;
        $where = array(
            'id_barang'=> $id_barang
        );
        $this->load->model('M_Barang');
        $this->M_Barang->update_data($where,$data,'tbl_barang');
        redirect('User_Read_Write/User_Read_Write/data_barang');
    }
    function data_barang_delete($id_barang){
        $where = array('id_barang' => $id_barang);
        $this->load->model('M_Barang');
        $this->M_Barang->delete_data($where,'tbl_barang');
        redirect('User_Read_Write/User_Read_Write/data_barang');
    }
    //transaksi
    function transaksi(){
        $where = $this->session->userdata('id');
        $this->load->model('M_Tanggal');
        $data['tbl_tanggal'] = $this->M_Tanggal->data_tanggal($where);
        $this->load->view('User_Read_Write/Template/headerandmenu.php');
        $this->load->view('User_Read_Write/Template/menu2.php');
        $this->load->view('User_Read_Write/transaksi.php',$data);
        $this->load->view('User_Read_Write/Template/footer.php');
    }
    // tanggal
    function data_tanggal_input_aksi(){
        $id_toko = $this->input->POST('id_toko');
        $tanggal = $this->input->POST('tanggal');
        
        $data = array(
            'id_toko' => $id_toko = $this->session->userdata('id'),
            'tanggal' => $tanggal
        ) ;
        $this->load->model('M_Barang');
        $this->M_Barang->input_data($data,'tbl_tanggal');
        redirect('User_Read_Write/User_Read_Write/transaksi');
    }
    function data_transaksi_input($id_tanggal){
        // where untuk data barang sesaui toko
        $where = $this->session->userdata('id');
        // record untuk mencatat pasti id dari tanggal
        $record = array('id_tanggal' => $id_tanggal);
        $this->load->model('M_Tanggal');
        $this->load->model('M_Barang');
        $data['tbl_tanggal'] = $this->M_Tanggal->view_data($record,'tbl_tanggal')->result();
        $data['tbl_barang'] = $this->M_Barang->pilih_barang($where); 
        $this->load->view('User_Read_Write/Template/headerandmenu.php');
        $this->load->view('User_Read_Write/Template/menu2.php');
        $this->load->view('User_Read_Write/data_transaksi_input.php',$data);
        $this->load->view('User_Read_Write/Template/footer.php');
    }
    function data_transaksi_view($id_tanggal){
        $where = array('id_tanggal' => $id_tanggal);
        $where2 = $this->session->userdata('id');
        $this->load->model('M_Tanggal');
        $this->load->model('M_Barang');
        $data['tbl_transaksi'] = $this->M_Tanggal->View_Barang($id_tanggal,$where2);
        $data['tbl_barang'] = $this->M_Tanggal->Join_Barang($id_tanggal);
        $data['tbl_tanggal']=$this->M_Tanggal->view_data($where,'tbl_tanggal')->result();
        $this->load->view('User_Read_Write/Template/headerandmenu.php');
        $this->load->view('User_Read_Write/Template/menu2.php');
        $this->load->view('User_Read_Write/data_transaksi.php',$data);
        $this->load->view('User_Read_Write/Template/footer.php');
    }
    function cetak_data($id_tanggal){
        $where = array('id_tanggal' => $id_tanggal);
        $where2 = $this->session->userdata('id');
        $this->load->model('M_Tanggal');
        $this->load->model('M_Barang');
        $data['tbl_transaksi'] = $this->M_Tanggal->View_Barang($id_tanggal,$where2);
        $data['tbl_barang'] = $this->M_Tanggal->Join_Barang($id_tanggal);
        $data['tbl_tanggal']=$this->M_Tanggal->view_data($where,'tbl_tanggal')->result();
        $this->load->view('User_Read_Write/cetak_data.php',$data);
    }
    function data_transaksi_input_aksi(){
		$idto = $this->input->POST('id_toko');
		$idb = $this->input->POST('id_barang');
		$idta = $this->input->POST('id_tanggal');
		
		for ($i=0; $i<count($idb) ; $i++) { 

			$data = array(
				'id_toko' => $idto = $this->session->userdata('id'),
                'id_tanggal' => $idta,
				'id_barang' => $idb[$i]
			);
			
			$this->load->model('M_Tanggal');
			$this->M_Tanggal->input_transaksi($data,'tbl_transaksi');
		}
		redirect('User_Read_Write/User_Read_Write/transaksi');
    }
    function data_tanggal_delete($id_tanggal){
            $where = array('id_tanggal' => $id_tanggal);
            $this->load->model('M_Tanggal');
            $this->M_Tanggal->delete_data($where,'tbl_tanggal');
            redirect('User_Read_Write/User_Read_Write/transaksi');
    }
}