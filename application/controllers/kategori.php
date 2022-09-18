<?php

class kategori extends CI_Controller
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

    public function foods_and_drinks()
    {
        $data['foods_and_drinks'] = $this->model_kategori->data_foods_and_drinks()->result();
        $this->load->view('hefo/header');
        $this->load->view('hefo/sidebar');
        $this->load->view('foods_and_drink', $data);
        $this->load->view('hefo/foother');
    }

    public function fruits()
    {
        $data['fruits'] = $this->model_kategori->data_fruits()->result();
        $this->load->view('hefo/header');
        $this->load->view('hefo/sidebar');
        $this->load->view('fruits', $data);
        $this->load->view('hefo/foother');
    }

    public function home_living()
    {
        $data['home_living'] = $this->model_kategori->data_home_living()->result();
        $this->load->view('hefo/header');
        $this->load->view('hefo/sidebar');
        $this->load->view('home_living', $data);
        $this->load->view('hefo/foother');
    }

    public function medical()
    {
        $data['medical'] = $this->model_kategori->data_medical()->result();
        $this->load->view('hefo/header');
        $this->load->view('hefo/sidebar');
        $this->load->view('medical', $data);
        $this->load->view('hefo/foother');
    }

    public function fashion_anak()
    {
        $data['fashion_anak'] = $this->model_kategori->data_fashion_anak()->result();
        $this->load->view('hefo/header');
        $this->load->view('hefo/sidebar');
        $this->load->view('fashion_anak', $data);
        $this->load->view('hefo/foother');
    }

    public function otomotif()
    {
        $data['otomotif'] = $this->model_kategori->data_otomotif()->result();
        $this->load->view('hefo/header');
        $this->load->view('hefo/sidebar');
        $this->load->view('otomotif', $data);
        $this->load->view('hefo/foother');
    }

    public function hobby()
    {
        $data['hobby'] = $this->model_kategori->data_hobby()->result();
        $this->load->view('hefo/header');
        $this->load->view('hefo/sidebar');
        $this->load->view('hobby', $data);
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
