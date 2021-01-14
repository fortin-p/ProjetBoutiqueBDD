<?php
session_start();

require_once "article.php";
require_once "functions.php";
require_once "database.php";
require_once 'class_Catalogue.php';
require_once 'class_chaussure.php';
require_once 'class_basket.php';
$messageErrorPrice = "";
$articlesQuantite = [];

$basket = new Basket();
    if (isset($_POST['addarticles'])){
        if (!isset($_SESSION['panier'])){
            foreach ($basket->basket as $article){
                $basket->setBasket();

            }

        }
        foreach ($_POST['addarticles'] as $id){
            $basket->add($id);
            ?><pre><?php
            var_dump($basket);?>
            </pre><?php
            echo 'id :'. $id;
        }

displayBask($basket);







}



//if (isset($_POST['recalculer'])){
//
//    foreach ($_POST['setQuantityArticle'] as $id => $quantity){
//
//        foreach ($basket->basket as $article) {
//
//            if ($id == $article->id) {
//
//                $article->setQuantityBasket($quantity);
//                $_SESSION['panier'][$id] = $id . ',' . $article->getQuantityBasket();
//
//            }
//
//        }
//    }
//}


////Creation de la commande
//if (isset($_POST['recalculer'])) {
//    $total =  basketTotal($basket) ;
//    $req = createOrder($customer_id=1,$total,$basket);
//    echo 'commande ajouté';
//    }


?>

<?php
require "header.php"
?>
<h1 class="text-center">PANIER</h1>

<form action="#" method="POST">
    <?php

    $basket = new Basket();
    displayBask($basket);

    ?>

    <?php

    echo "le prix total est : " . basketTotal($basket);// total des articles selectionnez

    ?>

    <button type="submit" name='recalculer' class="btn btn-primary">Passer Commande</button>
</form>