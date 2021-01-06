<?php

class m_service extends CI_Model {
    function getService() {
        $query = "SELECT a.id_service, a.nama_service, a.unit 
            FROM service a WHERE NOT EXISTS
            (SELECT * FROM service b 
            WHERE a.id_service = b.id_service AND b.id_service = 'PMS01');";
        return $this->db->query($query);
    }

    function getServiceMember() {
        $query = "SELECT id_service, nama_service FROM service;";
        return $this->db->query($query);
    }
}

?>