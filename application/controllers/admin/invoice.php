<?php

class Invoice extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('role_id') != '1')
    {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Belum Login <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
      redirect('auth/login');
    }
  }
  public function index()
  {
    echo random_string('alnum', 16);
    $data['invoice'] = $this->model_invoice->tampil_data();
  //   $this->load->view('templates/header');
  //   $this->load->view('templates/sidebar');
  //   $this->load->view('invoice/index', $data);
  //   $this->load->view('templates/footer');
  }

  public function detail($id)
  {
    $data['invoice'] = $this->model_invoice->ambil_id_invoice($id);
    $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id)->result();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/invoice_detail', $data);
    $this->load->view('templates_admin/footer');
  }
}