<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{
    public function index()
    {
        $this->load->model('Paket_model');

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['paket'] = $this->Paket_model->getAllPaket();

        $data['judul'] = 'Paket';
        $data['dashboard'] = '';
        $data['packet'] = 'active';
        $data['pelanggan'] = '';
        $data['transaksi'] = '';
        $data['page_act'] = "Paket";

        $this->load->view('template/admin/header', $data);
        $this->load->view('admin/paket', $data);
        $this->load->view('template/admin/footer');
    }

    public function tambahpaket()
    {
        $this->load->library('form_validation');
        $this->load->model('Paket_model');

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['judul'] = 'Tambah Paket';
        $data['dashboard'] = '';
        $data['packet'] = 'active';
        $data['pelanggan'] = '';
        $data['transaksi'] = '';
        $data['page_act'] = "Paket";

        $this->form_validation->set_rules('nama_paket', 'nama_paket', 'required|is_unique[paket.nama_paket]', [
            'required' => 'Masukkan nama paket!',
            'is_unique' => 'Nama paket sudah ada!',
        ]);
        $this->form_validation->set_rules('harga', 'harga', 'required', [
            'required' => 'Masukkan harga paket!',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/admin/header', $data);
            $this->load->view('admin/tambah_paket', $data);
            $this->load->view('template/admin/footer');
        } else {
            $this->Paket_model->tambahDataPaket();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><small>Paket berhasil ditambahkan!</small></div>');
            redirect('paket');
        }
    }

    public function editpaket($id)
    {
        $this->load->library('form_validation');
        $this->load->model('Paket_model');

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['paket'] = $this->Paket_model->getPaketById($id);
        $data['tipe_paket'] = ['Standar', 'Premium', 'Ekslusif'];

        $data['judul'] = 'Edit Paket';
        $data['dashboard'] = '';
        $data['packet'] = 'active';
        $data['pelanggan'] = '';
        $data['transaksi'] = '';
        $data['page_act'] = "Paket";

        $this->form_validation->set_rules('nama_paket', 'nama_paket', 'required', [
            'required' => 'Masukkan nama paket!',
        ]);
        $this->form_validation->set_rules('harga', 'harga', 'required', [
            'required' => 'Masukkan harga paket!',
        ]);
        // $this->form_validation->set_rules('nama_paket', 'nama_paket', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/admin/header', $data);
            $this->load->view('admin/edit_paket', $data);
            $this->load->view('template/admin/footer');
        } else {
            $this->Paket_model->editDataPaket();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><small>Paket berhasil diedit!</small></div>');
            redirect('paket');
        }
    }

    public function hapuspaket($id_paket)
    {
        $this->load->model('Paket_model');

        $this->Paket_model->hapusDataPaket($id_paket);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><small>Paket berhasil dihapus!</small></div>');
        redirect('paket');
    }
}
