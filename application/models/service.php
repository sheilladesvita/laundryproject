<?php

class service extends CI_Model {
    function getService() {
        $query = "SELECT id_service, nama_service FROM service;";
        return $this->db->query($query);
    }

public function joinservice(){
    $query = "SELECT s.id_service, s.nama_service, s.unit, t.id_serviceitem, t.id_service, t.nama_serviceitem, t.harga 
    FROM service AS s, service_item AS t 
    WHERE s.id_service = t.id_service;";
    return $this->db->query($query);
    }
    
    function hapus_layanan($where,$table){
    $this->db->where($where);
		$this->db->delete($table);
    }

    function input_data($data,$table){
		return $this->db->insert($table,$data);
    }

    //function membuat format id baru berbentuk M0001
   public function get_newidlayanan($auto_id,$prefix){
    $newId = substr($auto_id, 1,4);
    $tambah = (int)$newId + 1;
    if (strlen($tambah) == 1){
       $id_serviceitem = $prefix."000" .$tambah;
    }
    else if (strlen($tambah) == 2){
       $id_serviceitem = $prefix."00" .$tambah;
    }
    else if(strlen($tambah) == 3){
       $id_serviceitem = $prefix."0".$tambah;   
    }
    else if(strlen($tambah) == 4){
       $id_serviceitem = $prefix.$tambah;   
    }
    return $id_serviceitem;
  } 
 }