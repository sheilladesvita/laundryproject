<?php

class m_promo extends CI_Model {
    function getPromo() {
        $query = "SELECT id_promo, kode_promo, diskon, gambar, deskripsi, tanggal_berakhir, batas_harga, qty 
            FROM promo
            WHERE status=TRUE;";
        return $this->db->query($query);
    }

    function getPromoByKode($kode) {
        $query = "SELECT id_promo, kode_promo, diskon, tanggal_berakhir, batas_harga, qty 
            FROM promo
            WHERE kode_promo='$kode' 
            AND status=TRUE;";
        return $this->db->query($query);
    }

    function getPromoByIdOrder($id){
        $query = "SELECT a.id_promo, a.id_order, b.kode_promo, b.diskon 
        FROM have AS a, promo AS b 
        WHERE a.id_promo = b.id_promo AND
        a.id_order = '$id'";
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

   function update_qtyPromo($id,$data){
        $this->db->where('id_promo',$id);
        return $this->db->update('promo',$data);
   }

   function addPromoOrder($data){
       $this->db->insert('have',$data);
   }
}

?>