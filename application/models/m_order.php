<?php

class m_order extends CI_Model {
    function addOrder($data) {
        $this->db->insert('order_',$data);
    }

    function addItem($id_order, $id_serviceitem,$qty) {
        $query = "INSERT INTO `has`(`ID_ORDER`, `ID_SERVICEITEM`, `QTY`) 
            VALUES ('$id_order','$id_serviceitem',$qty);";
        $this->db->query($query);
    }

    function getOrder(){
        $query = "SELECT id_order, id_customer, DATE_FORMAT(tanggal_pesan,'%d/%m/%Y') AS tgl_pesan, total_price, DATE_FORMAT(WAKTU_PICKUP,'%d/%m/%Y') AS waktu_pickup, pembayaran, status 
            FROM order_ ORDER BY tanggal_pesan DESC;";
        return $this->db->query($query);
    }

    function getOrderById($id_order,$name,$table) {
        $query = "SELECT a.$name, a.email, a.nomor_telepon, 
            b.id_customer, b.alamat, b.total_price, 
            DATE_FORMAT(b.waktu_pickup, '%d/%m/%Y') AS waktu_pickup, 
            DATE_FORMAT(b.tanggal_pesan, '%d/%m/%Y') AS tanggal_pesan, 
            DATE_FORMAT(b.tanggal_bayar, '%d/%m/%Y') AS tanggal_bayar, b.catatan, b.pembayaran    
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

    function updateStatus($id,$data){
        $this->db->where('id_order',$id);
        return $this->db->update('order_', $data);
    }
}

?>