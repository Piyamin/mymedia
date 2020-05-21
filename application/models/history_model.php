<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class History_model extends CI_Model
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
    public function gethistory($condition = [])
    {
        $result = $this->mongo_db->aggregate(
            'history',
            [
                [
                    '$lookup' =>[
                        'from' =>"movie",
                        'localField'=>"movie",
                        'foreignField'=>"_id",
                        'as'=>"historymovie"
                    ]
                    
                    ],
                [
                    '$match' =>[
                        'customer'=>  $this->mongo_db->create_document_id($condition) 
                    ]
                ]
                
            ],  
            [
                'cursor' => [
                    'batchSize' => 0
                ]
            ]  
            
        );
        // $data = $this->mongo_db->row_array($result);
        return $result;
    }
}
