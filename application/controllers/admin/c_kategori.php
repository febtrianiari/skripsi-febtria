<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Kategori extends CI_Controller {

	public function index()
	{
		$judulpage["title"]="Kategori";

		$data['kategori']=$this->model_data->data('kategori');
		$this->load->view('v_navbar', $judulpage);
		$this->load->view('v_sidebar');
		$this->load->view('v_data_kategori',$data);
		
		
	}
    public function tampil_tambah()
    {
        $this->load->view('v_navbar');
		$this->load->view('v_sidebar');
		$this->load->view('v_tambah_data_kategori');
    }

	public function aksi_tambah()
    {
        $nama_kategori=$this->input->post('nama_kategori');

        $data_insert = array(
            'nama_kategori' => $nama_kategori
        );

        $this->model_data->insert($data_insert,'kategori');

        redirect('admin/c_kategori');
    }
	public function aksi_hapus()
    {
        $id_kategori = $this->input->get('id_kategori');
        $where = array(
            'id_kategori' => $id_kategori
        );
        $this->model_data->delete_data($where, 'kategori');

        redirect('admin/c_kategori');
    }

}

?>