<?php

class Model_data extends CI_Model
{
	function insert($data,$table)
	{
		return $this->db->insert($table,$data);
	}
	function cek($where,$table)
	{
		$query = $this->db->get_where($table,$where);
		return $query->row_array();
    }
    function ambil_user($where,$table)
	{
		$query = $this->db->get_where($table,$where);
		return $query->row_array();
	}
	// FUNCTION DATA KATEGORI 
	function data_kategori()
	{
		$this->db->select('*');
		$this->db->from('kategori');			
		$query=$this->db->get();			
		$data= $query->result_array();
		// print_r($this->db->last_query());
		 
		return $data;
	}
	//FUNCTION DATA PENJUALAN
	function data_penjualan()
	{
		$this->db->select('*');
		$this->db->from('data_penjualan');			
		$this->db->join('kategori','kategori.id_kategori = data_penjualan.id_kategori');
		$query=$this->db->get();			
		$data= $query->result_array();
		// print_r($this->db->last_query());

		return $data;
	}

	function ambil_data_penjualan($where)
	{
		$this->db->select('*');
		$this->db->from('data_penjualan');			
		$this->db->join('kategori','kategori.id_kategori = data_penjualan.id_kategori');
		$this->db->where($where);
		$query=$this->db->get();			
		$data= $query->result_array();
		// print_r($this->db->last_query());

		return $data;
	}
	function ambil_tahun()
	{
		$last = $this->db->query("SELECT min(year(tahun)) as th FROM `data_penjualan` limit 1")->result_array()[0];
		$new = date("Y");
		$data["last"] = $last['th'];
		$data["new"] = $new;

		return $data;
	}

	// FUNCTION DATA PERSEDIAAN
	function data_persediaan()
	{
		$this->db->select('*');
		$this->db->from('data_persediaan');			
		$this->db->join('kategori','kategori.id_kategori = data_persediaan.id_kategori');
		$query=$this->db->get();			
		$data= $query->result_array();
		// print_r($this->db->last_query());

		return $data;
	}
	function ambil_data_persediaan($where)
	{
		$this->db->select('*');
		$this->db->from('data_persediaan');			
		$this->db->join('kategori','kategori.id_kategori = data_persediaan.id_kategori');
		$this->db->where($where);
		$query=$this->db->get();			
		$data= $query->result_array();
		// print_r($this->db->last_query());

		return $data;
	}
	// FUNCTION DATA ADMIN
	function ambil_data_admin($where)
	{
		$this->db->select('*');
		$this->db->from('login');			
		$this->db->where($where);
		$query=$this->db->get();			
		$data= $query->result_array();

		return $data;
	}
	// FUNCTION DELETE EDIT
	function data($table)
	{
		$query = $this->db->get($table);
		// print_r($this->db->last_query()); 
		return $query->result_array();		
	}
	function delete_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($where,$data,$table)
	{		
		$this->db->where($where);
		$this->db->update($table,$data);
			
	}

}

?>