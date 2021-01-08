<?php
function connect(){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=my_base;charset=utf8', 'pef', 'PefCampus38');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    return $bdd;

}



function selectAll(){
    $bdd = connect();
    $reponse = $bdd->query('SELECT * from products');
    return $reponse;

}
function selectAllShoes(){
    $bdd = connect();
    $reponse = $bdd->query('SELECT * from chaussures');
    return $reponse;

}
function selectAllClothes(){
    $bdd = connect();
    $reponse = $bdd->query('SELECT * from vetement');
    return $reponse;

}
function selectAllCustomers(){
    $bdd = connect();
    $reponse = $bdd->query('SELECT * from customers');
    return $reponse;

}


function productNoStock(){
    $bdd = connect();
    $reponse = $bdd->query('SELECT * from products Where quantity=0');
    return $reponse;

}

function orderLess10()
{
    $bdd = connect();
    $reponse = $bdd->query('SELECT * FROM orders WHERE date BETWEEN now() AND DATE_SUB(CURDATE(), INTERVAL -10 DAY)');
    return $reponse;

}
function montantTotalToday(){
    $bdd = connect();
    $reponse = $bdd->query('SELECT SUM(products.price * order_product.quantity) AS total FROM order_product INNER JOIN orders ON orders.id= order_product.order_id INNER JOIN products ON products.id = order_product.product_id WHERE date(orders.date) = CURDATE()');
    return $reponse;
}

function listProductId1()
{
    $bdd = connect();
    $reponse = $bdd->query('SELECT name, order_product.quantity, price FROM products JOIN order_product ON products.id = order_product.product_id WHERE order_id=1');
    return $reponse;

}
function between100And550(){
    $bdd = connect();
    $reponse = $bdd->query('
        SELECT orders.number, SUM(products.price * order_product.quantity) AS total
        from orders
        INNER JOIN order_product  ON order_product.order_id = orders.id
        INNER JOIN products ON products.id = order_product.product_id
        GROUP BY orders.number
        HAVING SUM(products.price * order_product.quantity) between 100 AND 550
    ');
    return $reponse;


}

function orderToday(){
    $bdd = connect();
    $reponse = $bdd->query('SELECT * FROM orders WHERE date(date) = CURDATE() order by number DESC');
    return $reponse;
}

function listNumberTotal(){
    $bdd = connect();
    $reponse = $bdd->query('SELECT orders.number, SUM(products.price * order_product.quantity) AS total from orders INNER JOIN order_product ON order_product.order_id = orders.id INNER JOIN products ON products.id = order_product.product_id GROUP BY orders.number');
    return $reponse;
}


function numberOfOrder(){
    $bdd = connect();
    $reponse = $bdd->query('SELECT customers.first_name,customers.last_name,COUNT(Customer_id) AS Numberofcommande from orders RIGHT  JOIN customers ON  customers.id = orders.customer_id GROUP BY first_name,last_name');
    return $reponse;


}

function setQuantity(){
    $bdd = connect();
    $nb_modifs = $bdd->exec('UPDATE products SET quantity = 100, WHERE id = 1;');
    return $nb_modifs;
}


function createOrder(){
    $bdd = connect();
    $req = $bdd->prepare('INSERT INTO `order_product` (order_id, product_id, quantity) VALUES (:order_id,:product_id ,:quantity), (:order_id,:product_id ,:quantity),(:order_id,:product_id ,:quantity);');
    return $req;
}




