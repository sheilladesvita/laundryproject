<?php

class m_order extends CI_Model {
    function addOrder($data) {
        $this->db->insert('order_',$data);
    }

    function addItem($id_order, $id_serviceitem,$qty) {
        $query = "INSERT INTO `has`(`ID_ORDER`, `ID_SERVICEITEM`, `QTY`) VALUES ('$id_order','$id_serviceitem',$qty);";
        $this->db->query($query);
    }
}

?>