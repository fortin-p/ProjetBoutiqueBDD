<?php
$messageError = false;
$messageErrorPrice = "";
$messageErrorName = "";
$messageErrorPicture = "";

if (empty($_POST)) {
    $_POST["name"] = "";
    $_POST["price"] = "";
    $_POST["picture"] = "";

} else {
    $name = htmlspecialchars($_POST["name"]);
    $price = htmlspecialchars($_POST["price"]);
    $picture = htmlspecialchars($_POST["picture"]);

    if (empty($_POST["price"]) || $_POST["price"] < 0) {
        $messageErrorPrice = "Le prix doit être supérieur à 0!";
        $messageError = true;
    }
    if (empty($_POST["name"])) {

        $messageErrorName = "Veuillez mettre un nom!";
        $messageError = true;
    }
    if (empty($_POST["picture"])) {

        $messageErrorPicture = "Veuillez mettre une photo!";
        $messageError = true;
    }
    if (!$messageError) {

        header("Location: displayItem.php?name=" . $name . "&price=" . $price . "&picture=" . $picture . "");

    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
<?php
require "header.php"
?>
<h1 class="text-center">Ajout d'un article</h1>
<div class="container d-flex p-2 justify-content-around " style='background: linear-gradient(25deg,#00b4d8,#ade8f4,#56cfe1);width: 700px;' >
    <form action="#" method="POST">
        <div class="form-group">
            <label for="name">Name Products</label>
            <input type="text" id="name" value="<? echo $_POST["name"] ?>" placeholder="name" name="name">
            <p class="d-inline text-danger"><? echo $messageErrorName ?></p>
        </div>
        <div class="form-group">
            <label for="price">Price Products</label>
            <input type="number" id="price" value="<? echo $_POST["price"] ?>" placeholder="price" name="price">
            <p class="d-inline text-danger"><? echo $messageErrorPrice ?></p>
        </div>
        <div class="form-group">
            <label>Path picture</label>
            <input type="text" value="<? echo $_POST["picture"] ?>" placeholder="Path" name="picture">
            <p class="d-inline text-danger"><? echo $messageErrorPicture ?></p>
        </div>

        <button  type="submit" class="d-flex justify-content-end btn btn-primary">Submit</button>

    </form>
</div>
<script src="bootstrap/jquery-3.5.1.min.js"></script>
<script src="bootstrap/bootstrap.bundle.min.js"></script>

</body>
</html>

