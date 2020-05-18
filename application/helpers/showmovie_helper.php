<?php 
 function getMovie($id)
 {
    $CI = &get_instance();
    $CI->load->model('movie_model');
    $condition = array(
       'genres' => $CI->mongo_db->create_document_id($id)
    );
    $result = $CI->movie_model->findOne($condition);
    return $result['movieName'];
}

 
 
 


?>