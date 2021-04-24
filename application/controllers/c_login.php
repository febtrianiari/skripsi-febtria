<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	public function index()
	{
		
		$this->load->view('v_login');
	}

	public function cek_login()
	{

		$username = $this->input->post('username');        
        $password = $this->input->post('password');

        $where = array(
            'username' => $username,
            // 'password' => md5($password)
            'password' => $password
        );

        $cek = $this->model_data->cek($where,'login');
        // print_r($cek );die();
       

        if($cek != null)
        {   
                $ambil_user = $this->model_data->ambil_user($where,'login');
                // print_r($ambil_user['id_login']);die();        
                $data_session = array(
                'username' => $ambil_user['username'],
                'password' => $ambil_user['password'],
                'level' => $ambil_user['level'],
                'status' => "login" 
            );

            $this->session->set_userdata($data_session);
            $this->session->$data_session;
            // print_r($data_session);die();
            
            if($ambil_user['level'] == "1"){
                //TAMPILAN SUPERADMIN            
                redirect('superadmin/c_superadmin');
            }
            else{    
                //TAMPILAN ADMIN
                redirect('admin/c_admin');            
            }
        }
        else
        {
            $this->session->set_flashdata('error', 'username atau password salah');
            redirect('login');
        }

	}


     function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

}
?>