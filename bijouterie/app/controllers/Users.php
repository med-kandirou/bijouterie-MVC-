<?php

class Users extends Controller{

    function __construct() {
        $this->product=$this->model('product');
    }

    function displayProd($id_p){
        $data=$this->product->displayProd($id_p);
        $this->view('displayprod',$data);
    }


}
