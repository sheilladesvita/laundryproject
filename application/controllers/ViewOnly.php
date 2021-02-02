<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ViewOnly extends CI_Controller
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
    $this->load->model('service');
    $this->load->model('m_customer');
    $this->load->model('m_member');
    $this->load->model('m_order');
    $this->load->model('m_promo');
    $this->load->helper('url');  
  }
  
  public function index()
  {
    $data["active_link"] = "home";
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_home');
    $this->load->view('partials/footer', $data);
  }

  public function test()
  {
    $data["active_link"] = "promo";
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_promo');
    $this->load->view('partials/footer', $data);
  }

  public function layanan()
  {
    $data["active_link"] = "layanan";
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_layanan');
    $this->load->view('partials/footer', $data);
  }

  public function layanan_satuan()
  {
    $data["active_link"] = "layanan";
    $data1['service_item'] = $this->m_service_item->getServiceItemByServiceId('S01')->result();
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_layanan_satuan', $data1);
    $this->load->view('partials/footer', $data);
  }

  public function layanan_kiloan()
  {
    $data["active_link"] = "layanan";
    $data1['service_item'] = $this->m_service_item->getServiceItemByServiceId('LK01')->result();
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_layanan_kiloan',$data1);
    $this->load->view('partials/footer', $data);
  }

  public function layanan_member()
  {
    $data["active_link"] = "layanan";
    $data1['service_item'] = $this->m_service_item->getServiceItemByServiceId('PMS01')->result();
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_layanan_member',$data1);
    $this->load->view('partials/footer', $data);
  }

  public function layanan_masjid() 
  {
    $data["active_link"] = "layanan";
    $data1['service_item'] = $this->m_service_item->getServiceItemByServiceId('PM01')->result();
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_layanan_masjid',$data1);
    $this->load->view('partials/footer', $data);
  }

  public function promo(){
    $data["active_link"] = "promo";
    $data["promo"] = $this->m_promo->getPromo()->result();
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_promo',$data);
    $this->load->view('partials/footer', $data);
  }

  public function about_us(){
    $data["active_link"] = "tentang_kami";
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_about');
    $this->load->view('partials/footer', $data);
  }

  public function order(){
    $data["active_link"] = "order";
    $data1['service'] = $this->m_service->getService()->result();
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_order',$data1);
    $this->load->view('partials/footer', $data);
  }

  public function register(){
    $customer = $this->m_customer->getCustomer()->result();
    $count = (count($customer)) + 1;
    $id_customer = "ID" . strval($count);
    $type = "member";
    
    $data = array(
      'id_customer' => $id_customer,
      'username' => $this->input->post('nama'),
      'id_customertype' => $type,
      'email' => $this->input->post('email'),
      'password' => md5($this->input->post('password')),
      'nomor_telepon' => $this->input->post('phone'),
      'alamat' => $this->input->post('address')
    );

    $this->m_customer->addCustomer($id_customer,$type);
    $this->m_member->addMember($data);
    $this->session->set_userdata($data);
    $_SESSION['success']=true;

    redirect('viewonly/welcome_register');
  }

  public function welcome_register(){
    $data["active_link"] = "welcome";
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_welcome_register');
    $this->load->view('partials/footer', $data);
  }

  public function login_member(){
		$email = $this->input->post('email');
    $password = md5($this->input->post('password'));
    
		$member = $this->m_member->login($email,$password)->result();
		if(count($member) > 0){
      foreach($member as $row) {
        $data_member = array(
          'id_customer' => $row->id_customer,
          'id_customertype' => $row->id_customertype,
          'username' => $row->username,
          'email' => $row->email,
          'nomor_telepon' => $row->nomor_telepon,
          'alamat' => $row->alamat,
        );
      }
 
			$this->session->set_userdata($data_member);
      $_SESSION['success']=true;
			redirect('viewonly/index');
		}else{
      echo '<script>alert("Email atau password yang Anda masukan salah.");
      window.location.href="'.base_url('viewonly/index').'";</script>';
		}
  }

  public function settings(){
    if(isset($_SESSION['success']) && $_SESSION['success']==true){
      $data["active_link"] = "settings";
      $this->load->view('partials/header', $data);
      $this->load->view('pages/v_settings_account');
    }else{
      redirect('viewonly/index');
    }
  }

  public function edit_account(){
    $id = $_SESSION['id_customer'];
    $type = $_SESSION['id_customertype'];
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $alamat = $this->input->post('alamat');
    $phone = $this->input->post('phone');
  
    $data = array(
      'id_customertype' => $type,
      'username' => $nama,
      'email' => $email,
      'nomor_telepon' => $phone,
      'alamat' => $alamat,
    );

    $where = array(
      'id_customer' => $id
    );

    $member = $this->m_member->update($where,$data,$id)->result();
    foreach($member as $row) {
      $data_member = array(
        'id_customer' => $row->id_customer,
        'id_customertype' => $row->id_customertype,
        'username' => $row->username,
        'email' => $row->email,
        'nomor_telepon' => $row->nomor_telepon,
        'alamat' => $row->alamat,
      );
    }

    $this->session->set_userdata($data_member);

    echo "<script>
    window.location.href='settings';
    alert('Data telah diupdate.');
    </script>";
  }

  public function change_password(){
    if(isset($_SESSION['success']) && $_SESSION['success']==true){
      $data["active_link"] = "settings";
      $this->load->view('partials/header', $data);
      $this->load->view('pages/v_change_password');
    }else{
      redirect('viewonly/index');
    }
  }

  public function update_password(){
    $oldPassword			= $_POST['oldPassword'];
		$newPassword			= $_POST['newPassword'];
		$confirmPassword	= $_POST['confirmPassword'];

		$oldPassword	= md5($oldPassword);
		$cek 			= $this->m_member->getPassword($_SESSION['id_customer'],$oldPassword)->result();
		
		if(count($cek) > 0){
      if($newPassword == $confirmPassword){
        $newPassword 	= md5($newPassword);
        if($this->m_member->updatePassword($newPassword,$_SESSION['id_customer'])){
          echo "<script>
          window.location.href='change_password';
          alert('Password berhasil diubah.');
          </script>";
        }else{
          echo '<script>alert("Gagal mengubah password.");
          window.location.href="'.base_url('viewonly/change_password').'";</script>';
        }					
      }else{
        echo '<script>alert("Konfirmasi password tidak cocok.");
        window.location.href="'.base_url('viewonly/change_password').'";</script>';
      }
		}else{
      echo '<script>alert("Password lama tidak cocok.");
      window.location.href="'.base_url('viewonly/change_password').'";</script>';
		}
  }

  public function logout(){
    $this->session->sess_destroy();
    $_SESSION['success'] = false;
		redirect('viewonly/index');
  }
