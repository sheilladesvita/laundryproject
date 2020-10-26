<?php 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['tenan'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
 
	function tambah(){
		$this->load->view('v_input');
	}
 
	function tambah_aksi(){
        $id = $this->input->post('id');
        $nama_tenan = $this->input->post('nama_tenan');
        $nama_pemilik = $this->input->post('nama_pemilik');
        $nomor_telepon = $this->input->post('telepon');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
 
		$data = array(
            'id' => $id,
            'nama_tenan' => $nama_tenan,
            'nama_pemilik' => $nama_pemilik,
            'nomor_telepon' => $nomor_telepon,
            'email' => $email,
            'alamat' => $alamat,
			);
		$this->m_data->input_data($data,'tenan');
		redirect('crud/index');
    }

    function update(){
        $id = $this->input->post('id');
        $nama_tenan = $this->input->post('nama');
        $nama_pemilik = $this->input->post('nama');
        $nomor_telepon = $this->input->post('telepon');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
     
        $data = array(
            'nama_tenan' => $nama_tenan,
            'nama_pemilik' => $nama_pemilik,
            'nomor_telepon' => $nomor_telepon,
            'email' => $email,
            'alamat' => $alamat,
			);
     
        $where = array(
            'id' => $id
        );
     
        $this->m_data->update_data($where,$data,'tenan');
        redirect('crud/index');
    }

    
    function updatestatus(){
      $this->m_data->update_client_status();
      // redirect('crud/datakasir');
  }

    // public function update_status($id)
    // {
    //       $status = $this->input->post('status');
    //       //  $id = $this->input->post('id');
    //        $this->m_data->update_client_status($id);
    //        redirect('crud/datakasir');
    //    }

  //   function hapus($id){
	// 	$where = array('id' => $id);
	// 	// $this->m_data->hapus_data($where,'tenan');
	// 	redirect('crud/index');
  // }
  // public function updatestatus()
	// {
	// 	$users_list = $this->db->select('*')->from('kasir')->order_by('id','desc')->get()->result(); //here i'm fetching the data form the table
	// 	$this->load->view('users_list',['users_list'=>$users_list]);//load all data in view page
	// }
	function edit($id){
		$where = array('id' => $id);
		$data['tenan'] = $this->m_data->edit_data($where,'tenan')->result();
		$this->load->view('v_edit',$data);
    }
    
    //menu
    function datamenu(){
		$data['menu'] = $this->m_data->tampil_datamenu()->result();
		$this->load->view('v_menu',$data);
    }
    
    function editmenu($id){
		$where = array('id' => $id);
		$data['menu'] = $this->m_data->edit_data($where,'menu')->result();
		$this->load->view('v_editmenu',$data);
    }

    function hapusmenu($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'menu');
		redirect('crud/datamenu');
    }
    
    function tambahmenu(){
		$this->load->view('v_inputmenu');
	}
 
	function tambah_aksimenu(){
    $id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$kategori = $this->input->post('kategori');
 
		$data = array(
      'id' => $id,
			'nama' => $nama,
			'harga' => $harga,
			'kategori' => $kategori
			);
		$this->m_data->input_data($data,'menu');
		redirect('crud/datamenu');
    }

    function updatemenu(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $kategori = $this->input->post('kategori');
     
        $data = array(
            'nama' => $nama,
            'harga' => $harga,
            'kategori' => $kategori
        );
     
        $where = array(
            'id' => $id
        );
     
        $this->m_data->update_data($where,$data,'menu');
        redirect('crud/datamenu');
    }

    //kasir

    function datakasir(){
		$data['kasir'] = $this->m_data->tampil_datakasir()->result();
		$this->load->view('v_kasir',$data);
    }
    
    function editkasir($id){
		$where = array('id' => $id);
		$data['kasir'] = $this->m_data->edit_data($where,'kasir')->result();
		$this->load->view('v_editkasir',$data);
    }

    function hapuskasir($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'kasir');
		redirect('crud/datakasir');
    }
    
    function tambahkasir(){
		$this->load->view('v_inputkasir');
	}
 
	function tambah_aksikasir(){
        $id = $this->input->post('id');
		    $nama_kasir = $this->input->post('nama_kasir');
        $nomor_telepon = $this->input->post('telepon');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
    
		$data = array(
            'id' => $id,
            'nama_kasir' => $nama_kasir,
            'nomor_telepon' => $nomor_telepon,
            'email' => $email,
            'alamat' => $alamat,
			);
		$this->m_data->input_data($data,'kasir');
		redirect('crud/datakasir');
    }

    function updatekasir(){
        $id = $this->input->post('id');
        $nama_kasir = $this->input->post('nama');
        $nomor_telepon = $this->input->post('telepon');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $status = $this->input->post('status');
    
    
		$data = array(
            'nama_kasir' => $nama_kasir,
            'nomor_telepon' => $nomor_telepon,
            'email' => $email,
            'alamat' => $alamat,
            'status'=> $status,
    
			);
     
        $where = "status = 'active'";
     
        $this->m_data->update_data($where,$data,'kasir');
        redirect('crud/datakasir');
    }

    //laporan

    function laporan(){
      $data['tenan'] = $this->m_data->tampil_data()->result();
      $this->load->view('v_laporan',$data);
    }

    public function join() {
      // $data1['pujasera']=$this->m_data->joinlaporan();
      $data1['pemesanan']=$this->m_data->joinlaporan();
      $data['content_div'] = $this->load->view('v_header',$data1,true);
      $this->load->view('v_laporandetail',$data);
  }

  public function join_menu() {
    // $data1['pujasera']=$this->m_data->joinlaporan();
    $data1['menu']=$this->m_data->joinmenu();
    $data['content_div'] = $this->load->view('v_header',$data1,true);
    $this->load->view('v_menu',$data);
}

}