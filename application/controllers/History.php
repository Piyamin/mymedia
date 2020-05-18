<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
{
	function __construct()
    {
		
		parent::__construct();
		$this->load->model('history_model');
		$this->load->model('movie_model');
		$this->load->model('genres_model');
		
    }  
	public function index()
	{
		// $historyMovie = $this->history_model->sort_movie();
		$dataa = array(
			'historyMovie' => $this->history_model->sort_movie()
		);
		$data['history'] = $this->history_model->findAll();
		$data['movie'] = $this->movie_model->findAll();
		$data['genres'] = $this->genres_model->findAll();		
		$this->load->view('layout/head');
		$this->load->view('layout/header',$data);
		$this->load->view('history/content',$dataa);
		$this->load->view('layout/foot');
		$this->load->view('layout/footer');
	}
}
