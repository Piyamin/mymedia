<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class Products_model extends CI_Model
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
        $result = $this->mongo_db->getOne('product');
        return $result;
    }
    public function findAll($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('product');
        return $result;
    }
}
