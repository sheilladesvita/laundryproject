<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_login_admin extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_admin_login');
		$this->load->helper('url');
 
    }
    public function login(){
        // $this->load->view('V_login');
           if($this->session->userdata('ad_username')!=null){
             redirect(base_url('ViewOnly/admin'));
           }
           $this->load->view('v_admin_login');
           var_dump($this->session->userdata());
      }
        public function aksi_login(){
        $username=htmlspecialchars($this->input->post('ad_username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
        $cek = $this->m_admin_login->cek_login($username,$password);
        if($cek->num_rows() > 0){
        $data=$cek->row_array();
        $this->session->set_userdata('aksi_login',TRUE);
        $this->session->set_userdata('ad_username',$data['ad_username']);
          if ($username == 'admin'){
                      redirect(base_url("ViewOnly/admin"));
                  } else{
                      redirect(base_url("ViewOnly/admin_login"));
                  }
            
              
        }else{
              echo "Username dan password salah !";
              redirect(base_url("ViewOnly/admin_login"));
        }
        }
        function logout(){
        $this->session->sess_destroy();
        // session_destroy();
        $this->load->view('ViewOnly/admin_login');
        }

}