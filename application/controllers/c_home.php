<?php

class c_home extends CI_Controller{
	
	function view($page = 'v_home')
	{
		if( !file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		
		$this->load->view('pages/'.$page);
		
	}
	
}

?>