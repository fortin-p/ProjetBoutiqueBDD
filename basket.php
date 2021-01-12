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

        $_SESSION['panier'][$id]=$id.',1';   //explode on sépare l'index id de l'index quantity que l'on met a 1
    }
} else {
    if (isset ($_SESSION['panier'])) {
        $varArticles = $_SESSION['panier'];

    }

}
$basket = new Basket($_SESSION);
if (isset($_POST['recalculer'])){

    foreach ($_POST['setQuantityArticle'] as $id => $quantity){

        foreach ($basket->basket as $article){

            if ($id == $article->id){

                $article->setQuantityBasket($quantity);
                $_SESSION['panier'][$id]=$id.','.$article->getQuantityBasket();

            }


        }


    }


}


//Creation de la commande
//if (isset($_POST['recalculer'])) {
//    foreach ($basket->basket as $article) {
//        $order = 5;
//        $product = $article->id;
//        $quantity = $article->getQuantityBasket();;
//        $req = createOrder($order, $product, $quantity);
//        echo 'commande ajouté';
//
//    }
//}



?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basket</title>
</head>
<body>
<?php
require "header.php"
?>
<h1 class="text-center">PANIER</h1>

<form action="#" method="POST">
    <?php

    displayBask($basket);


    if (isset($_GET['delete'])){
        $basket->del($_GET['delete']);

    }

    ?>

    <?php

    // echo "le prix total est : " . basketTotal($articlesQuantite);// total des articles selectionnez

    ?>

    <button type="submit" name='recalculer'class="btn btn-primary">Passer Commande</button>
</form>


<script src="bootstrap/jquery-3.5.1.min.js"></script>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
