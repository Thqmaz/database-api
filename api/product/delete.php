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
$select = "WHERE id=" . $_GET['id'];
$query = "DELETE FROM `product` $select";
if ($dbConn->query($query)) {
    http_response_code(200);
    echo json_encode(
        array("message" => "Product verwijderd")
    );
}