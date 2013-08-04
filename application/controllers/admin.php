<?php

class Admin extends CI_Controller
 {

	 var $template = 'template';


	 function index()
	{

	
	$data['judul'] = "Beranda"; // Capitalize the first letter
	

	$data['content'] = 'admin/home';
    $this->load->view($this->template, $data);
     //$this->load->view('admin/home'); 


	}




}