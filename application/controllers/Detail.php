<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Movie extends CI_Controller
{
	function __construct()
    {
		parent::__construct();
		$this->load->model('detail_model');
		$this->load->model('movie_model');
    }  
	public function index($detailId)
	{
		
		$detail_id = array(
			'movie_id' => $detailId
		);
		$data['movie'] = $this->movie_model->findAll();
		$condition = array(
			'' => $this->mongo_db->create_document_id($detailId)
		);
		$data['detail'] = $this->detail_model->findAll($condition);
		$this->load->view('layout/head');
		$this->load->view('layout/header',$data);
		$this->load->view('detail/content',$detail_id);
		$this->load->view('layout/foot');
		$this->load->view('layout/footer');
	}
}
