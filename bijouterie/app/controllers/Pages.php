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
        $this->view('gallery');
    }

    public function contact(){
        $this->view('contact');
    }
    
    public function connect(){
        $this->view('connect');
    }

    public function addProd(){
        $this->view('admin/addProd');
    }

    public function dashbord(){
        $data=$this->model->getproduct();
        $this->view('admin/dashbord',$data);
    }
}
