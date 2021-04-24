<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin extends CI_Controller {

	public function index()
	{
		$judulpage["title"]= "Dashboard";

		$this->load->view('v_navbar', $judulpage);
		$this->load->view('v_sidebar');
		$this->load->view('v_dashboard');
		
		
	}

}

?>