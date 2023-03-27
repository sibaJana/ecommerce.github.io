<?php

    class Home_model extends CI_Model{
        function usercheck(){
            return $this->db->get_where('user',array('uEmail'=>'email'))->result_array();  
        }

        function checkUser($data){
            return $this->db->get_where('user',array('uEmail'=>$data))->result_array();
        }
        function insurtData($data){
            return $this->db->insert('user',$data);
        }
        function getData($data){
            return $this->db->get_where('user',$data)->result_array();
    }
    function fetchCategoryData(){
        return $this->db->get('category');
    }
    function product(){
        return $this->db->get('products');
    }
    function allProductfetch($id){
        return $this->db->get_where('products',array('pId'=>$id))->result_array();
    }
    public function modelDetails($id){
        return $this->db->get_where('models',array('productId'=>$id))->result_array();
        // echo var_dump($data);
      
    }
    public function sp($id){
        return $this->db->get_where('specs',array('modelId'=>$id))->result_array();
        // echo var_dump($data);
      
    }
    public function spv($id){
        return $this->db->get_where('spec_values',array('spid'=>$id))->result_array();
        // echo var_dump($data);
      
    }
    public function productPrise($id){
        return $this->db->get_where('products',array('pId'=>$id))->result_array();
    }
}

?>