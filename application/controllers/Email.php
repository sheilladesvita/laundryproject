<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Email extends CI_Controller {
  public function index(){
        $data["active_link"] = "mail";
        $this->load->view('partials/header', $data);
        $this->load->view('pages/email');
        $this->load->view('partials/footer', $data);
    // $this->load->view('email');
  }
  public function send(){
    $this->load->library('mailer');
    $email_penerima = $this->input->post('email_penerima');
    $subjek = $this->input->post('subjek');
    $pesan = $this->input->post('pesan');
    $attachment = $_FILES['attachment'];
    $content = $this->load->view('pages/v_confirmation', array('pesan'=>$pesan), true); // Ambil isi file content.php dan masukan ke variabel $content
    $sendmail = array(
      'email_penerima'=>$email_penerima,
      'subjek'=>$subjek,
      'content'=>$content,
      'attachment'=>$attachment
    );
    if(empty($attachment['name'])){ // Jika tanpa attachment
      $send = $this->mailer->send($sendmail); // Panggil fungsi send yang ada di librari Mailer
    }else{ // Jika dengan attachment
      $send = $this->mailer->send_with_attachment($sendmail); // Panggil fungsi send_with_attachment yang ada di librari Mailer
    }
    echo "<b>".$send['status']."</b><br />";
    echo $send['message'];
    echo "<br /><a href='".base_url("index.php/email")."'>Kembali ke Form</a>";
  }
}