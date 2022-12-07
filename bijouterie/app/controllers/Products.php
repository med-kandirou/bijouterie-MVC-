<?php

class Products extends Controller{

    function __construct()
    {
        $this->product=$this->model('Product');
    }
    public function dashbord(){
        if(isset($_SESSION['id'])){
            $data=$this->model->getproduct();
            $this->view('admin/dashbord',$data);
        }
        else{
            header('location:../pages/connect');
            exit();
        }
    }

    //page add (get categorie)
    public function addProd(){
        if(isset($_SESSION['id'])){
            $data=$this->product->getcat();
            $this->view('admin/addProd',$data);
        } 
    }

    //insert prod in db 
    public function insertProd(){
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $nom=$_POST['nom'];
            $desc=$_POST['desc'];
            $img=$_FILES["image"]["name"];
            $prix=$_POST['prix'];
            $qt=$_POST['qt'];
            $id_cat=$_POST['id_cat'];
            $res=$this->product->add($nom,$desc,$img,$prix,$qt,$id_cat);
            if($res==true){
                echo "aded";
            }
        }
    }


    public function delete($id_prod){
        $res=$this->product->delete($id_prod);
        if($res==true)
        {
            echo "deleted";
        }
    }

    public function show($id_prod){
        $data=$this->product->show($id_prod);
        $data2=$this->product->getcat();
        $this->view('admin/show',$data,$data2);
    }


    public function update($id_prod){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_post);
            $data=$this->product->update($id_prod,$nom,);

        }
        

    }


}