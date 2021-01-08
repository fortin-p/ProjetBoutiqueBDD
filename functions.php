<?php
include_once "article.php";


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

function displayItemCheckedBox($name, $price, $picture) // functions pour afficher tout les items
{

    echo "<img class='card-img-top' src='" . $picture . "' alt=''/>";
    echo "<h1 class='text-center text-white'>" . $name . "</h1>";
    echo "<h2 class='text-center text-white'>" . $price . "$</h2>";
    echo "<input class='d-flex-inline' type='checkbox' class=' form-check-input' name='articles[]'>";


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
        <div class="card d-flex">
    <p class="text-center"> Nom du produit : <?php echo $article->name ;?></p>
    <p> Description du produit : <?php echo $article->description;?></p>
    <p> Prix du produit :<?php echo $article->price;?><p>
    <p> Image: <?php echo $article->image;?><p>
    <p> Poids: <?php echo $article->weight;?><p>
    <p> Quantité: <?php echo $article->quantity;?><p>
    <p> Disponible: <?php echo $article->available;?><p>
    <p> Id: <?php echo $article->id;?><p>
        </div>

    <?php
echo $article->pointure;
    echo $article->marque;



}
function displayCat(Catalogue $catalogue)
{
    foreach ($catalogue -> articles as $article){
        displayArticle($article);

    }



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


