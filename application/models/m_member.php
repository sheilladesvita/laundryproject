<?php

class m_member extends CI_Model {
    function getNotMember() {
        $query = "SELECT * FROM not_member;";
        return $this->db->query($query);
    }

    function getMember() {
        $query = "SELECT id_customer, username, email, nomor_telepon, alamat FROM member;";
        return $this->db->query($query);
    }

    function addNotMember($data) {
        $this->db->insert('not_member',$data);
    }

    function addMember($data) {
        $this->db->insert('member',$data);
    }

    function login($email,$password) {
        $query = "SELECT id_customer, username, id_customertype, email, nomor_telepon, alamat 
        FROM member 
        WHERE EMAIL = '$email' AND PASSWORD = '$password';";
        return $this->db->query($query);
    }

    function update($where,$data,$id) {
        $query = "SELECT id_customer, username, id_customertype, email, nomor_telepon, alamat 
        FROM member 
        WHERE id_customer = '$id';";

        $this->db->where($where);
        $this->db->update('member',$data);
        
        return $this->db->query($query);
    }

    function getPassword($id,$password){
        $query = "SELECT password
        FROM member 
        WHERE id_customer = '$id' AND PASSWORD = '$password';";
        return $this->db->query($query);
    }

    function updatePassword($newPassword,$id){
        $query = "UPDATE member SET password='$newPassword' 
        WHERE id_customer='$id';";
        return $this->db->query($query);
    }
}

?>