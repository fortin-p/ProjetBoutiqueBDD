<?php
include "article.php";
include "functions.php";
global $article1;
//variable

$item_name = $article1["name"];       //Création de la variable nom
$item_price = $article1["price"];      //Création de la variable prix
$item_picture = $article1["picture"];     //Création de la variable photo
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php
require "header.php"
?>
<div class="container d-flex">
    <div class=" card p-2 ml-5 " style="background: linear-gradient(0deg,#772e25,#222,#1b1b1b);width: 300px;">
        <?php
        // affichage
        displayItem1();
        ?>
    </div>
    <div class=" card p-2 ml-5 " style=" background: linear-gradient(0deg,#6930c3,#222,#1b1b1b); width: 300px;">
        <?php
        // affichage
        displayItem2();
        ?>
    </div>
    <div class=" card p-2 ml-5 " style=" background: linear-gradient(0deg,#023e8a,#222,#1b1b1b);width: 300px;">
        <?php
        // affichage
        displayItem3();
        ?>
    </div>
</div>
<script src="bootstrap/jquery-3.5.1.min.js"></script>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>










