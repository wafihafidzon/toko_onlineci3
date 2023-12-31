<?php

class Kategori extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('role_id')!= '2') {
    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Belum Login <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
   redirect('auth/login');
  }
 }
 public function elektronik()
 {
  $data['elektronik'] = $this->model_kategori->kategori_elektronik()->result();
  $this->load->view('templates/header');
  $this->load->view('templates/sidebar');
  $this->load->view('kategori/elektronik', $data);
  $this->load->view('templates/footer');
 }
 public function pakaian_pria()
 {
  $data['pakaian_pria'] = $this->model_kategori->kategori_pakaian_pria()->result();
  $this->load->view('templates/header');
  $this->load->view('templates/sidebar');
  $this->load->view('kategori/pakaian_pria', $data);
  $this->load->view('templates/footer');
 }
 public function pakaian_wanita()
 {
  $data['pakaian_wanita'] = $this->model_kategori->kategori_pakaian_wanita()->result();
  $this->load->view('templates/header');
  $this->load->view('templates/sidebar');
  $this->load->view('kategori/pakaian_wanita', $data);
  $this->load->view('templates/footer');
 }
 public function pakaian_anak()
 {
  $data['pakaian_anak'] = $this->model_kategori->kategori_pakaian_anak()->result();
  $this->load->view('templates/header');
  $this->load->view('templates/sidebar');
  $this->load->view('kategori/pakaian_anak', $data);
  $this->load->view('templates/footer');
 }
 public function peralatan_olahraga()
 {
  $data['peralatan_olahraga'] = $this->model_kategori->kategori_peralatan_olahraga()->result();
  $this->load->view('templates/header');
  $this->load->view('templates/sidebar');
  $this->load->view('kategori/peralatan_olahraga', $data);
  $this->load->view('templates/footer');
 }
}