 <?php

class m_admin_login extends CI_Model {
    function cek_login($username,$password){		
		$query = $this->db->query("SELECT * FROM admin WHERE ad_username='$username' AND password=MD5('$password')");
        return $query;
    }
}
?>