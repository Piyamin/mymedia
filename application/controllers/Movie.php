<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Movie extends CI_Controller
{
	function __construct()
    {
		parent::__construct();
		$this->load->model('genres_model');
		$this->load->model('movie_model');
    }  
	public function index($movieId)
	{
		
		$movie_id = array(
			'movie_id' => $movieId
		);
		$data['genres'] = $this->genres_model->findAll();
		$data['movie'] = $this->movie_model->findAll();
		$this->load->view('layout/head');
		$this->load->view('layout/header',$data);
		$this->load->view('genres/content',$movie_id);
		$this->load->view('layout/foot');
		$this->load->view('layout/footer');
	}
}
