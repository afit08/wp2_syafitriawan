<?php
defined('BASEPATH') or exit('no direct script access allowed');

class home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('auth/login');
        }
    }
    public function face3()
    {
        $data['barang'] = $this->model_barang->tampil_data('barang')->result();
        $data['title'] = "utama1";
        $this->load->view('hefo/header', $data);
        $this->load->view('template/main1', $data);
        $this->load->view('hefo/foother', $data);
    }
    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_barang->find($id);

        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg

        );

        $this->cart->insert($data);
        redirect('welcome');
    }

    public function detail_keranjang()
    {
        $this->load->view('hefo/header');
        $this->load->view('keranjang');
        $this->load->view('hefo/foother');
    }
    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome');
    }
    public function pembayaran()
    {
        $this->load->view('hefo/header');
        $this->load->view('pembayaran');
        $this->load->view('hefo/foother');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('hefo/header');
            $this->load->view('proses_pesanan');
            $this->load->view('hefo/foother');
        } else {
            echo "Maaf, Pesanan Anda Gagal diproses!";
        }
    }

    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('hefo/header');
        $this->load->view('detail_barang', $data);
        $this->load->view('hefo/foother');
    }

    public function about()
    {
        $this->load->view('hefo/header');
        $this->load->view('about');
        $this->load->view('hefo/foother');
    }

    public function bantuan()
    {
        $this->load->view('hefo/header');
        $this->load->view('bantuan');
        $this->load->view('hefo/foother');
    }

    public function proses_bantuan()
    {
        $this->load->view('hefo/header');
        $this->load->view('proses_bantuan');
        $this->load->view('hefo/foother');
    }
}
