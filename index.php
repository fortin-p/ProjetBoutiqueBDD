<?php
header('Location: catalogue.php');?>
<?php $user = "Pef"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECO_PEF</title>
</head>
<body>
<p>Hello <?php echo $user; ?>!</p>
<div>
<img src="https://source.unsplash.com/random/300x300" />
</div>

<a href="catalogue.php">Catalogue</a>
<a href="item.php">Item</a>
<a href="basket.php">Panier</a>
    <br>
    <a href="/pef/ProjetBoutique/catalogue.php">Catalogue (live)</a>
</body>
</html>



