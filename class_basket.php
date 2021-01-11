<?php
require_once  'database.php';
require_once 'functions.php';
require_once 'article.php';
require_once 'basket.php';

$messageErrorPrice = "";
$articlesQuantite = [];
class Basket{
    Public $basket = array();


    public function __construct($Session){
        $this->test();

    }
    function test(){

        foreach ($_SESSION['panier'] as $products) {

            $bdd = connect();
            $reponse = $bdd->query("SELECT * from products Where id=$products");
            $donnees = $reponse->fetch(PDO::FETCH_ASSOC);

            $article = new Article($donnees['name'],$donnees['description'],$donnees['price'],$donnees['image'],$donnees['weight'],$donnees['quantity'],$donnees['available'],$donnees['id']);

            displayBasket($article);
            var_dump($article);

        }

    }

    function add(){


    }

    function update(){


    }

    function delete(){




    }




}