<?php

class m_service extends CI_Model {
    function getService() {
        $query = "SELECT id_service, nama_service FROM service;";
        return $this->db->query($query);
    }
}

?>