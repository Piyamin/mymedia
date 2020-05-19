<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class history_model extends CI_Model
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
        $result = $this->mongo_db->getOne('history');
        return $result;
    }
    public function findAll($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('history');
        return $result;
    }
    public function sort_movie()
    {
        $result = $this->mongo_db->aggregate(
            'history',
            [
                [
                    '$sort' =>[
                        'date'=> -1
                    ]
                    
                ]
                
            ],[
                'cursor' => [
                    'batchSize' => 0
                ]
            ]
        );
        // $data = $this->mongo_db->row_array($result);
        return $result;
    }
}