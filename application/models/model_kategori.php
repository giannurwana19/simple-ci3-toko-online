<?php 

class Model_kategori extends CI_Model
{
    public function data_elektronik(){
        return $this->db->get_where('tb_barang',array('kategori'=>'elektronik'));
    }

    public function data_pakaian_pria()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'Pakaian Pria'));
    }

    public function data_pakaian_wanita()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'Pakaian Wanita'));
    }

    public function data_pakaian_anak()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'Pakaian Anak'));
    }

    public function data_peralatan_olahraga()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'Peralatan Olahraga'));
    }

    
}
