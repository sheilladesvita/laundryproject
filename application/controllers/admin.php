<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   *	- or -
   * 		http://example.com/index.php/welcome/index
   *	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  function __construct()
  {
    parent::__construct();
    $this->load->model('m_admin_login');
    $this->load->model('m_service_item');
    $this->load->model('m_promo');
    $this->load->model('m_service');
    $this->load->model('m_member');
    $this->load->helper('url');  
  }
  
  public function login(){
    $this->load->view('pages/v_admin_login');
  }

  public function aksi_login(){
    $username = $this->input->post('ad_username');
    $password = $this->input->post('password');

    $user = $this->m_admin_login->cek_login($username,$password)->result();
    if(count($user) > 0){
      foreach($user as $row) {
        $data = array(
          'username' => $row->ad_username,
          'nama' => $row->nama,
        );
      }

      $this->session->set_userdata($data);
      $_SESSION['login_admin']=true;
      redirect('admin/index');
    }else{
      echo '<script>alert("Username atau password yang Anda masukan salah.");
      window.location.href="'.base_url('admin/login').'";</script>';
    }
  }

  public function logout(){
    $this->session->sess_destroy();
		redirect('admin/login');
  }

  public function index(){
    if(isset($_SESSION['login_admin']) && $_SESSION['login_admin']==true){
      $data["active_link"] = "pesanan";
      $data['serviceitem'] = $this->m_service->joinservice()->result();
      $this->load->view('partials/admin_header',$data);
      $this->load->view('pages/v_admin_pesanan',$data);
    }else{
      redirect('admin/login');
    }
  }

  public function member(){
    if(isset($_SESSION['login_admin']) && $_SESSION['login_admin']==true){
      $data["active_link"] = "member";
      $data['member'] = $this->m_member->getMember()->result();
      $this->load->view('partials/admin_header',$data);
      $this->load->view('pages/v_admin_member',$data);
    }else{
      redirect('admin/login');
    }
  }

  public function layanan(){
    if(isset($_SESSION['login_admin']) && $_SESSION['login_admin']==true){
      $data["active_link"] = "layanan";
      $data['service'] = $this->m_service->getAllService()->result();
      $data['serviceitem'] = $this->m_service->joinservice()->result();
      $this->load->view('partials/admin_header',$data);
      $this->load->view('pages/v_admin_layanan',$data);
    }else{
      redirect('admin/login');
    }
  }

  public function promo(){
    if(isset($_SESSION['login_admin']) && $_SESSION['login_admin']==true){
      $data["active_link"] = "promo";
      $data['promo'] = $this->m_promo->getPromo()->result();
      $this->load->view('partials/admin_header',$data);
      $this->load->view('pages/v_admin_promo',$data);
    }else{
      redirect('admin/login');
    }
  }

  public function get_idLayanan($kategori,$nama_serviceitem){
    switch ($kategori) {
      case "LK01":
        $id = 'K'.substr($nama_serviceitem,0,1);
        break;
      case "PM01":
        $id = 'PM'.substr($nama_serviceitem,0,1);
        break;
      case "PMS01":
        $id = 'PMS';
        break;
      case "S01":
        $id = 'S'.substr($nama_serviceitem,0,1);
    }

    $serviceitem =  $this->m_service_item->searchServiceItem($id)->result();
    $count = (count($serviceitem)) + 1;
    if ($count < 10)
      $id = $id."0".strval($count);
    else
      $id = $id.strval($count);
          
    return $id;      
  }

  function tambah_aksilayanan(){
    $nama = $this->input->post('nama_serviceitem');
    $harga = $this->input->post('harga');
    $kategori = $this->input->post('service');

    $id = $this->get_idLayanan($kategori,$nama);
  
    $data = array(
      'id_serviceitem' => $id,
      'id_service' => $kategori,
      'nama_serviceitem' => $nama,
      'harga' => $harga,
    );

    $this->m_service->input_data($data,'service_item');
    redirect('admin/index');
  }

  function tambah_aksipromo(){
    $config['upload_path']          = './assets/images/promo/';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 1024;
    
		$this->load->library('upload', $config);
    
    if (!$this->upload->do_upload())
		{
				$error = array('error' => $this->upload->display_errors());
				redirect('admin/promo');
		}
		else
		{
      if($this->input->post('qty')==0)
        $qty = null;
      else
        $qty = $this->input->post('qty');

      if($this->input->post('batas_harga')==0)
        $batas_harga = null;
      else
        $batas_harga = $this->input->post('batas_harga');

      $data = array(
        'kode_promo' => $this->input->post('kode_promo'),
        'diskon'  => $this->input->post('diskon')/100,
        'gambar' => $this->upload->data("file_name"),
        'deskripsi' => $this->input->post('desc'),
        'tanggal_berakhir' => $this->input->post('tgl_berakhir'),
        'batas_harga' => $batas_harga,
        'qty' => $qty
      );
      
      $this->m_promo->input_data($data,'promo');
			redirect('admin/promo');
    }
  }

  function hapus_layanan($id){
    if (!isset($id)) show_404();
    $data = array(
      'status' => FALSE
    );
    if ($this->m_service_item->delete($data,$id)) {
        redirect(site_url('admin/layanan'));
    }
  }

  function hapus_promo($id){
    if (!isset($id)) show_404();
    $data = array(
      'status' => FALSE
    );
    if ($this->m_promo->delete($data,$id)) {
        redirect(site_url('admin/promo'));
    }
  }

  function edit_layanan(){
    $id = $this->input->post('id_serviceitem');
    $data = array(
        'id_service' => $this->input->post('service'),
        'nama_serviceitem'  => $this->input->post('nama_serviceitem'),
        'harga' => $this->input->post('harga')
    );

    if ($this->m_service_item->update($data,$id)) {
      redirect('admin/layanan');
    }
  }
}
