<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'selamat datang ' . $data['user']['nama'];
        $data['judul'] = 'Dashboard';
        $data['dashboard'] = 'active';
        $data['packet'] = '';
        $data['pelanggan'] = '';
        $data['transaksi'] = '';
        $data['page_act'] = "Dashboard";
        $this->load->view('template/admin/header', $data);
        $this->load->view('admin/index');
        $this->load->view('template/admin/footer');
    }

    public function profil()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'selamat datang ' . $data['user']['nama'];
        $data['judul'] = 'Profil';
        $data['dashboard'] = '';
        $data['packet'] = '';
        $data['pelanggan'] = '';
        $data['transaksi'] = '';
        $data['page_act'] = "Profil";
        $this->load->view('template/admin/header', $data);
        $this->load->view('admin/profil');
        $this->load->view('template/admin/footer');
    }

    public function pelanggan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'selamat datang ' . $data['user']['nama'];
        $data['judul'] = 'Pelanggan';
        $data['dashboard'] = '';
        $data['packet'] = '';
        $data['pelanggan'] = 'active';
        $data['transaksi'] = '';
        $data['page_act'] = "Pelanggan";
        $this->load->view('template/admin/header', $data);
        $this->load->view('admin/pelanggan');
        $this->load->view('template/admin/footer');
    }

    public function transaksi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'selamat datang ' . $data['user']['nama'];
        $data['judul'] = 'Transaksi';
        $data['dashboard'] = '';
        $data['packet'] = '';
        $data['pelanggan'] = '';
        $data['transaksi'] = 'active';
        $data['page_act'] = "Transaksi";
        $this->load->view('template/admin/header', $data);
        $this->load->view('admin/transaksi');
        $this->load->view('template/admin/footer');
    }
}
