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
		$this->load->model('customer_model');
		
    }  
	public function index($historyId)
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
		$dataa = array(
			'history' => $this->history_model->gethistory($historyId)
		);
		$data['movie'] = $this->movie_model->findAll();
		$data['history'] = $this->history_model->findAll();
		$data['movie'] = $this->movie_model->findAll($condition);
		$data['genres'] = $this->genres_model->findAll();		
		$this->load->view('layout/head');
		$this->load->view('layout/header',$data);
		$this->load->view('history/content',$dataa);
		$this->load->view('layout/foot');
		$this->load->view('layout/footer');
	}
}
