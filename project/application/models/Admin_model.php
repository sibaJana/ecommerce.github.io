<?php 

class Admin_model extends CI_Model{
    public function check_admin($data){
        return $this->db->get_where('admin',$data)->result_array();
    }
    public function addData($data){
        return $this->db->insert('category',$data);
    }

    public function showCategoryModel(){
        return $this->db->get('category')->result_array();
        // echo var_dump($data);
    }
    public function checkCategoryId($cId){
        return $this->db->get_where('category',array('cId'=>$cId))->result_array();
    }
    public function updateCategory($data,$cId){
        $this->db->where('cId',$cId);
        return $this->db->update('category',$data);
    }
    public function deleteCategoryData($id){
        return $this->db->delete('category',array('cId'=>$id));
    }
    public function showAllCategory(){
        return $this->db->get('category')->result_array();
    }

    public function ProductAdd($data){
        return $this->db->insert('products',$data);
    }
    public function showProduct(){
        return $this->db->get('products')->result_array();
    }
    // check product id
    public function checkProductId($id){
        return $this->db->get_where('products',array('pId'=>$id))->result_array();
   
        }

        // edit product 
        public function editProductModel($data,$pId){
            $this->db->where('pId',$pId);
            return $this->db->update('products',array('pName'=>$data['pName'],'categoryId'=>$data['categoryId'],'pCompanyName'=>$data['pCompanyName'],'pDp'=>$data['pDp']));
        }
   
    public function deleteProduct($id){
        return $this->db->delete('products',array('pId'=>$id));
    }

    //fetch all product dynamically for dropdownproduct
    public function productdown(){
        return $this->db->get('products')->result_array();
    }

    public function modelAdd($data){
        return $this->db->insert('models',$data);
    }
    public function modelShow(){
        return $this->db->get('models')->result_array();
    }
    public function modelIdCheck($id){
        return $this->db->get_where('models',array('mId'=>$id))->result_array();
    }

    //edit all model product and update
    public function editModelData($data,$id){
        $this->db->where('mId',$id);
        return $this->db->update('models',array('mName'=>$data['mName'],'mDate'=>$data['date'],'mDp'=>$data['mDp'],'mDescript'=>$data['mDescript']));
    }
    public function deleteModel($id){
        return $this->db->delete('models',array('mId'=>$id));

    }
    public function checkSpecs($data){
        return $this->db->get_where('specs',array('spName'=>$data['spName'],'modelId'=>$data['modelId']));
    }
    public function insultSpecs($data){
        $this->db->insert('specs',$data);
        return $this->db->insert_id();
    }
    public function insultSpecsValue($data){
       return  $this->db->insert_batch('spec_values',$data);
    }
    
}

?>