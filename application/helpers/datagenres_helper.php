<?php 
 function getNamegenrs($id)
 {
     $CI = &get_instance();
     $CI->load->model('genres_model');
     $condition = array(
        '_id' => $CI->mongo_db->create_document_id($id)
     );
     $result = $CI->genres_model->findOne($condition);
     return $result['genName'];
 }
 

?>