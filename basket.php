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

if (isset($_POST['addarticles'])) {

        $_SESSION['panier'] = [];

    foreach ($_POST['addarticles'] as $id){

        $_SESSION['panier'][$id]=$id.',1';   //explode on sépare l'index0 id de l'index1 quantity que l'on met a 1
    }
}
$basket = new Basket($_SESSION);

if (isset($_POST['recalculer'])){

    foreach ($_POST['setQuantityArticle'] as $id => $quantity){

        foreach ($basket->basket as $article) {

            if ($id == $article->id) {

                $article->setQuantityBasket($quantity);
                $_SESSION['panier'][$id] = $id . ',' . $article->getQuantityBasket();

            }

        }
    }
}


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

    displayBask($basket);

    ?>

    <?php

    echo "le prix total est : " . basketTotal($basket);// total des articles selectionnez

    ?>

    <button type="submit" name='recalculer' class="btn btn-primary">Passer Commande</button>
</form>