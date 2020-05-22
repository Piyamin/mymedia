<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addmovie extends CI_Controller
{
	function __construct()
    {
		parent::__construct();
		$this->load->model('genres_model');
		$this->load->model('movie_model');
		$this->load->model('customer_model');
		$this->load->model('detail_model');
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
		$data['customer'] = $this->customer_model->findAll();
		$data['genres'] = $this->genres_model->findAll();
		$data['movie'] = $this->movie_model->findAll($condition);
		$this->load->view('layout/head');
		$this->load->view('layout/header',$data);
		$this->load->view('addmovie/content');
		$this->load->view('layout/foot');
		$this->load->view('layout/footer');
	}
	public function create()
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
		$data['customer'] = $this->customer_model->findAll();
		$data['genres'] = $this->genres_model->findAll();
		$data['movie'] = $this->movie_model->findAll($condition);
		$this->load->view('layout/head');
		$this->load->view('layout/header',$data);
		$this->load->view('addmovie/content');
		$this->load->view('layout/foot');
		$this->load->view('layout/footer');
	
	}
	public function save()
	{
		$name = $this->input->post('name');
		$genres = $this->input->post('genres');
		$director_fname = $this->input->post('director_fname');
		$director__last = $this->input->post('director__last');
		$release_year = $this->input->post('release_year');
		$length = $this->input->post('length');
		$path_movie = $this->input->post('path_movie');
		$path_tariler = $this->input->post('path_tariler');
		$path_poster = $this->input->post('path_poster');
		$detail = $this->input->post('detail');
		$type = $this->input->post('type');
		
		$data = array(
			"nameDetail" => $name,
			"genres" => $this->mongo_db->create_document_id($genres),
			"nameDirec" => $director_fname,
			"lastDirec" => $director__last,
			"movieYear" => $release_year,
			"movieTime" => $length,
			"Path video" => $path_movie,
			"Path detail video" => $path_tariler,
			"Path image" => $path_poster,
			"plot" => $detail
		);
		$data1 = array(
			"movieName" => $name,
			"movieYear" => $release_year,
			"Path video" => $path_movie,
			"Path image" => $path_poster,
			"type" => $type
		);
		// print_r($data);
		// exit();
		$id = $this->detail_model->insert($data);
		$id = $this->movie_model->insert($data1);
        if(!empty($id)){
            $this->session->set_flashdata('success-msg', 'Detail Added');
            redirect('addmovie/create');
        }else{
            echo "error";
		}
		
		
	}
}
