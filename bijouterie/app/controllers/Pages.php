<?php

class Pages extends Controller{
    function __construct() {
        $this->model=$this->model('Product');
    }
    
    public function index(){
        $this->view('index');
    }

    public function about(){
        $this->view('about');
    }

    public function gallery(){
        $data=$this->model->getcat();
        $data2=$this->model->getproduct();
        $this->view('gallery',$data,$data2);
    }

    public function contact(){
        $this->view('contact');
    }
    
    public function connect(){
        if(isset($_SESSION['id'])){
            $data=$this->model->getproduct();
            $this->view('admin/dashbord',$data);
        }
        else{
            $data=[
                'email'=>'',
                'password'=>'',
                'email_err'=>'',
                'password_err'=>'',
                'isTrue'=>''
            ];
            $this->view('connect',$data);
        }    
    }

    public function addProd(){
        if(isset($_SESSION['id'])){
            $this->view('admin/addProd');
        }
        else{
            $this->connect();
        } 
    }

    public function dashbord(){
        if(isset($_SESSION['id'])){
            $data=$this->model->getproduct();
            $this->view('admin/dashbord',$data);
        }
        else{
            $this->connect();
        }
        
    }
}
