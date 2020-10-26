<?php
    class m_admin extends CI_Model {
        public function Login($username,$password) {
            $data = $this->db->query("SELECT * FROM pengguna WHERE username='$username' and password='$password' ");
            return $data->result_array();
        }
    }
?>