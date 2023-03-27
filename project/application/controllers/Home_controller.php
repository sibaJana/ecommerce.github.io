<?php

    class Home_controller extends CI_Controller{
        function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        // $this->load->library('session');
        $this->load->helper('custom_helper');
        $this->load->library('pagination');
    }

        public function index(){
            $data['siba']=$this->Home_model->fetchCategoryData();
            $item['product']=$this->Home_model->product();
            $this->load->view('userdrive/header/header');
            $this->load->view('userdrive/header/css');
            $this->load->view('userdrive/header/navbar',$data);
            $this->load->view('userdrive/home/home',$item);
            $this->load->view('userdrive/footer/js');
            $this->load->view('userdrive/footer/footer');
            $this->load->view('userdrive/footer/endhtml');

        }
        
        public function productview(){
            $this->load->view('userdrive/header/header');
            $this->load->view('userdrive/header/css');
            $this->load->view('userdrive/header/navbar');
            $this->load->view('userdrive/home/productview');
            $this->load->view('userdrive/footer/js');
            $this->load->view('userdrive/footer/footer');
            $this->load->view('userdrive/footer/endhtml');   
        }
        //account 
        public function account(){
            $this->load->view('userdrive/header/header');
            $this->load->view('userdrive/header/css');
            // $this->load->view('userdrive/header/navbar');
            $this->load->view('userdrive/home/singup');
            $this->load->view('userdrive/footer/js');
            // $this->load->view('userdrive/footer/footer');
            $this->load->view('userdrive/footer/endhtml');   
        }
       
    // account registration
    public function checkUser(){
        $data['uName']=$this->input->post('name','true');
        $data['uEmail']=$this->input->post('email','true');
        $data['uPassword']=$this->input->post('password','true');
        $data['uDate']=date('y-m-d h:m:sa');
        $data['uStatus']=0;
       $result= $this->Home_model->checkUser($data['uEmail']);
       if(count($result)==1){
        custom_flashdata('alert-warning','Email already Exits','Home_controller/account');
       }else{
        $insert_data= $this->Home_model->insurtData($data);
        if($insert_data){
            custom_flashdata('alert-success','Account Create Successfully','Home_controller/account');
      
        }
        
       }


    }
    //user login 
    public function login(){
        $data['uEmail']=$this->input->post('email',true);
        $data['uPassword']=$this->input->post('password',true);
        $count=$this->Home_model->getData($data);
        // echo count($count);
        // die();
        if(count($count)==1){
            // custom_flashdata('alert-warning','Email id already Exaits','Home_controller/singup');
            if($count[0]['uStatus']==0){
                custom_flashdata('alert-warning','You Have To Veryfie Your Email First','Home_controller/account');

            }
            elseif($count[0]['uStatus']==2){
                custom_flashdata('alert-warning','Your account was block By admin','Home_controller/account');
  
            }
            elseif($count[0]['uStatus']==1){
               $session= array('id'=>$count[0]['uId'],'email'=>$count[0]['uEmail'],'name'=>$count[0]['uName']);
               $setsession=$this->session->set_userdata($session);
               if($this->session->userdata('email')){
                redirect('Home_controller/home');
               }
               else{
                custom_flashdata('alert-warning','please try after some time later','Home_controller/account');
  
               }
            }
        }
        else{
            custom_flashdata('alert-warning','Email id Not Exaits','Home_controller/account');
            

        }
    }


    function home(){

        // echo getAmdinId('uId')
        // die();
        $data['siba']=$this->Home_model->fetchCategoryData();
        $item['product']=$this->Home_model->product();

        $this->load->view('userdrive/header/header');
        $this->load->view('userdrive/header/css');
        $this->load->view('userdrive/header/navbarlogin',$data);
        $this->load->view('userdrive/home/home',$item);
        $this->load->view('userdrive/footer/js');
        $this->load->view('userdrive/footer/footer');
        $this->load->view('userdrive/footer/endhtml');
    }
    function logout(){
        if($this->session->userdata('id')){
        $this->session->unset_userdata('id');
        // $this->session->session_destroy();
        $this->session->sess_destroy();
            
        custom_flashdata('alert-info','Logout Successfull','Home_controller/index');
        
    }
        } 
        
    function fetchCategory(){
        $data=$this->Home_model->fetchCategoryData();
        
        // $this->load->view('userdrive/header/navbar',$data);

    }
    function productdata($id=null){
        $data['val']=$this->Home_model->allProductfetch($id);
        $data['model']=$this->Home_model->modelDetails($id);
        $data['sp']=$this->Home_model->sp($id);
        $data['spv']=$this->Home_model->modelDetails($id);
        if(count($data['val'])==1){
            $this->load->view('userdrive/header/header');
            $this->load->view('userdrive/header/css');
            // $this->load->view('userdrive/header/navbar');e
            $this->load->view('userdrive/home/productdetails',$data);
            $this->load->view('userdrive/footer/js');
            $this->load->view('userdrive/footer/footer');
            $this->load->view('userdrive/footer/endhtml');
        }
        else{
            custom_flashdata('alert-info','No Product Found This id','Home_controller/index');
        }
      
    }


    public function cartProduct($id=null){
        if(isSession()){
            $data['pData']=$this->Home_model->productPrise($id);
            // echo var_dump($data);
            // die();
            $this->load->view('userdrive/header/header');
            $this->load->view('userdrive/header/css');
            // $this->load->view('userdrive/header/navbar');
            $this->load->view('userdrive/home/cart',$data);
            $this->load->view('userdrive/footer/js');
            $this->load->view('userdrive/footer/footer');
            $this->load->view('userdrive/footer/endhtml');
        }
        else{
            redirect('Home_controller/login');
        }

    }

    }

    

?>