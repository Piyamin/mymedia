<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Watch extends CI_Controller
{
	public function index()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('detail/watch/content');
		$this->load->view('layout/foot');
		$this->load->view('layout/footer');
	}
}
