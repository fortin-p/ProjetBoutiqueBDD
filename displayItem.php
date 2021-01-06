
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    echo "<div class='card p-2 ml-5 ' style='background: linear-gradient(0deg,#6930c3,#222,#1b1b1b); width: 300px;'>";
    echo "<img class='card-img-top' src='" . htmlspecialchars($_GET["picture"]) . "' alt=''/>";
    echo "<h1 class='text-center text-white'>" . htmlspecialchars($_GET["name"]) . "</h1>";
    echo "<h2 class='text-center text-white'>" . (int)$_GET["price"] . "$</h2>";
    echo "</div>";

?>


<script src="bootstrap/jquery-3.5.1.min.js"></script>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
