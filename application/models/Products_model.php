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
        $data = $this->mongo_db->row_array($result);
        return $data;
    }
    public function findAll($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('product');
        return $result;
    }

    public function insert($data)
    {
        $InsertId = $this->mongo_db->insert(''product',$data);
        return $insertId;
    }
}
