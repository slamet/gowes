<?php
class Blog extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Depan";

		$data['kegiatan'] = array('tes 1', 'tes 2', 'tes 3');
		
		/*$data['title'] = "My Real Title"; */
		$data['heading'] = "My Real Heading";

		
		$this->load->view('blogview', $data);

	}


	public function comments()
	{
		echo 'Look at this!';
	}

}
?>