<?php

class member extends CI_Model {
    function getNotMember() {
        $query = "SELECT * FROM not_member;";
        return $this->db->query($query);
    }

    function addNotMember($data) {
        $this->db->insert('not_member',$data);
    }
}

?>