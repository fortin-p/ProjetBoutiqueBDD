<?php
require_once "article.php";
require_once "functions.php";
require_once "database.php";
require_once 'class_Catalogue.php';
require_once 'class_chaussure.php';
session_start();



require "header.php"
?>

<!--<form  action="basket.php" method="POST">-->
<!---->

    <?php

    $catalogue = new Catalogue();
    displayCat($catalogue);


    ?>



<!--    <button type="submit" class="btn btn-primary">Submit</button>-->
<!---->


<!--</form>-->
<!---->





