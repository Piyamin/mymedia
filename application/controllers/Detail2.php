<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail2 extends CI_Controller
{
	public function index()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('detail/content2');
		$this->load->view('layout/foot');
		$this->load->view('layout/footer');
	}
}
