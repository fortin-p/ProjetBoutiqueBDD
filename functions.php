<?php
include_once "article.php";
require_once 'class_chaussure.php';


function basketTotal(Basket $basket) //fonction cout total du panier
{

    $total = 0;
    foreach ($basket->basket as $article) {

        $total += $article->price * $article->getQuantityBasket();

    }
    return $total;
}

function displayArticle(Article $article){
    ?>
    <form action="basket1.php" method="post">
<div class="container d-flex flex-wrap">

    <div class="  card p-2 ml-5  " style="width: 300px">
        <p > Nom du produit : <?php echo $article->name ;?></p>
        <p> Description du produit : <?php echo $article->description;?></p>
        <p> Prix du produit :<?php echo $article->price;?><p>
            <?php    echo "<img class='card-img-top' src='". $article->image . "' alt=''/>";?>
        <p> Poids: <?php echo $article->weight;?><p>
        <p> Quantité: <?php echo $article->getQuantity();?><p>
        <p> Disponible: <?php echo $article->available;?><p>
        <p> Id: <?php echo $article->id;?><p>
            <button class='' type='submit' class='' name='addarticles[]' value="<?= $article->id ?>">Add to cart </button>
            <?php

            if ($article instanceof Shoe){
            ?>
        <p> Pointure: <?php  echo $article->getpointure();?></p>
        <p> Marque : <?php echo $article->getMarque();?></p>
    <?php

    }
    ?>
    </div>

    </div>
</form>

    <?php

}

function displayCat(Catalogue $catalogue)
{
    foreach ($catalogue->getArticles() as $article){
        displayArticle($article);


    }


}

function displayShoe(Catalogue $catalogue){
    foreach ($catalogue->getArticlesShoes() as $shoe){
        displayArticle($shoe);

    }



}
function displayFruits(Catalogue $catalogue){
    foreach ($catalogue->getArticlesfruits() as $fruit){
        displayArticle($fruit);

    }



}
function displayBask(Basket $basket)
{
    foreach ($basket->basket as $newBasket){
        displayBasket($newBasket);

    }


}
function displayBasket(Article $article) // functions pour afficher tout les items
{
    ?>
    <div class="container card d-flex"style='background: linear-gradient(0deg,#ffba08,#222,#e85d04); width: 300px;'><?php
    echo "<img class='card-img-top' src='" . $article->image . "' alt=''/>";
    echo "<h1 class='text-center text-white'>" . $article->name . "</h1>";
    if (is_numeric($article->getQuantity())) {
        echo "<h2 class='text-center text-white'>" . $article->price * $article->getQuantityBasket() . "$</h2>";
    }
    echo "<h2 class='text-center text-white'>" . $article->description . "</h2>";
    echo "<label for='quantity'>Quantity:</label>";
    echo "<input class='d-inline'  type='number' id='quantity' name='setQuantityArticle[".$article->id."]' value='".$article->getQuantityBasket()."'   min='1' style='width:45px'>"; //value=$_SESSION['panier'][$article->id]
    echo "<input class='btn btn-danger' type='submit' value='Supprimer' name='delete[".$article->id."]' value=''>";?>
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
    foreach ($listcustomer->customers as $customer){
        displayCustomer($customer);

    }


}




