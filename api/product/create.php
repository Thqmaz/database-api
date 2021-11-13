<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require './api/config/Database.php';

if(!isset($_GET['name'])) {
    http_response_code(404);
    echo json_encode(
        array("message" => "Geen naam meegegeven")
    );
    exit;
}
if(!isset($_GET['desc'])) {
    http_response_code(404);
    echo json_encode(
        array("message" => "Geen beschrijving meegegeven")
    );
    exit;
}
if(!isset($_GET['price'])) {
    http_response_code(404);
    echo json_encode(
        array("message" => "Geen prijs meegegeven")
    );
    exit;
}

$name = $_GET['name'];
$desc = $_GET['desc'];
$price = $_GET['price'];

$query = "INSERT INTO `product`(`name`,`description`,`price`) VALUES('$name','$desc','$price')";
if ($dbConn->query($query)) {
    http_response_code(200);
    echo json_encode(
        array("message" => "Product ($name) toegevoegd")
    );
}