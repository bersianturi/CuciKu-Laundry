<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "cuciKu Laundry";
        $data['home'] = "active";
        $data['tentang_kami'] = "";
        $data['faq'] = "";
        $this->load->view('template/welcome/header', $data);
        $this->load->view('welcome/index');
        $this->load->view('template/welcome/footer');
    }

    public function tentangkami()
    {
        $data['judul'] = "Tentang Kami | cuciKu";
        $data['home'] = "";
        $data['tentang_kami'] = "active";
        $data['faq'] = "";
        $this->load->view('template/welcome/header', $data);
        $this->load->view('welcome/tentang_kami');
        $this->load->view('template/welcome/footer');
    }

    public function faq()
    {
        $data['judul'] = "FAQ | cuciKu";
        $data['home'] = "";
        $data['tentang_kami'] = "";
        $data['faq'] = "active";
        $this->load->view('template/welcome/header', $data);
        $this->load->view('welcome/faq');
        $this->load->view('template/welcome/footer');
    }
}
