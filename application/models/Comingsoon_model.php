<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class Comingsoon_model extends CI_Model
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
        $result = $this->mongo_db->getOne('comingsoon');
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
        $result = $this->mongo_db->get('comingsoon');
        // print_r($result);
        return $result;
    }
}
