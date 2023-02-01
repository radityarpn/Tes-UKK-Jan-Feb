<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class madukara extends CI_Controller {
	public function login_petugas()
	{
		$this->load->view('login_petugas');
	}

    public function register_petugas()
	{
		$this->load->view('register_petugas');
	}

	public function home()
	{
		$this->load->view('home');
	}
}