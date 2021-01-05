<?php

class m_order extends CI_Model {
    function addOrder($data) {
        $this->db->insert('order_',$data);
    }

    function addItem($id_order, $id_serviceitem,$qty) {
        $query = "INSERT INTO `has`(`ID_ORDER`, `ID_SERVICEITEM`, `QTY`) VALUES ('$id_order','$id_serviceitem',$qty);";
        $this->db->query($query);
    }

    function getOrder($id_order,$name,$table) {
        $query = "SELECT a.$name, a.email, a.nomor_telepon, 
            b.id_customer, b.alamat, b.total_price, DATE_FORMAT(b.waktu_pickup, '%d/%m/%Y') AS waktu_pickup, b.catatan, b.pembayaran    
            FROM $table AS a, order_ AS b   
            WHERE a.id_customer = b.id_customer AND b.id_order = '$id_order';";
        return $this->db->query($query);
    }

    function getOrderItem($id_order) {
        $query = "SELECT a.nama_serviceitem, a.harga, b.qty 
            FROM service_item AS a, has AS b 
            WHERE a.id_serviceitem = b.id_serviceitem AND b.id_order = '$id_order';";
        return $this->db->query($query);
    }
}

?>