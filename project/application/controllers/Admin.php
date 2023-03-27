<?php 

class Admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        // $this->load->library('session');
        $this->load->helper('custom_helper');
        $this->load->library('pagination');
    }
    // admin pannel display
    public function index(){
        if($this->session->userdata('email')){

        $this->load->view('admin/header/header');
        $this->load->view('admin/header/css');
        $this->load->view('admin/header/navbar');
        $this->load->view('admin/header/leftnav');
        $this->load->view('admin/home/mainhome');
        $this->load->view('admin/footer/footer');
        $this->load->view('admin/footer/js');
        $this->load->view('admin/footer/endhtml');
        }else{
            redirect('Admin/login');
        }
        

    }

    // for login 
    public function login(){
        $this->load->view('admin/login');
    }

    public function checkAdmin(){
        $data['aEmail']=$this->input->post('email',true);
        $data['aPassword']=$this->input->post('password',true);
        $admin=$this->Admin_model->check_admin($data);
        if(count($admin)==1){
            
            // echo var_dump($admin);
            $sessiondata=array('id'=>$admin[0]['aId'],'name'=>$admin[0]['aName'],'email'=>$admin[0]['aEmail']);
            $this->session->set_userdata($sessiondata);
            if($this->session->userdata('email')){
                redirect('Admin');
                
            }
            else{
                // echo 'session not set';
                custom_flashdata('alert-warning','please try again','Admin/login');
            }


        }
        else{
            // $this->session->set_flashdata('msg', 'Email and password are not match');
            custom_flashdata('alert-danger','Email and password are not match','Admin/login');
            // redirect('Admin/login');
            
        }

    }

    // log out
    public function logOut(){
        if($this->session->userdata('email')){
        $this->session->unset_userdata('email');
        // $this->session->set_flashdata('msg','logout successfully');
        // redirect('Admin/login');
        $this->index();
        custom_flashdata('alert-info','Logout Successfull','Admin/login');
        
        }
       

        
    }
    // for display category
    public function category(){

        if(isSession()){

        $this->load->view('admin/header/header');
        $this->load->view('admin/header/css');
        $this->load->view('admin/header/navbar');
        $this->load->view('admin/header/leftnav');
        $this->load->view('admin/home/newcategory');
        $this->load->view('admin/footer/footer');
        $this->load->view('admin/footer/js');
        $this->load->view('admin/footer/endhtml');
        }
        else{
            custom_flashdata('alert-info','Login in First ','Admin/login');
        }

    }


    // for add category
    public function creatCategory(){
        // echo 'working';
        // die();

        if(isSession()){
            // echo 'hi';
            $data['cName']=$this->input->post('cName',true);
        //    die();     
           if(!empty($data['cName'])){
           
                    // $path=realpath(APPPATH.'./assets/upload');
                                             }

                       // echo "done";
                $config['upload_path']= './assets/upload';
                $config['allowed_types']= 'gif|jpg|png';
                $config['encrypt_name'] =true;
                $this->load->library('upload',$config);

                if(!$this->upload->do_upload('cDp')){
                  
                    $error=$this->upload->display_errors();
                    custom_flashdata('alert-denger','File Upload No possible please Try again','Admin/category');
                }
                else{
                    $fileName=$this->upload->data();
                    $data['cDp']=$fileName['file_name'];
                    $data['cDate']=date('Y-M-d h:i:sa');

                }
                        $addData=$this->Admin_model->addData($data);
                        if($addData){
                            custom_flashdata('alert-success','Category Insurted Successfully','Admin/category');
                        }
                        else{
                            custom_flashdata('alert-warning','Category Not Insurted','Admin/category');
                    
                        }

        }
        else{
            custom_flashdata('alert-info','You have to Login First','Admin/login');
                      

        }

}

    public function showCategory(){

        if(isSession()){
        $return_data['data']=$this->Admin_model->showCategoryModel();
        $this->load->view('admin/header/header');
        $this->load->view('admin/header/css');
        $this->load->view('admin/header/navbar');
        $this->load->view('admin/header/leftnav');
        $this->load->view('admin/home/show_category',$return_data);
        $this->load->view('admin/footer/footer');
        $this->load->view('admin/footer/js');
        $this->load->view('admin/footer/endhtml');
        }
        else{
            custom_flashdata('alert-danger','You have To Loging First','Admin/login');
        }

    }
    public function editCategory($id=null){
        if(isSession()){
            if(!empty($id)){
                $category['data']=$this->Admin_model->checkCategoryId($id);

                if(count($category['data'])==1){
                    // echo 'found';

                    $this->load->view('admin/header/header');
                    $this->load->view('admin/header/css');
                    $this->load->view('admin/header/navbar');
                    $this->load->view('admin/header/leftnav');
                    $this->load->view('admin/home/editcategory',$category);
                    $this->load->view('admin/footer/footer');
                    $this->load->view('admin/footer/js');
                    $this->load->view('admin/footer/endhtml');



                }
                else{
                    custom_flashdata('alert-danger','Category Id Not Found','Admin/showCategory');
                    
                }

            }

            
        }
        else{
            custom_flashdata('alert-danger','You have To Loging First','Admin/login');
       

        }
    }


    
    public function editCategoryUpdate(){
    
        
        
            // echo 'working';
            // die();

            if(isSession()){
                // echo 'hi';
                $data['cName']=$this->input->post('cName',true);
                $id=$this->input->post('cId',true);
                $oldImage=$this->input->post('cDp',true);
            //    die();     
            if(!empty($data['cName']) && !empty($id['cId'])){
            
                        // $path=realpath(APPPATH.'./assets/upload');
                                                }

                        // echo "done";
                    $config['upload_path']= './assets/upload';
                    $config['allowed_types']= 'gif|jpg|png';
                    $config['encrypt_name'] =true;
                    $this->load->library('upload',$config);

                    if(!$this->upload->do_upload('cDp')){
                    
                        $error=$this->upload->display_errors();
                        custom_flashdata('alert-denger','File update Not possible please Try again','Admin/editCategoryUpdate');
                    }
                    else{
                        $fileName=$this->upload->data();
                        $data['cDp']=$fileName['file_name'];
                        $data['cDate']=date('y-m-d h:i:sa');

                    }   
                            $addData=$this->Admin_model->updateCategory($data,$id);
                            if($addData){
                                
                                    
                                        // echo 'hi';
                                        unlink('./assets/upload/'.$oldImage);
                                    
                                
                                custom_flashdata('alert-success','Category update Successfully','Admin/showCategory');
                            }
                            else{
                                custom_flashdata('alert-warning','Category Not update','Admin/editCategory');
                        
                            }

            }
            else{
                custom_flashdata('alert-info','You have to Login First','Admin/login');
                        

            }



    }



    public function deleteCategory($id=null){

        // echo $id;
        if(isSession()){
        if(!empty($id) && isset($id)){
        if($this->Admin_model->deleteCategoryData($id)){
            custom_flashdata('alert-success','Record Delete Successfull','Admin/showCategory');
        }
        else{
            custom_flashdata('alert-warning','Record Not Delete ','Admin/showCategory');
      

        }
    }
        }
        else{
            custom_flashdata('alert-danger','You Have To Login First','Admin/login');
        }

        
    }

    // new product
    public function newProduct(){
        if(isSession()){
            $data['category']=$this->Admin_model->showAllCategory();
            // print_r($data);
            // die();
            $this->load->view('admin/header/header');
            $this->load->view('admin/header/css');
            $this->load->view('admin/header/navbar');
            $this->load->view('admin/header/leftnav');
            $this->load->view('admin/home/newproduct',$data);
            $this->load->view('admin/footer/footer');
            $this->load->view('admin/footer/js');
            $this->load->view('admin/footer/endhtml');
            }else{
                redirect('Admin/login');
            }
    }

     // add new product 
    public function addNewProduct(){

        if(isSession()){
            // echo 'hi';
            $data['pName']=$this->input->post('pName',true);
            $data['pStatus']=0;
            $data['pDate']=date('y-m-d h:i:sa');
            $data['categoryId']=$this->input->post('cId',true);
            $data['adminId']=1;
            $data['pCompanyName']=$this->input->post('pCompanyName',true);
            
            
        //    die();     
           if(!empty($data['pName'])){
           
                    // $path=realpath(APPPATH.'./assets/upload');
                                             }

                       // echo "done";
                $config['upload_path']= './assets/upload/productimage';
                $config['allowed_types']= 'gif|jpg|png';
                $config['encrypt_name'] =true;
                $this->load->library('upload',$config);

                if(!$this->upload->do_upload('pDp')){
                  
                    $this->upload->display_errors();
                    custom_flashdata('alert-danger','File Upload No possible please Try again','Admin/newProduct');
                }
                else{
                    $fileName=$this->upload->data();
                    $data['pDp']=$fileName['file_name'];
                    // $data['pDate']=date('y-m-d h:i:sa');

                }
                        $addData=$this->Admin_model->ProductAdd($data);
                        if($addData){
                            custom_flashdata('alert-success','Category Insurted Successfully','Admin/newProduct');
                        }
                        else{
                            custom_flashdata('alert-warning','Category Not Insurted','Admin/newProduct');
                    
                        }

        }
        else{
            custom_flashdata('alert-info','You have to Login First','Admin/login');
                      

        }



     }

     //product diplay
     public function newProductShow(){
        if(isSession()){
            $productlist['data']=$this->Admin_model->showProduct();

            
        

            $this->load->view('admin/header/header');
            $this->load->view('admin/header/css');
            $this->load->view('admin/header/navbar');
            $this->load->view('admin/header/leftnav');
            $this->load->view('admin/home/productshow',$productlist);
            $this->load->view('admin/footer/footer');
            $this->load->view('admin/footer/js');
            $this->load->view('admin/footer/endhtml');
            }else{
                redirect('Admin/login');
            }
     }



    public function editEditProduct($id){

        if(isSession()){
            $productlist['data']=$this->Admin_model->checkProductId($id);
            // print_r($productlist);
            // die();
            if(count($productlist['data'])==1){
                $this->load->view('admin/header/header');
                $this->load->view('admin/header/css');
                $this->load->view('admin/header/navbar');
                $this->load->view('admin/header/leftnav');
                $this->load->view('admin/home/editEditProduct',$productlist);
                $this->load->view('admin/footer/footer');
                $this->load->view('admin/footer/js');
                $this->load->view('admin/footer/endhtml');
            }
            else{
                custom_flashdata('alert-warning','product id not found','Admin/newProductShow');
            }
            }else{
                redirect('Admin/login');
            }

           
        

    }
    public function updataProduct(){
        if(isSession()){
            // echo "hi";
            // die();
      echo $productId=$this->input->post('pId',true);
    //   die();
      $data['pName']=$this->input->post('pName',true);
      $data['categoryId']=$this->input->post('categoryId',true);
      $oldImage=$this->input->post('pDp',true);
      $data['pCompanyName']=$this->input->post('pCompanyName',true);
    //   print_r($data);
    //   die();
      if (!empty($data['pName']))
      {

        $config['upload_path']= './assets/upload/productimage';
        $config['allowed_types']= 'gif|jpg|png';
        $config['encrypt_name'] =true;
        $this->load->library('upload',$config);

        if(!$this->upload->do_upload('pDp')){
        
            $this->upload->display_errors();
            custom_flashdata('alert-denger','File update Not possible please Try again','Admin/editEditProduct');
        }
        else{
            $fileName=$this->upload->data();
            $data['pDp']=$fileName['file_name'];
            $data['pDate']=date('y-m-d h:i:sa');

        }
        // print_r($data);
        // die();
        $addData=$this->Admin_model->editProductModel($data,$productId);

        if($addData){
            // echo 'hi';
            
                
                    // echo 'hi';
            unlink('./assets/upload/productimage'.$oldImage);
                
            
            custom_flashdata('alert-success','Category update Successfully','Admin/newProductShow');
        }
        else{
            custom_flashdata('alert-warning','Category Not update','Admin/newProductShow');
    
        }
    }
    else{
        custom_flashdata('alert-warning','all fild are required','Admin/editEditProduct');

    }
   

      }
      else{
        custom_flashdata('alert-info','You have to Login First','Admin/login');
                

    }

    }

    public function deleteProduct($id=null){

        // echo $id;
        
        // die();
        $deleteproduct=$this->Admin_model->deleteProduct($id);
        // echo $deleteproduct;
        // die();
            if($deleteproduct==1){
                custom_flashdata('alert-success','product delete successfull','Admin/newProductShow');
            }
            else{
                custom_flashdata('alert-success','product not deleted Try again :)','Admin/newProductShow');
            

            }
    }

    // show model 
    public function model(){
        if(isSession()){

            $result['data']=$this->Admin_model->productdown();

            $this->load->view('admin/header/header');
            $this->load->view('admin/header/css');
            $this->load->view('admin/header/navbar');
            $this->load->view('admin/header/leftnav');
            $this->load->view('admin/home/model',$result);
            $this->load->view('admin/footer/footer');
            $this->load->view('admin/footer/js');
            $this->load->view('admin/footer/endhtml');

        }
        else{
            custom_flashdata('alert-danger','you Have to Login first','Admin/login');
        }
    }

    // add model 

    public function addmodel(){
        
        $data['mName']=$this->input->post('mName');
        $data['mDate']=date('y-m-d h:m:sa');
        $data['mStatus']=1;
        $data['productId']=$this->input->post('pId');
        $data['adminId']=1;
        // print_r($data);
        
        $config['upload_path']= './assets/model';
        $config['allowed_types']= 'gif|jpg|png';
        $config['encrypt_name'] =true;
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('mDp')){
                  
            $this->upload->display_errors();
            custom_flashdata('alert-danger','File Upload No possible please Try again','Admin/model');
        }
        else{
            $fileName=$this->upload->data();
            $data['mDp']=$fileName['file_name'];
            $data['mDescript']=$this->input->post('mdescription');
            // $data['pDate']=date('y-m-d h:i:sa');

        }
        // print_r($data);
        // die();
        $addData=$this->Admin_model->modelAdd($data);
        if($addData){
            custom_flashdata('alert-success','Category Insurted Successfully','Admin/model');
        }
        else{
            custom_flashdata('alert-warning','Category Not Insurted','Admin/model');
    
        }





    }
    public function showAllModel(){

        if(isSession()){
            $model['data']=$this->Admin_model->modelShow();
            $this->load->view('admin/header/header');
            $this->load->view('admin/header/css');
            $this->load->view('admin/header/navbar');
            $this->load->view('admin/header/leftnav');
            $this->load->view('admin/home/showallmodel',$model);
            $this->load->view('admin/footer/footer');
            $this->load->view('admin/footer/js');
            $this->load->view('admin/footer/endhtml');
        }
        else{
            custom_flashdata('alert-warning','you have to login first','Admin/Login');
        }

    }

    public function editmodel($id=null){
       $modelId['data']= $this->Admin_model->modelIdCheck($id);

       if(count($modelId)==1){
        
        $this->load->view('admin/header/header');
        $this->load->view('admin/header/css');
        $this->load->view('admin/header/navbar');
        $this->load->view('admin/header/leftnav');
        $this->load->view('admin/home/editmodel',$modelId);
        $this->load->view('admin/footer/footer');
        $this->load->view('admin/footer/js');
        $this->load->view('admin/footer/endhtml');


       }else{
        custom_flashdata('alert-warning','Model Id Not Found','Admin/editmodel');
       }
    }
    public function editModelData(){
       $input['mName']= $this->input->post('mName',true);
       $input['date']= date('y-m-d h:m:sa');
       $input['mDescript']= $this->input->post('mDescript',true);
       $mid= $this->input->post('mId',true);
       
        $oldImage=$this->input->post('pDp',true);
       $config['upload_path']= './assets/model';
       $config['allowed_types']= 'gif|jpg|png';
       $config['encrypt_name'] =true;
       $this->load->library('upload',$config);
       if(!$this->upload->do_upload('mDp')){
                 
           $this->upload->display_errors();
           custom_flashdata('alert-danger','File Upload No possible please Try again','Admin/model');
       }
       else{
           $fileName=$this->upload->data();
           $input['mDp']=$fileName['file_name'];
       }
       $addData=$this->Admin_model->editModelData($input,$mid);

        if($addData){
            // echo 'hi';
            
                
                    // echo 'hi';
            unlink('./assets/model'.$oldImage);
                
            
            custom_flashdata('alert-success','Category update Successfully','Admin/showAllModel');
        }
        else{
            custom_flashdata('alert-warning','Category Not update','Admin/showAllModel');
    
        }



    }
   
    public function deleteModel($id=null){
       $result= $this->Admin_model->modelIdCheck($id);
    //    print_r($result);
    if($result){
        $this->Admin_model->deleteModel($id);
        custom_flashdata('alert-success','Category update Successfully','Admin/showAllModel');

    }
    else{
        custom_flashdata('alert-success','Category Not update','Admin/showAllModel');
    }
    }

    public function specs(){

        
        if(isSession()){
           
            $model['data']=$this->Admin_model->modelShow();

            $this->load->view('admin/header/header');
            $this->load->view('admin/header/css');
            $this->load->view('admin/header/navbar');
            $this->load->view('admin/header/leftnav');
            $this->load->view('admin/home/specs',$model);
            $this->load->view('admin/footer/footer');
            $this->load->view('admin/footer/js');
            $this->load->view('admin/footer/endhtml');
        }
        else{
            custom_flashdata('alert-warning','you have to login first','Admin/Login');
        }

    }

    public function specsAdd(){

        $data['spName']=$this->input->post('spName',true);
        $data['spDate']=date('y-m-d h:m:sa');
        $data['spStatus']=0;
        $data['adminId']=getAmdinId();
        $specsvalue=$this->input->post('addmore',true);
        $specsvalue=array_filter($specsvalue);
        $data['modelId']=$this->input->post('modelId',true);

        // echo var_dump($data);
       $dataValue= $this->Admin_model->checkSpecs($data);
       if($dataValue->num_rows()>0){
        custom_flashdata('alert-warning','specs alredy Exits','Admin/specs');
       }
       else{
        $insert=$this->Admin_model->insultSpecs($data);
 
        if(is_numeric($insert)){
           
            $spv=array();
            foreach($specsvalue as $spec){
                $spv[]=array(
                    'spvName'=>$spec,
                    'spid'=>$insert,
                    'adminid'=>getAmdinId(),
                    'spvStatus'=>0,
                    'spvDate'=>date('y-m-d h:m:sa')
                );
            }// end foreach loop end 
           $spc_Result= $this->Admin_model->insultSpecsValue($spv);
           if($spc_Result){
            custom_flashdata('alert-warning','specs values insurt successfully','Admin/specs');
           }
           else{

            custom_flashdata('alert-warning','specs value not added right now','Admin/specs');
           }
        
        }
        else{
            custom_flashdata('alert-warning','specs  not added ','Admin/specs');
           
            
        }

       }


        
    }




        
}






     


     






?>