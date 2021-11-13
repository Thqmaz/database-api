<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require './api/config/Database.php';

if (!isset($_GET['id'])) {
    http_response_code(404);
    echo json_encode(
        array("message" => "Geen id meegegeven")
    );
    exit;
}
$id = $_GET['id'];
$qry = "";
if (!(isset($_GET['name']) || isset($_GET['desc']) || isset($_GET['price']))) {
    http_response_code(404);
    echo json_encode(
        array("message" => "Geen gegevens meegegeven om te updaten")
    );
    exit;
}
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $qry .= "SET `name`='$name'";
    if (isset($_GET['desc'])) {
        $desc = $_GET['desc'];
        $qry .= ",`description`='$desc'";
        if (isset($_GET['price'])) {
            $price = $_GET['price'];
            $qry .= ",`price`='$price'";
        }
    }
    if (isset($_GET['price']) && !strpos($qry, "desc")) {
        $price = $_GET['price'];
        $qry .= ",`price`='$price'";
    }
}
if (isset($_GET['desc']) && !strpos($qry, "name")) {
    $desc = $_GET['desc'];
    $qry .= "SET `description`='$desc'";
    if (isset($_GET['price'])) {
        $price = $_GET['price'];
        $qry .= ",`price`='$price'";
    }
}
if (isset($_GET['price']) && !strpos($qry, "name")) {
    $price = $_GET['price'];
    $qry .= "SET `price`='$price'";
}

$query = "UPDATE `product` $qry WHERE `id`=$id";
// die($query);
if ($dbConn->query($query)) {
    http_response_code(200);
    echo json_encode(
        array("message" => "Product geupdate")
    );
}
