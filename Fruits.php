<?php
require_once "article.php";
require_once "functions.php";
require_once "database.php";
require_once 'class_Catalogue.php';
require_once 'class_chaussure.php';
require "header.php";

?>
<div class="container">
    <div class="d-flex flex-wrap">
        <?php


$fruits = new Catalogue();
displayFruits($fruits);

?>
    </div>
</div>