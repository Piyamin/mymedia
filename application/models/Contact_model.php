<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class Contact_model extends CI_Model
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
        $result = $this->mongo_db->getOne('contact');
        return $result;
    }

    public function findAll($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('contact');
        return $result;
    }

    public function insert($data)
    {
        $InsertId = $this->mongo_db->insert('contact',$data);
        return $InsertId ;
    }
}

