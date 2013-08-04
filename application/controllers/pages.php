<?php

class Pages extends CI_Controller {

	 var $template = 'template';

	public function index()
	{


	
	$data['judul'] = "Beranda"; // Capitalize the first letter
	

	$data['content'] = 'pages/home';
     $this->load->view($this->template, $data);


	}


	


}