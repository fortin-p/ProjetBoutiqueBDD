<?php
include "article.php";


function displayItem1()                     // fonction pour afficher article1
{

    echo "<img class='card-img-top' src='" . $article1["picture"] . "'alt=''/>";
    echo "<h1 class='card-title text-center text-white'>" . $article1["name"] . "</h1>";
    echo "<h2 class='card-text text-center text-white'>" . $article1["price"] . "</h2>";

}

function displayItem2()                     // fonction pour afficher article2
{

    echo "<img class='card-img-top' src='" . $article2["picture"] . "'alt=''/>";
    echo "<h1 class='card-title text-center text-white'>" . $article2["name"] . "</h1>";
    echo "<h2 class='card-text text-center text-white'>" . $article2["price"] . "</h2>";

}

function displayItem3()                     // fonction pour afficher article3
{

    echo "<img class='card-img-top' src='" . $article3["picture"] . "' alt='' />";
    echo "<h1 class='card-title text-center text-white'>" . $article3["name"] . "</h1>";
    echo "<h2 class='card-text text-center text-white'>" . $article3["price"] . "</h2>";

}

function displayItem($name, $price, $picture, $quantity, $key, $messageErrorPrice) // functions pour afficher tout les items
{
    echo "<img class='card-img-top' src='" . $picture . "' alt=''/>";
    echo "<h1 class='text-center text-white'>" . $name . "</h1>";
    if (is_numeric($quantity)) {
        echo "<h2 class='text-center text-white'>" . $price * (int)$quantity . "$</h2>";
    }

    echo "<label for='quantity'>Quantity:</label>";
    echo "<input class='d-inline'  type='' id='quantity' name='articles[$key]' value='$quantity'  min='1' style='width:45px'>";
    echo "<p class='d-inline text-black'>" . $messageErrorPrice . "</p>";

    echo "<input class='btn btn-danger' type='submit' value='Supprimer' name='delete[$key]'>";
}

function displayItemCheckedBox($name, $price, $picture, $key) // functions pour afficher tout les items
{

    echo "<img class='card-img-top' src='" . $picture . "' alt=''/>";
    echo "<h1 class='text-center text-white'>" . $name . "</h1>";
    echo "<h2 class='text-center text-white'>" . $price . "$</h2>";
    echo "<input class='d-flex-inline' type='checkbox' class=' form-check-input' name='articles[$key]'>";


}


function basketTotal($liste_products) //fonction cout total du panier
{

    $total = 0;
    foreach ($liste_products as $name => $price) {

        $total += $price;

    }
    return $total;
}




