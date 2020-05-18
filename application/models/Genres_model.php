<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class Genres_model extends CI_Model
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
        $result = $this->mongo_db->getOne('genres');
        $data = $this->mongo_db->row_array($result);
        return $data;
    }
    public function findAll($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('genres');
        return $result;
    }
}
