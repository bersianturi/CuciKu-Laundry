<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			'required' => 'Masukkan E-mail!',
			'valid_email' => 'Masukan E-mail yang valid',
		]);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', [
			'required' => 'Masukkan Password!'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view('auth/masuk');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) {
			if ($user['is_active'] == 1) {
				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id'],
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('admin');
					} else {
						redirect('user');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><small>Password salah!</small></div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><small>Akun belum diaktivasi!</small></div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><small>Akun tidak terdaftar!</small></div>');
			redirect('auth');
		}
		// $user = $this->db->get_where('user', ['password' => $password]);
	}

	public function registration()
	{
		// $this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('name', 'Nama', 'required|trim', [
			'required' => 'Masukkan Nama!',
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'required' => 'Masukkan E-mail!',
			'valid_email' => 'Masukan E-mail yang valid',
			'is_unique' => 'E-mail sudah terdaftar',
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]', [
			'required' => 'Masukkan Password!',
			'min_length' => 'Password minimal 6 karakter'

		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/daftar');
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'tanggal_input' => time()
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><small>Selamat! Akun anda telah terdaftar. Silahkan Login!</small></div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><small>Anda telah keluar!</small></div>');
		redirect('auth');
	}
}
