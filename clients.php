<?php
require_once 'Class_client.php';
require_once 'class_listeClients.php';
require_once "database.php";
require_once "functions.php";
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clients</title>
</head>
<body>
<?php
require "header.php"
?>
<div>
<?php
$list =  new ListCustomer();
displayList($list);

?>
</div>
<script src="bootstrap/jquery-3.5.1.min.js"></script>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>