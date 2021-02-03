 <?php

class m_admin_login extends CI_Model {
    function cek_login($username,$password){		
		$query = $this->db->query("SELECT ad_username, nama FROM admin WHERE ad_username='$username' AND password=MD5('$password')");
        return $query;
    }

    function getPassword($id,$password){
        $query = "SELECT password
        FROM admin 
        WHERE ad_username = '$id' AND PASSWORD = '$password';";
        return $this->db->query($query);
    }

    function updatePassword($newPassword,$id){
        $query = "UPDATE admin SET password='$newPassword' 
        WHERE ad_username='$id';";
        return $this->db->query($query);
    }
}
?>