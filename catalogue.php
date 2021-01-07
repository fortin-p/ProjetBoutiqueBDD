<?php
include "article.php";
include "functions.php";
include "database.php";


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
require "header.php"
?>

<form class=" justify-content-center" action="basket.php" method="POST">
    <div class="d-flex justify-content-around">
        <div class=' card p-2 ml-7 ' style='background: linear-gradient(0deg,#6930c3,#222,#d00000); width: 200px;'>
            <?php

            $reponse = selectAll();   //On affiche tout les produits de notre catalogue
            while ($donnees = $reponse->fetch()){

                displayItemCheckedBox($donnees["price"], $donnees["name"], $donnees["image"]);
            }

            ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>





<script src="bootstrap/jquery-3.5.1.min.js"></script>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>


</html>
