<?php

class Dashboard extends CI_Controller
 {
function __construct() {
        parent::__construct();
        $this->general->cekAdminLogin();

        $this->load->library(array('session'));
    }

	var $template = 'admin/template';


	 function index()
	{

	
	$data['judul'] = "Beranda"; // Capitalize the first letter
	

	$data['content'] = 'admin/home';
    $this->load->view($this->template, $data);


	}




}