<?php


require_once "article.php";
require_once "functions.php";
require_once "database.php";
require_once 'class_Catalogue.php';
require_once 'class_chaussure.php';
require_once 'class_basket.php';

$basket = new Basket();
var_dump($basket);
if (isset($_SESSION['panier']))
{
  foreach ($_POST['addarticles'] as $article => $value){


  }


}

displayBask($basket);