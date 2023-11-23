<?php

class model_kategori extends CI_Model
{
  public function kategori_elektronik()
  {
    return $this->db->get_where('tb_barang', ['kategori' => 'elektronik']);
  }
  public function kategori_pakaian_pria()
  {
    return $this->db->get_where('tb_barang', ['kategori' => 'pakaian pria']);
  }
  public function kategori_pakaian_wanita()
  {
    return $this->db->get_where('tb_barang', ['kategori' => 'pakaian wanita']);
  }
  public function kategori_pakaian_anak()
  {
    return $this->db->get_where('tb_barang', ['kategori' => 'pakaian anak']);
  }
  public function kategori_peralatan_olahraga()
  {
    return $this->db->get_where('tb_barang', ['kategori' => 'peralatan olahraga']);
  }
}