<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'selamat datang ' . $data['user']['nama'];
        $data['judul'] = 'Beranda';
        $data['dashboard'] = 'active';
        $data['order'] = '';
        $data['d_transaksi'] = '';
        $data['h_transaksi'] = '';
        $data['page_act'] = "Beranda";
        $this->load->view('template/user/header', $data);
        $this->load->view('user/index');
        $this->load->view('template/user/footer');
    }

    public function profil()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'selamat datang ' . $data['user']['nama'];
        $data['judul'] = 'Profil';
        $data['dashboard'] = '';
        $data['order'] = '';
        $data['d_transaksi'] = '';
        $data['h_transaksi'] = '';
        $data['page_act'] = "Profil";
        $this->load->view('template/user/header', $data);
        $this->load->view('user/profil');
        $this->load->view('template/user/footer');
    }

    public function order()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'selamat datang ' . $data['user']['nama'];
        $data['judul'] = 'Order';
        $data['dashboard'] = '';
        $data['order'] = 'active';
        $data['d_transaksi'] = '';
        $data['h_transaksi'] = '';
        $data['page_act'] = "Order";
        $this->load->view('template/user/header', $data);
        $this->load->view('user/order');
        $this->load->view('template/user/footer');
    }

    public function d_transaksi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'selamat datang ' . $data['user']['nama'];
        $data['judul'] = 'Daftar Transaksi';
        $data['dashboard'] = '';
        $data['order'] = '';
        $data['d_transaksi'] = 'active';
        $data['h_transaksi'] = '';
        $data['page_act'] = "Daftar Transaksi";
        $this->load->view('template/user/header', $data);
        $this->load->view('user/daftar_transaksi');
        $this->load->view('template/user/footer');
    }

    public function h_transaksi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'selamat datang ' . $data['user']['nama'];
        $data['judul'] = 'Histori Transaksi';
        $data['dashboard'] = '';
        $data['order'] = '';
        $data['d_transaksi'] = '';
        $data['h_transaksi'] = 'active';
        $data['page_act'] = "Histori Transaksi";
        $this->load->view('template/user/header', $data);
        $this->load->view('user/histori');
        $this->load->view('template/user/footer');
    }
}
