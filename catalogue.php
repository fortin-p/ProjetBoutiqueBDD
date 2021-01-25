<?php
require_once "article.php";
require_once "functions.php";
require_once "database.php";
require_once 'class_Catalogue.php';
require_once 'class_chaussure.php';
//require_once 'class_basket.php';
session_start();



require "header.php"
?>


<div class="container">
    <div class="d-flex flex-wrap">
    <?php

    $catalogue = new Catalogue();
    displayCat($catalogue);



    ?>

</div>

</div>







