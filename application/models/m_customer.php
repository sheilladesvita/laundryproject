<?php

class m_customer extends CI_Model {
    function getCustomer() {
        $query = "SELECT * FROM customer ;";
        return $this->db->query($query);
    }

    function addCustomer($id, $type) {
        $query = "INSERT INTO `customer`(`ID_CUSTOMER`, `ID_CUSTOMERTYPE`) VALUES ('$id','$type')";
        $this->db->query($query);
    }
}

?>