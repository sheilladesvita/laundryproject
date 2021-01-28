<?php

class m_service_item extends CI_Model {
    function getServiceItemByServiceId($id) {
        $query = "SELECT nama_serviceitem, harga FROM service_item WHERE id_service = '$id';";
        return $this->db->query($query);
    }
    
    function getServiceItemList($id) {
        $query = "SELECT id_serviceitem, nama_serviceitem, harga FROM service_item WHERE id_service = '$id';";
        return $this->db->query($query);
    }

    function searchServiceItem($key) {
        $query = "SELECT * FROM service_item
        WHERE id_serviceitem LIKE '%$key%'";
        return $this->db->query($query);
    }

    function getServiceCart($id) {
        $query = "SELECT s.id_service, s.nama_service, i.id_serviceitem, i.nama_serviceitem, i.harga 
        FROM service AS s, service_item AS i 
        WHERE s.id_service = i.id_service AND i.id_serviceitem = '$id';";
        return $this->db->query($query);
    }

    public function delete($data,$id)
    {
        $this->db->where('id_serviceitem',$id);
        return $this->db->update('service_item', $data);
    }

    public function update($data,$id)
    {
        $this->db->where('id_serviceitem',$id);
        return $this->db->update('service_item', $data);
    }

}
?>