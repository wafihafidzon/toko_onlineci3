<?php

class Register extends CI_Controller
{
  public function index()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]');
    $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');

    if($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header');
      $this->load->view('auth/register');
      $this->load->view('templates/footer');
    } else {
      $data = [
        'username' => $this->input->post('username'),
        'nama' => $this->input->post('nama'),
        'password' => $this->input->post('password_1'),
        'role_id' => 2
      ];
      $this->db->insert('tb_user', $data);
      redirect('auth/login');
    }
  }
}