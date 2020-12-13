<?php

class service_item extends CI_Model {
    function getServiceItemByServiceId($id) {
        $query = "SELECT nama_serviceitem, harga FROM service_item WHERE id_service = '$id';";
        return $this->db->query($query);
    }
    
    function getServiceItemList($id) {
        $query = "SELECT id_serviceitem, nama_serviceitem FROM service_item WHERE id_service = '$id';";
        return $this->db->query($query);
    }   
}
?>