<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['page_title'] = "Home Page";
		$this->load->view('welcome_message',$data);
	}
}
