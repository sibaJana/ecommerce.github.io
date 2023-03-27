<?php

function custom_flashdata($class,$msg,$url){
    $CI=get_instance();
    $CI->session->set_flashdata('class', $class);
    $CI->session->set_flashdata('msg', $msg);
    redirect($url);
    
}
function isSession(){
    $CI=get_instance();
    if($CI->session->userdata('email')){
        return true;
    }
    else{
        return false;
    }
    

}

function getAmdinId(){
    $CI=get_instance();
    $CI->load->library('session');
    if($CI->session->userdata('id')){
       return $CI->session->userdata('id'); 
    }   else{
        return false;
    }
}



?>