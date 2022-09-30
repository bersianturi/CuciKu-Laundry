<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');
		$data['judul'] = "cuciKu Laundry";
		$data['href1'] = "#";
		$data['href2'] = "tentang-kami";
		$data['href3'] = "outlet";
		$data['href4'] = "faq";
		$data['home'] = "active";
		$data['tentang_kami'] = "";
		$data['faq'] = "";
		$this->load->view('templates/header', $data);
		$this->load->view('index');
		$this->load->view('templates/footer');
	}

	public function tentang_kami()
	{
		$data['judul'] = "Tentang Kami";
		$data['href1'] = "welcome";
		$data['href2'] = "#";
		$data['href3'] = "outlet";
		$data['href4'] = "faq";
		$data['home'] = "";
		$data['tentang_kami'] = "active";
		$data['faq'] = "";
		$this->load->view('templates/header', $data);
		$this->load->view('tentang_kami');
		$this->load->view('templates/footer');
	}

	public function faq()
	{
		$data['judul'] = "Tentang Kami";
		$data['href1'] = "welcome";
		$data['href2'] = "tentang-kami";
		$data['href3'] = "outlet";
		$data['href4'] = "#";
		$data['home'] = "";
		$data['tentang_kami'] = "";
		$data['faq'] = "active";
		$this->load->view('templates/header', $data);
		$this->load->view('faq');
		$this->load->view('templates/footer');
	}

	public function masuk()
	{
		$this->load->view('masuk');
	}

	public function daftar()
	{
		$this->load->view('daftar');
	}
}
