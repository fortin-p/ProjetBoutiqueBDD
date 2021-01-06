<?php
session_start();


include "article.php";
include "functions.php";
$messageErrorPrice = "";
$articlesQuantite = [];
$varArticles = [];
if (isset($_POST['articles'])) {


    foreach ($_POST['articles'] as $key => $value) { // supression des articles

        if (isset($_POST['delete'][$key])) {
            unset($_POST['articles'][$key]);

        }

    }

    $_SESSION['panier'] = $_POST['articles'];
    $varArticles = $_POST['articles'];

} else {
    if (isset ($_SESSION['panier'])) {
        $varArticles = $_SESSION['panier'];

    }

}

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
<?php
global $article1;
global $article2;
global $article3;
$liste_products = array($article1, $article2, $article3);
?>

<form action="#" method="POST">

    <div class="container d-flex">


        <?php


        foreach ($varArticles as $key => $products) {
            ?>

            <?php

            $articlesQuantite[$liste_products[$key]['name']] = $liste_products[$key]['price'];
            $quantity[$key] = $products;
            if ($quantity[$key] === 'on') {
                $quantity[$key] = 1;
            }


            if (is_numeric($products) && is_numeric($liste_products[$key]['price'])) {
                $articlesQuantite [$liste_products[$key]['name']] = $liste_products[$key]['price'] * $products;
            }


            if ($quantity[$key] != (int)$quantity[$key]) {
                $messageErrorPrice = "Veuillez saisir un entier!!";

            } else {

                $messageErrorPrice = "Veuillez saisir une quantité!!";
            }

            ?>
            <div class='d-flex card p-2 ml-5 '
                 style='background: linear-gradient(0deg,#ffba08,#222,#e85d04); width: 300px;'>
                <?php
                displayItem($liste_products[$key]['name'], $liste_products[$key]['price'], $liste_products[$key]['picture'], $quantity[$key], $key, $messageErrorPrice);
                ?>
            </div>
            <?

        }

        ?>
    </div>
    <?php

    echo "le prix total est : " . basketTotal($articlesQuantite);// total des articles selectionnez

    ?>

    <button type="submit" class="btn btn-primary">Recalculer</button>
</form>


<script src="bootstrap/jquery-3.5.1.min.js"></script>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
