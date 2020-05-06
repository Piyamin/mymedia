<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{
	public function index()
	{
		$this->load->view('sign/signup');
	}
}
