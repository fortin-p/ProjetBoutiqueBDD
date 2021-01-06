<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=my_base;charset=utf8', 'pef', 'PefCampus38');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

function selectAll(){
    global $bdd;
    $reponse = $bdd->query('SELECT * from products');
    return $reponse;

}


function productNoStock(){
    global $bdd;
    $reponse = $bdd->query('SELECT * from products Where quantity=0');
    return $reponse;

}

function orderLess10()
{
    global $bdd;
    $reponse = $bdd->query('SELECT * FROM orders WHERE date BETWEEN now() AND DATE_SUB(CURDATE(), INTERVAL -10 DAY)');
    return $reponse;

}
function montantTotalToday(){
    global $bdd;
    $reponse = $bdd->query('SELECT SUM(products.price * order_product.quantity) AS total FROM order_product INNER JOIN orders ON orders.id= order_product.order_id INNER JOIN products ON products.id = order_product.product_id WHERE date(orders.date) = CURDATE()');
    return $reponse;
}

function listProductId1()
{
    global $bdd;
    $reponse = $bdd->query('SELECT name, order_product.quantity, price FROM products JOIN order_product ON products.id = order_product.product_id WHERE order_id=1');
    return $reponse;

}
function between100And550(){
    global $bdd;
    $reponse = $bdd->query('SELECT orders.number, SUM(products.price * order_product.quantity) AS total
from orders
INNER JOIN order_product  ON order_product.order_id = orders.id
INNER JOIN products ON products.id = order_product.product_id
GROUP BY orders.number
HAVING SUM(products.price * order_product.quantity) between 100 AND 550');
    return $reponse;


}

function orderToday(){
    global $bdd;
    $reponse = $bdd->query('SELECT * FROM orders WHERE date(date) = CURDATE() order by number DESC');
    return $reponse;
}

function listNumberTotal(){
    global $bdd;
    $reponse = $bdd->query('SELECT orders.number, SUM(products.price * order_product.quantity) AS total from orders INNER JOIN order_product ON order_product.order_id = orders.id INNER JOIN products ON products.id = order_product.product_id GROUP BY orders.number');
    return $reponse;
}


function numberOfOrder(){
    global $bdd;
    $reponse = $bdd->query('SELECT customers.first_name,customers.last_name,COUNT(Customer_id) AS Numberofcommande from orders RIGHT  JOIN customers ON  customers.id = orders.customer_id GROUP BY first_name,last_name');
    return $reponse;


}

function setQuantity(){
    global $bdd;
    $nb_modifs = $bdd->exec('UPDATE products SET quantity = 100, WHERE id = 1;');
    return $nb_modifs;
}


function createOrder(){
    global $bdd;
    $req = $bdd->prepare('INSERT INTO `order_product` (order_id, product_id, quantity) VALUES (:order_id,:product_id ,:quantity), (:order_id,:product_id ,:quantity),(:order_id,:product_id ,:quantity);');
    return $req;
}




