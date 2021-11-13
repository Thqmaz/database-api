<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require './api/config/Database.php';

$where = "";
if (isset($_GET['id'])) {
    $where = "WHERE id=" . $_GET['id'];
}
$query = "SELECT * FROM `product` $where";
$result = $dbConn->query($query);
if ($result->num_rows > 0) {
    $products_arr = array();
    while ($row = $result->fetch_assoc()) {
        extract($row);
        $product_item = array(
            "id" => $id,
            "naam" => $name,
            "beschrijving" => html_entity_decode($description),
            "prijs" => $price
        );
        array_push($products_arr, $product_item);
    }
    http_response_code(200);
    var_dump($products_arr);
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "Geen producten gevonden")
    );
}