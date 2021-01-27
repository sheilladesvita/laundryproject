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
    $this->load->model('m_service_item');
    $this->load->model('m_service');
    $this->load->helper('url');  
  }
  
  public function admin_login(){
    $this->load->view('pages/v_admin_login');
  }

  public function index(){
    $data['service'] = $this->m_service->getAllService()->result();
    $this->load->view('partials/admin_header');
    $this->load->view('pages/v_admin',$data);
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
}
