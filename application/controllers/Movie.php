<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Movie extends CI_Controller
{
	function __construct()
    {
		parent::__construct();
		$this->load->model('genres_model');
		$this->load->model('movie_model');
		$this->load->model('detail_model');
    }  
	public function index($movieId)
	{
		$condition =[];
		$search = $this->input->get('search');
		$name = $this->input->get('name');
		if(!empty($search)){
			if (!empty($name)) {
				$condition['movieName'] = array('$regex'=> $name);
			}
		}
		$data['name'] = $name;
		$data['search'] = $search;
		
		
		$data['genres'] = $this->genres_model->findAll();
		$movie_id = array(
			'movie_id' => $movieId

		);
		$condition = array(
			'genres' => $this->mongo_db->create_document_id($movieId) 
		);
		$data['detail'] = $this->detail_model->findAll($condition);
		$data['movie'] = $this->movie_model->findAll($condition);
		$this->load->view('layout/head');
		$this->load->view('layout/header',$data);
		$this->load->view('genres/content',$movie_id);
		$this->load->view('layout/foot');
		$this->load->view('layout/footer');
	}
}
