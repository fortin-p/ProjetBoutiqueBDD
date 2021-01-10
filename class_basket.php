<?php
require_once  'database.php';
require_once 'functions.php';
require_once 'article.php';
require_once 'basket.php';

$messageErrorPrice = "";
$articlesQuantite = [];
class Basket{


    public function __construct(){
$this->test();

    }
    function test(){
        ?>

            <?php
        foreach ($_SESSION['panier'] as $key => $products) {

        $reponse = selectAll();

               while($donnees = $reponse->fetchAll()){
                   $articlesQuantite[$donnees[$key]['name']] = $donnees[$key]['price'];
                   $quantity[$key] = $products;
                   if ($quantity[$key] === 'on') {
                       $quantity[$key] = 1;
                   }


                   if (is_numeric($products) && is_numeric($donnees[$key]['price'])) {
                       $articlesQuantite [$donnees[$key]['name']] = $donnees[$key]['price'] * $products;
                   }


                   if ($quantity[$key] != (int)$quantity[$key]) {
                       $messageErrorPrice = "Veuillez saisir un entier!!";

                   } else {

                       $messageErrorPrice = "Veuillez saisir une quantité!!";
                   }
                  //displayItem($donnees[$key]['name'], $donnees[$key]['price'], $donnees[$key]['image'],$donnees[$key]['description'],$quantity[$key],$key,$messageErrorPrice);
                 // $articleBasket = new Article($donnees[$key]['name'],$donnees[$key]['description'],$donnees[$key]['price'],$donnees[$key]['image'],$donnees[$key]['id'],$quantity[$key],$key,$messageErrorPrice);
                  //$this->articles [$donnees[$key]['name']] = $articleBasket; // on stocke les donnees dans l'array;
        ?>

        <?
             }




    }

}

}