<?php

class service_item extends CI_Model {
    function listServiceItemByServiceId($id) {
        $query = "SELECT nama_serviceitem, harga FROM service_item WHERE id_service = '$id';";
        return $this->db->query($query);
    }    
}
?>