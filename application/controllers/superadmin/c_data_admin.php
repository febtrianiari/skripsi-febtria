<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Data_Admin extends CI_Controller {

	public function index()
	{
		$judulpage["title"]= "Data Admin";

        $data['login']=$this->model_data->data('login');

		$this->load->view('superadmin/v_navbar', $judulpage);
		$this->load->view('superadmin/v_sidebar');
		$this->load->view('superadmin/v_data_admin' , $data);
		
		
	}
    public function tampil_tambah()
    {

        $this->load->view('superadmin/v_navbar');
		$this->load->view('superadmin/v_sidebar');
		$this->load->view('superadmin/v_tambah_data_admin');
    }
    public function aksi_tambah()
    {
        $nama=$this->input->post('nama');
        $telepon=$this->input->post('telepon');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        // $level=$this->input->post(2);

        $data_insert = array(
            'nama' => $nama,
            'telepon' => $telepon,
            'username' => $username,
            'password' => $password,
            'level' => 2
        );
        $this->model_data->insert($data_insert,'login');

        redirect('superadmin/c_data_admin');
    }
    public function tampil_update_admin()
    {
        $id_login = $this->input->get('id_login');
        $where = array(
            'id_login' => $id_login
        );
        $data['login']=$this->model_data->ambil_data_admin($where);

        $this->load->view('superadmin/v_navbar');
		$this->load->view('superadmin/v_sidebar');
		$this->load->view('superadmin/v_edit_data_admin', $data);
    }
    public function update_admin()
    {
        $id_login = $this->input->get('id_login');
        $nama=$this->input->post('nama');
        $telepon=$this->input->post('telepon');
        $username=$this->input->post('username');
        $password=$this->input->post('password');

        $where = array(
            'id_login' => $id_login
        );
        $data_insert = array(
            'nama' => $nama,
            'telepon' => $telepon,
            'username' => $username,
            'password' => $password,
            'level' => 2
        );
        $this->model_data->edit_data($where, $data_insert,'login');

        redirect('superadmin/c_data_admin');
    }
    public function aksi_hapus()
    {
        $id_login = $this->input->get('id_login');
        $where = array(
            'id_login' => $id_login
        );
        $this->model_data->delete_data($where, 'login');

        redirect('superadmin/c_data_admin');
    }

}

?>