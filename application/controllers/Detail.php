<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{
	function __construct()
    {
		parent::__construct();
		$this->load->model('movie_model');
		$this->load->model('detail_model');
		$this->load->model('genres_model');
    }  
	public function index($detailId)
	{
		$condition =[];
		$search = $this->input->get('search');
		$name = $this->input->get('name');
		if(!empty($search)){
			if (!empty($name)) {
				$condition['movieName'] = array('$regex'=> $name);
			}
		}

		$data['movie'] = $this->movie_model->findAll();
		$condition = array(
			'movie' => $this->mongo_db->create_document_id($detailId)
		);

		$data['name'] = $name;
		$data['search'] = $search;
		$data['movie'] = $this->movie_model->findAll($condition);
		$data['detail'] = $this->detail_model->findAll($condition);
		$data['genres'] = $this->genres_model->findAll();
		$this->load->view('layout/head');
		$this->load->view('layout/header',$data);
		$this->load->view('detail/content');
		$this->load->view('layout/foot');
		$this->load->view('layout/footer');
	}
	
}
