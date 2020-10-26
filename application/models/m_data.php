<?php 
 
 class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('tenan');
    }
    
    function tampil_datamenu(){
		return $this->db->get('menu');
    }
    
    function tampil_datakasir(){
		return $this->db->get('kasir');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
    }
    
    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function hapus($id){
		// $this->db->hapus();
		$this->db->delete($table, array(
			'id' => $id
		));
	}
	
	function update_client_status(){
		// $servername = "localhost";
		// $username = "postgres";
		// $password = "123456";
		// $dbname = "pujasera";
		// $port = "5432";

		// Create connection
		$dbconn = Pg_connect("host=localhost port=5432 dbname=pujasera user=postgres password=123456");
		// Check connection
		if (!$dbconn) {
		  die("Connection failed: " . Pg_connect_error());
		}
		
		$sql = "UPDATE kasir SET status=false WHERE id=id";
		
		if (Pg_query($dbconn, $sql)) {
		  redirect('crud/datakasir');
		} else {
		  echo "Error updating record: " . mysqli_error($dbconn);
		}
		
		mysqli_close($dbconn);

	//    $this->db->select('kasir.id, kasir.status');
	//    $this->db->from('kasir'); 
	//    $this->db->where($status='active');
	//    $this->db->update('kasir');
	 }

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	public function join(){
        $data = $this->db->get('tenan');
        return $data->result_array();
	}
	
	public function joinlaporan(){
		$this->db->select('detail_pemesanan.pemesanan_id, detail_pemesanan.harga, pemesanan.tgl_pesan, pemesanan.tgl_bayar, detail_pemesanan.qty,detail_pemesanan.menu_id,pemesanan.kasir_id,pemesanan.status');
        $this->db->from('detail_pemesanan'); 
        $this->db->join('pemesanan', 'detail_pemesanan.pemesanan_id=pemesanan.id', 'full');  
		$query = $this->db->get();
		// return $query->result ();
		if($query->num_rows() != 0) {
			return $query->result_array();
			
		}
		else{
			return false;
		}
		// return $results;
	 }
	 public function joinmenu(){
		$this->db->select('menu.tenan_id, menu.nama, menu.harga, menu.kategori, tenan.id');
        $this->db->from('menu'); 
        $this->db->join('tenan', 'menu.tenan_id=tenan.id', 'full');  
		$query = $this->db->get();
		// return $query->result ();
		if($query->num_rows() != 0) {
			return $query->result_array();
			
		}
		else{
			return false;
		}
		// return $results;
	 }
}