//admin
  public function admin_login(){
    $this->load->view('pages/v_admin_login');
  }

  public function admin(){
    // $this->load->view('pages/v_admin');
    $data1['service']=$this->service->joinservice()->result();
    $data['content_div'] = $this->load->view('pages/v_admin', $data1, true);	
        $this->load->view('pages/v_admin', $data);
  }
  public function hapuslayanan($id){
		$where = array('id_serviceitem' => $id);
		$this->service->hapus_layanan($where,'service_item');
		redirect('ViewOnly/admin');
  }

function tambahlayanan(){
  $data1['service'] = $this->service->getService()->result();
  $this->load->view('pages/v_admin', $data);
}

function tambah_aksilayanan(){
  $id = $this->input->post('id');
  $nama = $this->input->post('nama_serviceitem');
  $harga = $this->input->post('harga');
  $kategori = $this->input->post('nama_service');

  $data = array(
    'id' => $id,
    'nama' => $nama_serviceitem,
    'harga' => $harga,
    'kategori' => $nama_service
    );
  $this->service->input_data($data,'service_item');
  redirect('ViewOnly/admin');
  }
  
  public function get_idlayanan(){
    $new_id =  $this->service->getservice()->result();
    if ($new_id > 0) {
          foreach ($new_id as $key) {
            $auto_id = $key->id_serviceitem;              
          }
    }      
    return $id_serviceitem = $this->service->get_newidlayanan($auto_id,'KC','KS','PMK','PMM','PMP','PMS','SB','SC','SG','SH','SJ','SK','SS');      
 }

 public function forgot_password(){
    $this->load->view('pages/v_forgot_password');
  }

  public function reset_password(){
    $this->load->view('pages/v_reset_password');
  }

  public function check_email(){
    $email = $this->input->post('email');

    $member = $this->m_member->getMemberByEmail($email)->row();
    if($member){
      $_SESSION['id_customer'] = $member->id_customer;
      redirect('viewonly/reset_password');
    }else{
      echo '<script>alert("Email ini tidak terdaftar.");
      window.location.href="'.base_url('viewonly/forgot_password').'";</script>';
    }
  }

  public function reset_newPassword(){
    $newPassword			= $_POST['newPassword'];
    $confirmPassword	= $_POST['confirmPassword'];
    
    if($newPassword == $confirmPassword){
      $newPassword 	= md5($newPassword);
      if($this->m_member->updatePassword($newPassword,$_SESSION['id_customer'])){
        unset($_SESSION['id_customer']);
        echo "<script>
        window.location.href='change_password';
        alert('Password berhasil diubah.');
        </script>";
      }else{
        echo '<script>alert("Gagal mengubah password.");
        window.location.href="'.base_url('viewonly/change_password').'";</script>';
      }					
    }else{
      echo '<script>alert("Konfirmasi password tidak cocok.");
      window.location.href="'.base_url('viewonly/change_password').'";</script>';
    }
  }
}
