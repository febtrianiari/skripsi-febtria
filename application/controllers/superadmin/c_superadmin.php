<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Superadmin extends CI_Controller {

	public function index()
	{
		$judulpage["title"]= "Dashboard";

		$this->load->view('superadmin/v_navbar', $judulpage);
		$this->load->view('superadmin/v_sidebar');
		$this->load->view('superadmin/v_dashboard');
		
		
	}

}

?>