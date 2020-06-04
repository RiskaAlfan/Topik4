<?php

class Mahasiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('form_validation');

	}

	public function index()
	{
	
		$data['judul'] = 'Daftar Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllmahasiswa();
		$this->load->view('templates/header', $data);
		$this->load->view('Mahasiswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Mahasiswa';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		
		if( $this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/tambah');
			$this->load->view('templates/footer');
		}else {
			echo "berhasil!";
		}
	}
}