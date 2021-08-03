<?php 
class M_Login extends CI_Model{
    function auth_admin($username, $password){
        $query = $this->db->query("Select * From tbl_user where username = '$username' AND password ='$password' limit 1");
        return $query;
    }
    function auth_toko($username, $password){
        $query = $this->db->query("Select * From tbl_toko where username = '$username' AND password ='$password' limit 1");
        return $query;
    }
    function auth_user($username, $password){
        $query = $this->db->query("Select * From tbl_user_toko where nm_user = '$username' AND password ='$password' limit 1");
        return $query;
    }
}
?>