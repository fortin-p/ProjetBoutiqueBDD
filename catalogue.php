<?php
require_once "article.php";
require_once "functions.php";
require_once "database.php";
require_once 'class_Catalogue.php';
require_once 'class_chaussure.php';
session_start();



require "header.php"
?>



    <?php

    $catalogue = new Catalogue();
    displayCat($catalogue);


    ?>











