<?php
class M_Tanggal extends CI_Model{
    function tampil_data(){
        return $this->db->get('tbl_tanggal');
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
    function data_tanggal($where){
		$this->db->select('*');
		$this->db->from('tbl_tanggal');
		$this->db->JOIN('tbl_toko','tbl_toko.id_toko=tbl_tanggal.id_toko');
		$this->db->where('tbl_toko.id_toko='.$where);
		$query = $this->db->get();
		return $query->result();			
    }
    function input_transaksi($data,$table){
		$this->db->insert($table,$data);
    }
    function View_Barang($where,$where2){
		$this->db->select('*');
		$this->db->from('tbl_transaksi');
		$this->db->JOIN('tbl_barang','tbl_barang.id_barang=tbl_transaksi.id_barang');
		$this->db->JOIN('tbl_tanggal','tbl_tanggal.id_tanggal=tbl_transaksi.id_tanggal');
		$this->db->JOIN('tbl_toko','tbl_toko.id_toko=tbl_transaksi.id_toko');
		// $this->db->JOIN('tbl_dosen','tbl_dosen.id_dosen=tbl_jadwal.id_dosen');
		// $this->db->JOIN('tbl_mhs','tbl_mhs.id_mahasiswa=tbl_transaksi.id_mahasiswa');
		$this->db->where('tbl_tanggal.id_tanggal='.$where.' AND tbl_toko.id_toko='.$where2);
		$query = $this->db->get();
		return $query->result();
	}
    function Join_Barang($where){
		$this->db->select('*');
		$this->db->from('tbl_transaksi');
		$this->db->JOIN('tbl_barang','tbl_barang.id_barang=tbl_transaksi.id_barang');
		$this->db->where('tbl_transaksi.id_tanggal='.$where);
		$query = $this->db->get();
		return $query->result();
	}
}