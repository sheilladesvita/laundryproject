<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class C_Login extends CI_Controller {
        public function __construct() {

            parent::__construct();

            //Load model
            $this->load->model('m_admin');
        }

        public function index() {
            $this->load->view('v_login');
        }

        public function login_action() {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $cek = count($this->m_admin->Login($username,$password));
            if($cek > 0){

                $this->session->set_userdata('nama',$username);
                $this->session->set_userdata('login',TRUE);

                redirect('c_home/display');
            }else{
                redirect('c_login/index');
            }
        }

        public function logout_action() {
            $this->session->sess_destroy();
            redirect('c_login/index');
        }
    }
?>