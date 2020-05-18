<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class Movie_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }
    public function findOne($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->getOne('movie');
        // print_r($result);
        $data = $this->mongo_db->row_array($result);
        // print_r($data);
        return $data;
    }
    public function findAll($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('movie');
        $data = $this->mongo_db->row_array($result);
        return $data;
    }
}
