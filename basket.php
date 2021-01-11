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


    $_SESSION['panier'] = $_POST['addarticles'];


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

<form action="#" method="POST">

    <div class="container d-flex">


        <div class='d-flex card p-2 ml-5 '
             style='background: linear-gradient(0deg,#ffba08,#222,#e85d04); width: 300px;'>
            <?php
            $basket = new Basket($_SESSION['panier']);



            ?>
        </div>
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
