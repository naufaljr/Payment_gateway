<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambah_paket extends CI_Controller {

	public function index()
	{
		$this->load->view('template/main');
		$this->load->view('tambah_paket');
	}
}
