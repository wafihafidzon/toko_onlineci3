<?php
class Dashboard extends CI_Controller
{
       public function __construct()
       {
              parent::__construct();
              if ($this->session->userdata('role_id') != '2')
              {
                     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Belum Login <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                     redirect('auth/login');
              }
       }
       public function index()
       {
              $data['barang'] = $this->model_barang->tampil_data()->result();
              $this->load->view('templates/header');
              $this->load->view('templates/sidebar');
              $this->load->view('dashboard', $data);
              $this->load->view('templates/footer');
       }

       public function tambah_ke_keranjang()
       {
              $id_brg = $this->uri->segment(3);
              $data = $this->model_barang->find($id_brg);

              $data = array(
                     'id' => $data->id_brg,
                     'qty' => 1,
                     'price' => $data->harga,
                     'name' => $data->nama_brg,
              );

              $this->cart->insert($data);
              redirect('/dashboard');
       }

       public function keranjang()
       {
              $this->load->view('templates/header');
              $this->load->view('templates/sidebar');
              $this->load->view('keranjang');
              $this->load->view('templates/footer');
       }

       public function hapus_keranjang()
       {
              $rowid = $this->uri->segment(3);
              $this->cart->remove($rowid);
              redirect('dashboard/keranjang');
       }

       public function pembayaran()
       {
              $this->load->view('templates/header');
              $this->load->view('templates/sidebar');
              $this->load->view('pembayaran');
              $this->load->view('templates/footer');
       }

       public function proses_pembayaran()
       {
              $is_processed = $this->model_invoice->index();
              if ($is_processed)
              {
                     $this->cart->destroy();
                     $this->load->view('templates/header');
                     $this->load->view('templates/sidebar');
                     $this->load->view('proses_pembayaran');
                     $this->load->view('templates/footer');
              }
              else
              {
                     echo "Maaf, Pesanan Anda Gagal di Proses";
              }
       }

       public function detail($id)
       {
              $data['detail'] = $this->model_barang->detail_brg($id);
              $this->load->view('templates/header');
              $this->load->view('templates/sidebar');
              $this->load->view('detail_barang', $data);
              $this->load->view('templates/footer');
       }
}

?>