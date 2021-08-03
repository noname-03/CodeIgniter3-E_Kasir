<?php
class M_User extends CI_Model{
    function tampil_data(){
        return $this->db->get('tbl_toko');
    }
    function tampil_data_user(){
        return $this->db->get('tbl_user_toko');
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    function view_data($where,$table){
        return $this->db->get_where($table,$where);
    }
    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function delete_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    function data_user_toko($where){
		$this->db->select('*');
		$this->db->from('tbl_user_toko');
		$this->db->JOIN('tbl_toko','tbl_toko.id_toko=tbl_user_toko.id_toko');
		$this->db->where('tbl_toko.id_toko='.$where);
		$query = $this->db->get();
		return $query->result();			
	}
}