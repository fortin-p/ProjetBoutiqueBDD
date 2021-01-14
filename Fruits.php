<?php
require_once "article.php";
require_once "functions.php";
require_once "database.php";
require_once 'class_Catalogue.php';
require_once 'class_chaussure.php';
require "header.php";

$fruits = new Catalogue();
$fruits->getArticlesfruits();
displayFruits($fruits);