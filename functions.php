<?php
include_once "article.php";
require_once 'class_chaussure.php';


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

function displayItem($name, $price, $image,$description) // functions pour afficher tout les items
{
    echo "<img class='card-img-top' src='" . $image . "' alt=''/>";
    echo "<h1 class='text-center text-white'>" . $name . "</h1>";

    echo "<h2 class='text-center text-white'>" . $price . "$</h2>";

    echo "<h2 class='text-center text-white'>" . $description . "</h2>";
    echo "<label for='quantity'>Quantity:</label>";




}

function displayItemCheckedBox($name, $price, $image,$description,$quantity,$key) // functions pour afficher tout les items
{

    echo "<img class='card-img-top' src='" . $image . "' alt=''/>";
    echo "<h1 class='text-center text-white'>" . $name . "</h1>";
    echo "<h2 class='text-center text-white'>" . $price . "$</h2>";
    echo "<h2 class='text-center text-white'>" . $description . "</h2>";
    echo "<input class='d-inline'  type='' id='quantity' name='articles[$key]' value='$quantity'  min='1' style='width:45px'>";



}


function basketTotal($liste_products) //fonction cout total du panier
{

    $total = 0;
    foreach ($liste_products as $name => $price) {

        $total += $price;

    }
    return $total;
}

function displayArticle(Article $article){
    ?>
    <div class="card d-flex flex-wrap">
        <p class="text-center"> Nom du produit : <?php echo $article->name ;?></p>
        <p> Description du produit : <?php echo $article->description;?></p>
        <p> Prix du produit :<?php echo $article->price;?><p>
            <?php    echo "<img class='card-img-top' src='". $article->image . "' alt=''/>";?>
        <p> Poids: <?php echo $article->weight;?><p>
        <p> Quantité: <?php echo $article->quantity;?><p>
        <p> Disponible: <?php echo $article->available;?><p>
        <p> Id: <?php echo $article->id;?><p>
            <input class='d-flex-inline' type='checkbox' class=' form-check-input' name='addarticles[]' value="<?= $article->id ?>">
    </div>

    <?php

}
function displayArticleBasket(Article $article){
   ?>
    <div class="card d-flex flex-wrap"><?php
      echo  "<p class='text-center'> Nom du produit : ". $article->name. "</p>";
       echo "<p> Description du produit : " . $article->description."</p>";
        echo "<p> Prix du produit :" . $article->price."<p>";
               echo "<img class='card-img-top' src='". $article->image . "' alt=''/>";
            echo "<input class='d-inline'  type='' id='quantity' name='articles[]' value=''  min='1' style='width:45px'>"; ?>
    </div>

    <?php

}
function displayArticleShoes(Article $article){
    ?>
    <div class="card d-flex flex-wrap">
        <p class="text-center"> Nom du produit : <?php echo $article->name ;?></p>
        <p> Description du produit : <?php echo $article->description;?></p>
        <p> Prix du produit :<?php echo $article->price;?><p>
            <?php    echo "<img class='card-img-top' src='". $article->image . "' alt=''/>";?>
        <p> Poids: <?php echo $article->weight;?><p>
        <p> Quantité: <?php echo $article->quantity;?><p>
        <p> Disponible: <?php echo $article->available;?><p>
        <p> Pointure: <?php  echo $article->pointure;?></p>
        <p> Marque : <?php echo $article->marque;?></p>
        <p> Id: <?php echo $article->id;?><p>
            <input class='d-flex-inline' type='checkbox' class=' form-check-input' name='addarticles[]' value="<?= $article->id ?>">
    </div>

    <?php

}
function displayCat(Catalogue $catalogue)
{
    foreach ($catalogue -> articles as $article){
        displayArticle($article);


    }




}
function displayBask(Basket $basket)
{
    foreach ($basket -> basket as $basket){
        displayBasket($basket);

    }




}
function displayBasket(Article $article) // functions pour afficher tout les items
{
    ?>
    <div class="card d-flex"style='background: linear-gradient(0deg,#ffba08,#222,#e85d04); width: 300px;'><?php
    echo "<img class='card-img-top' src='" . $article->image . "' alt=''/>";
    echo "<h1 class='text-center text-white'>" . $article->name . "</h1>";
    if (is_numeric($article->quantity)) {
        echo "<h2 class='text-center text-white'>" . $article->price  . "$</h2>";
    }
    echo "<h2 class='text-center text-white'>" . $article->description . "</h2>";
    echo "<label for='quantity'>Quantity:</label>";
    // echo "<input class='d-inline'  type='' id='quantity' name='articles[]' value='$basket->quantity'  min='1' style='width:45px'>";
    //  echo "<p class='d-inline text-black'>" . $messageErrorPrice . "</p>";
    echo "<input class='d-inline'  type='' id='quantity' name='articles[]' value='1'  min='1' style='width:45px'>";
    echo "<input class='btn btn-danger' type='submit' value='Supprimer' name='delete[]'>";?>
      </div><?php
}

function displayCustomer(Customer $customer){
    ?>
    <div class="container card d-flex">
        <p><bold>Nom:</bold>  <?php echo $customer->first_name;?></p>
        <p><bold>Prénom:</bold>  <?php  echo $customer->last_name;?></p>
        <p><bold>Adresse:</bold>  <?php echo $customer->adresse;?></p>
        <p><bold>Zip-Code:</bold>  <?php echo $customer->zip_code;?></p>
        <p><bold>Ville:</bold>  <?php echo $customer->city;?></p>
        <p><bold>id:</bold>  <?php  echo $customer->id;?></p>
    </div>
    <?php


}

function displayList(ListCustomer $listcustomer){
    foreach ($listcustomer -> customers as $customer){
        displayCustomer($customer);

    }


}


