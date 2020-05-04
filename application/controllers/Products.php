<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
    }
    public function index()
    {
        $data['products'] = $this->products_model->findAll();
        $this->load->view('products/index', $data);
    }
}
