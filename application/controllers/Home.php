<?php 

/**
* 
*/
class Home extends CI_Controller
{
	
	public function index() {

		$data['main_view'] = "front/display";
		$this->load->view('layouts/main',$data);
	}
}