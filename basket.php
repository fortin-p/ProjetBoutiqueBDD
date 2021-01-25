<?php
session_start();

require_once "article.php";
require_once "functions.php";
require_once "database.php";
require_once 'class_Catalogue.php';
require_once 'class_chaussure.php';
require_once 'class_basket.php';

$basket = new Basket();
if (isset($_POST['addarticles'])){
    if (!isset($_SESSION['panier'])){
        $_SESSION['panier'] = [];
    }

    foreach ($_POST['addarticles'] as $key => $value) {

        $basket->addArticle($value);

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
    <div class="container">
        <div class="d-flex flex-wrap">
    <?php


    displayBask($basket);

    ?>
    </div>

    </div>
    <?php

    echo "le prix total est : " . basketTotal($basket);// total des articles selectionnez

    ?>

    <button type="submit" name='recalculer' class="btn btn-primary">Passer Commande</button>
</form>