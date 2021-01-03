<?php

class m_member extends CI_Model {
    function getNotMember() {
        $query = "SELECT * FROM not_member;";
        return $this->db->query($query);
    }

    function addNotMember($data) {
        $this->db->insert('not_member',$data);
    }

    function addMember($data) {
        $this->db->insert('member',$data);
    }

    function login($email,$password) {
        $query = "SELECT ID_CUSTOMER, USERNAME, EMAIL, NOMOR_TELEPON, ALAMAT 
        FROM member 
        WHERE EMAIL = '$email' AND PASSWORD = '$password';";
        return $this->db->query($query);
    }
}

?>