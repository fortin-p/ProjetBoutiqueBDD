<?php
require_once  'database.php';
require_once 'functions.php';
require_once 'article.php';
require_once 'basket.php';
require_once 'class_Catalogue.php';


class Basket{
    Public $basket = [];
    public function __construct(){


    }

    public function getAll(){
        if (isset($_POST['addarticles'])){
            $basket[] = $_POST['addarticles'];
            foreach ($_POST['addarticles'] as $key){
                $basket->setBasket($_POST['addarticles']);
            }


        }




    }


    public function add($id){

            $this->basket[$id]=1;


    }
    public function update($id){
        $this->basket[$id] += 1;


    }

    public function del($id){
        if (isset($_POST['delete']))
            unset($_SESSION['panier'][$id]);

    }



    public function getBasket(): array
    {
        return $this->basket;
    }




    public function setBasket(array $basket)
    {
        $this->basket = $basket;
    }


}
