<?php
require_once  'database.php';
require_once 'functions.php';
require_once 'article.php';
require_once 'basket.php';
require_once 'class_Catalogue.php';

$messageErrorPrice = "";
$articlesQuantite = [];
class Basket{
    Public $basket =[];


    public function __construct($Session){
        $this->getAll();

    }
    public function getAll(){
        $catalogue = new Catalogue();

        foreach ($_SESSION['panier'] as $value) {
            $explode = explode(',',$value); // Separateur de string
            $article= $catalogue->getArticleById($explode[0]); // on récupére a l'index 0 = l'id
            $article->setQuantityBasket($explode[1]); // a l'index 1 qui vaut a la quantity
            $this->basket[$explode[0]] = $article; // on stocke dans le basket

        }

    }

    public function add($id){
        foreach($_SESSION['addarticles'] as $key_post => $value){


        }


    }




}
