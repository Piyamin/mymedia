<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
	public function index()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('account/content');
		$this->load->view('layout/foot');
		$this->load->view('layout/footer');
	}
}
