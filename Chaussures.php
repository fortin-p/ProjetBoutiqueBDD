<?php
require_once "article.php";
require_once "functions.php";
require_once "database.php";
require_once 'class_Catalogue.php';
require_once 'class_chaussure.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>Boutique</title>
    <meta charset="utf-8"/>

</head>
<body>
<?php
require "header.php";
$shoe = new Catalogue();
$shoe->getArticlesShoes();
displayShoe($shoe);

?>
<script src="bootstrap/jquery-3.5.1.min.js"></script>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>


</html>