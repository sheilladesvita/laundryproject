<?php

class m_promo extends CI_Model {
    function getPromo() {
        $query = "SELECT id_promo, kode_promo, diskon, gambar, deskripsi, tanggal_berakhir, qty 
            FROM promo
            WHERE status=TRUE;";
        return $this->db->query($query);
    }
    
    function input_data($data,$table){
        return $this->db->insert($table,$data);
    }

    function delete($data,$id)
    {
        $this->db->where('id_promo',$id);
        return $this->db->update('promo', $data);
   }
}

?>