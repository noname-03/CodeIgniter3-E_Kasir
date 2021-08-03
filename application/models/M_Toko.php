<?php
class M_Toko extends CI_Model{
    function tampil_data(){
        return $this->db->get('tbl_toko');
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
    function data_barang_toko($where){
		$this->db->select('*');
		$this->db->from('tbl_barang');
		$this->db->JOIN('tbl_toko','tbl_toko.id_toko=tbl_barang.id_toko');
		$this->db->where('tbl_toko.id_toko='.$where);
		$query = $this->db->get();
		return $query->result();			
    }
	function pilih_barang($where){
		$this->db->query('Select * from tbl_barang where NOT EXISTS (select * from tbl_transaksi where tbl_barang.id_barang = tbl_transaksi.id_barang)');$this->db->select('*');
		$this->db->from('tbl_barang');
		$this->db->JOIN('tbl_toko','tbl_toko.id_toko=tbl_barang.id_toko');
		$this->db->where('tbl_toko.id_toko='.$where);
        $sql = $this->db->get();
        return $sql->result_array();
    }
    // function join_data($where){
	// 	$this->db->select('*');
	// 	$this->db->from('tbl_transaksi');
	// 	$this->db->JOIN('tbl_toko','tbl_toko.id_toko=tbl_transaksi.id_toko');
	// 	$this->db->JOIN('tbl_barang','tbl_barang.id_barang=tbl_transaksi.id_barang');
	// 	$this->db->JOIN('tbl_tanggal','tbl_tanggal.id_tanggal=tbl_transaksi.id_tanggal');
	// 	$this->db->where('tbl_toko.id_toko='.$where);
	// 	// $this->db->where('tbl_tanggal.id_tanggal='.$id_tanggal);
	// 	$query = $this->db->get();
	// 	return $query->result();			
    // }
    
}