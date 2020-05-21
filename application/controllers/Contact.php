<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

	function __construct()
    {
		parent::__construct();
		$this->load->model('genres_model');
		$this->load->model('movie_model');
		$this->load->model('contact_model');
		
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
		$data['movie'] = $this->movie_model->findAll($condition);
		$this->load->view('layout/head');
		$this->load->view('layout/header',$data);
		$this->load->view('contact/content');
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
		$data['genres'] = $this->genres_model->findAll();
		$data['movie'] = $this->movie_model->findAll($condition);
		$this->load->view('layout/head');
		$this->load->view('layout/header',$data);
		$this->load->view('contact/content');
		$this->load->view('layout/foot');
		$this->load->view('layout/footer');
	}

	public function save()
	{
		$FirstName = $this->input->post('FirstName');
		$LastName = $this->input->post('LastName');
		$Email = $this->input->post('Email');
		$Phone = $this->input->post('Phone');
		$message = $this->input->post('message');

		$data = array(
			"FirstName" => $FirstName,
			"LastName" => $LastName,
			"Email" => $Email,
			"Phone" => $Phone,
			"message" => $message,
		);
		$id = $this->contact_model->insert($data);   
		if(!empty($id)){
			$this->session->set_flashdata('success-msg','contact Added');
			redirect('contact');
		}else {

		} echo "error";
	}
}
