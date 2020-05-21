<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comingsoon extends CI_Controller
{
	function __construct()
    {
		parent::__construct();
		$this->load->model('movie_model');
		$this->load->model('genres_model');
		
    }  
	public function index()
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
		$datacom = array(
			'movie' => $this->movie_model->comingsoon()
		);
		$data['movie'] = $this->movie_model->findAll($condition);
		$this->load->view('layout/head');
		$this->load->view('layout/header',$data);
		$this->load->view('comingsoon/content',$datacom);
		$this->load->view('layout/foot');
		$this->load->view('layout/footer');
	}
}
