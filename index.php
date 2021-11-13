<?php
require 'api.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Create product</h2>
    <form action="api.php" method="get">
        <input type="hidden" name="action" value="createProduct">
        Naam<input type="text" name="name"><br>
        Beschrijving<input type="text" name="desc"><br>
        Prijs<input type="text" name="price"><br>
        <input type="submit" value="Bevestig">
    </form>
    <br>
    <br>
    <br>
    <h2>Delete product</h2>
    <form action="api.php" method="get">
        <input type="hidden" name="action" value="deleteProduct">
        ID<input type="text" name="id"><br>
        <input type="submit" value="Bevestig">
    </form>
    <br>
    <br>
    <br>
    <h2>Update product</h2>
    <form action="api.php" method="get">
        <input type="hidden" name="action" value="updateProduct">
        ID<input type="text" name="id"><br>
        Naam<input type="text" name="name"><br>
        Beschrijving<input type="text" name="desc"><br>
        Prijs<input type="text" name="price"><br>
        <input type="submit" value="Bevestig">
    </form>
    <br>
    <br>
    <br>
</body>

</html>