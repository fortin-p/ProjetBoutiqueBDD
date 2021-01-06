<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=my_base;charset=utf8', 'pef', 'PefCampus38');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}





$article1 = array(                      // tableau article1
    "name" => "LSD",
    "price" => 10,
    "picture" => "test.jpg",
);


$article2 = array(                      // tableau article2
    "name" => "MDMA",
    "price" => 80,
    "picture" => "test2.jpg",
);



$article3 = array(                      // tableau article3
    "name" => "AYAHUESCA",
    "price" => 40,
    "picture" => "test3.jpg",
);

