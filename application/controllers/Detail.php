<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{
	function __construct()
    {
		parent::__construct();
		$this->load->model('movie_model');
		$this->load->model('detail_model');
    }  
	public function index($detailId)
	{
		$data['movie'] = $this->movie_model->findAll();
		$condition = array(
			'movie' => $this->mongo_db->create_document_id($detailId)
		);
		$data['detail'] = $this->detail_model->findAll($condition);
		$this->load->view('layout/head');
		$this->load->view('layout/header',$data);
		$this->load->view('detail/content');
		$this->load->view('layout/foot');
		$this->load->view('layout/footer');
	}
}
