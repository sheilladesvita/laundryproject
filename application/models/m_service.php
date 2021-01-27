<?php

class m_service extends CI_Model {
    function getService() {
        $query = "SELECT a.id_service, a.nama_service, a.unit 
            FROM service a WHERE NOT EXISTS
            (SELECT * FROM service b 
            WHERE a.id_service = b.id_service AND b.id_service = 'PMS01');";
        return $this->db->query($query);
    }

    function getAllService() {
        $query = "SELECT id_service, nama_service FROM service;";
        return $this->db->query($query);
    }

    function getServiceMember() {
        $query = "SELECT id_service, nama_service FROM service;";
        return $this->db->query($query);
    }

    public function joinservice(){
        $query = "SELECT s.id_service, s.nama_service, s.unit, t.id_serviceitem, t.id_service, t.nama_serviceitem, t.harga 
        FROM service AS s, service_item AS t 
        WHERE s.id_service = t.id_service;";
        return $this->db->query($query);
    }

    function input_data($data,$table){
        return $this->db->insert($table,$data);
    }
}

?>