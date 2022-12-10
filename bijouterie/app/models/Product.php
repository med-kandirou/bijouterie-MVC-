<?php

class Product extends database{
    function __construct() {}

    public function getproduct(){
        $sql = "SELECT `id_p`, `nom`, `image`, `prix`, `quantite`, `id_cat` FROM `product`";
        $stmt=$this->openConnection()->query($sql);
        $data=$stmt->fetchAll();
        return $data;
       
    }

    public function getcat(){
        $sql = "SELECT `id_c`, `libelle` FROM `categorie`";
        $stmt=$this->openConnection()->query($sql);
        $data=$stmt->fetchAll();
        return $data;
    }

    public function delete($id_prod){
        $sql = "DELETE FROM `product` WHERE id_p=:id_prod";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':id_prod', $id_prod);
        if($stmt->execute()){
            return true;
        }
    }

    public function add($nom,$desc,$img,$prix,$qt,$id_cat){
        $sql = "INSERT INTO `product`(`nom`, `description`, `image`, `prix`, `quantite`, `id_cat`) VALUES (:nom, :desc,:img, :prix, :qt, :id_cat)";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':desc', $desc);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':prix', $prix);
        $stmt->bindParam(':qt', $qt);
        $stmt->bindParam(':id_cat', $id_cat);
        if($stmt->execute()){
           return true;
        }
    }

    public function show($id_prod){
        $sql = "SELECT p.`id_p`, p.`nom`, p.`description`, p.`image`, p.`prix`, p.`quantite`, c.libelle FROM `product` p inner join categorie c on p.id_cat=c.id_c WHERE p.id_p=:id_p";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':id_p', $id_prod);
        $stmt->execute();
        $res=$stmt->fetch();
        return $res;
    }

    public function update_with_image($id_prod,$nom,$desc,$img,$prix,$qt,$cat){
        $sql = "UPDATE `product` SET `nom`=:nom,`description`=:desc,`image`=:img,`prix`=:prix,`quantite`=:qt,`id_cat`=:cat WHERE id_p=:id_prod";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':desc', $desc);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':prix', $prix);
        $stmt->bindParam(':qt', $qt);
        $stmt->bindParam(':cat', $cat);
        $stmt->bindParam(':id_prod', $id_prod);
        $stmt->execute();
        return true;
    }

    public function update_wihout_image($id_prod,$nom,$desc,$prix,$qt,$cat){
        $sql = "UPDATE `product` SET `nom`=:nom,`description`=:desc,`prix`=:prix,`quantite`=:qt,`id_cat`=:cat WHERE id_p=:id_prod";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':desc', $desc);
        $stmt->bindParam(':prix', $prix);
        $stmt->bindParam(':qt', $qt);
        $stmt->bindParam(':cat', $cat);
        $stmt->bindParam(':id_prod', $id_prod);
        $stmt->execute();
        return true;
    }

}
