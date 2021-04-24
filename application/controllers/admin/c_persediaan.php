<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Persediaan extends CI_Controller {

	public function index()
	{
        $judulpage["title"]="Persediaan";

        if(isset($_GET['id_kategori']))
        {
            if($_GET['id_kategori'] == 0){
                $data['persediaan']=$this->model_data->data_persediaan();
            }
            else{
                $where['data_persediaan.id_kategori'] = $_GET['id_kategori'];
                $data['persediaan']=$this->model_data->ambil_data_persediaan($where);
            }
        }
        else{
            $data['persediaan']=$this->model_data->data_persediaan();
        }
        $data['kategori']=$this->model_data->data_kategori();


		$this->load->view('v_navbar', $judulpage);
		$this->load->view('v_sidebar');
		$this->load->view('v_data_persediaan' , $data);
		
		
	}
    public function tampil_tambah()
    {
        $data['kategori']=$this->model_data->data_kategori();

        $this->load->view('v_navbar');
		$this->load->view('v_sidebar');
		$this->load->view('v_tambah_data_persediaan', $data);
    }
    public function aksi_tambah()
    {
        $list_id_kategori=$this->input->post('list_id_kategori');
        $list_bulan=$this->input->post('list_bulan');
        $tahun=$this->input->post('tahun');
        $jumlah_persediaan=$this->input->post('jumlah_persediaan');

        $data_insert = array(
            'id_kategori' => $list_id_kategori,
            'bulan' => $list_bulan,
            'tahun' => $tahun,
            'jumlah_persediaan' => $jumlah_persediaan
        );
        $this->model_data->insert($data_insert,'data_persediaan');

        redirect('admin/c_persediaan');
    }
    public function tampil_update_penjualan()
    {
        $id_persediaan = $this->input->get('id_persediaan');
        $where = array(
            'id_persediaan' => $id_persediaan
        );
        $data['data_persediaan']=$this->model_data->ambil_data_persediaan($where);
        $data['kategori']=$this->model_data->data_kategori();
        // $data['kategori']=$this->model_data->data('data_kategori');

        $this->load->view('v_navbar');
		$this->load->view('v_sidebar');
		$this->load->view('v_edit_data_persediaan', $data);
    }
    public function update_persediaan()
    {
        $id_persediaan = $this->input->get('id_persediaan');
        $list_id_kategori=$this->input->post('list_id_kategori');
        $list_bulan=$this->input->post('list_bulan');
        $tahun=$this->input->post('tahun');
        $jumlah_persediaan=$this->input->post('jumlah_persediaan');
        $where = array(
            'id_persediaan' => $id_persediaan
        );
        $data_insert = array(
            'id_kategori' => $list_id_kategori,
            'bulan' => $list_bulan,
            'tahun' => $tahun,
            'jumlah_persediaan' => $jumlah_persediaan
        );
        // $this->model_data->insert($data_insert,'data_penjualan');
        $this->model_data->edit_data($where, $data_insert,'data_persediaan');

        redirect('admin/c_persediaan/index');
    }
    public function aksi_hapus()
    {
        $id_persediaan = $this->input->get('id_persediaan');
        $where = array(
            'id_persediaan' => $id_persediaan
        );
        $this->model_data->delete_data($where, 'data_persediaan');

        redirect('admin/c_persediaan/index');
    }

}

?>