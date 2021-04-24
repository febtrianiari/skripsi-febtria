<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Penjualan extends CI_Controller {

	public function index()
	{
        $judulpage["title"]="Penjualan";

        if(isset($_POST["id_kategori"]) && isset($_POST["id_tahun"]))
        {
            if ($_POST['id_kategori'] == 0 && $_POST['id_tahun'] == 0 ){
                $data['penjualan']=$this->model_data->data_penjualan();
            }
            else{
                $where = array();
                if($_POST['id_kategori'] != 0)
                {
                    $where['data_penjualan.id_kategori'] = $_POST['id_kategori'];
                }
                if($_POST['id_tahun'] != 0)
                {
                    $where['data_penjualan.tahun'] = $_POST['id_tahun'];
                }
                $data['penjualan']=$this->model_data->ambil_data_penjualan($where);
            }
        }
        else{
            $data['penjualan']=$this->model_data->data_penjualan();
        }
        $data['kategori']=$this->model_data->data_kategori();
        $data['tahun'] = $this->model_data->ambil_tahun();
        // var_dump($data['tahun']);
        // die();
		$this->load->view('v_navbar', $judulpage);
		$this->load->view('v_sidebar');
		$this->load->view('v_data_penjualan' , $data);
		
		
	}
    public function tampil_tambah()
    {
        $data['kategori']=$this->model_data->data_kategori();

        $this->load->view('v_navbar');
		$this->load->view('v_sidebar');
		$this->load->view('v_tambah_data_penjualan', $data);
    }
    public function aksi_tambah()
    {
        $list_id_kategori=$this->input->post('list_id_kategori');
        $list_bulan=$this->input->post('list_bulan');
        $tahun=$this->input->post('tahun');
        $jumlah_penjualan=$this->input->post('jumlah_penjualan');

        $data_insert = array(
            'id_kategori' => $list_id_kategori,
            'bulan' => $list_bulan,
            'tahun' => $tahun,
            'jumlah_penjualan' => $jumlah_penjualan
        );
        $this->model_data->insert($data_insert,'data_penjualan');

        redirect('admin/c_penjualan');
    }
    public function tampil_update_penjualan()
    {
        $id_penjualan = $this->input->get('id_penjualan');
        $where = array(
            'id_penjualan' => $id_penjualan
        );
        $data['data_penjualan']=$this->model_data->ambil_data_penjualan($where);
        $data['kategori']=$this->model_data->data_kategori();
        // $data['kategori']=$this->model_data->data('data_kategori');

        $this->load->view('v_navbar');
		$this->load->view('v_sidebar');
		$this->load->view('v_edit_data_penjualan', $data);
    }
    public function update_penjualan()
    {
        $id_penjualan = $this->input->get('id_penjualan');
        $list_id_kategori=$this->input->post('list_id_kategori');
        $list_bulan=$this->input->post('list_bulan');
        $tahun=$this->input->post('tahun');
        $jumlah_penjualan=$this->input->post('jumlah_penjualan');
        $where = array(
            'id_penjualan' => $id_penjualan
        );
        $data_insert = array(
            'id_kategori' => $list_id_kategori,
            'bulan' => $list_bulan,
            'tahun' => $tahun,
            'jumlah_penjualan' => $jumlah_penjualan
        );
        // $this->model_data->insert($data_insert,'data_penjualan');
        $this->model_data->edit_data($where, $data_insert,'data_penjualan');

        redirect('admin/c_penjualan/index');
    }
    public function aksi_hapus()
    {
        $id_penjualan = $this->input->get('id_penjualan');
        $where = array(
            'id_penjualan' => $id_penjualan
        );
        $this->model_data->delete_data($where, 'data_penjualan');

        redirect('admin/c_penjualan/index');
    }

}

?>