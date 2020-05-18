<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comingsoon extends CI_Controller
{
	function __construct()
    {
		parent::__construct();
		$this->load->model('genres_model');
		$this->load->model('comingsoon_model');
    }  
	public function index()
	{
	
		$data['genres'] = $this->genres_model->findAll();
		$data['comingsoon'] = $this->comingsoon_model->findAll();
		$this->load->view('layout/head');
		$this->load->view('layout/header',$data);
		$this->load->view('comingsoon/content');
		$this->load->view('layout/foot');
		$this->load->view('layout/footer');
	}
}
