<?php
include 'api/objects/Access.php';
$access = new Access($dbConn);
if (isset($_GET['action'])) {
    if (!isset($_POST['apikey'])) {
        if (isset($_GET['apikey'])) {
            if (!$access->validateAPIkey($_GET['apikey'])) {
                http_response_code(404);
                echo json_encode(
                    array("message" => "Ongeldige API key opgegeven")
                );
                exit;
            }
        } else {
            http_response_code(404);
            echo json_encode(
                array("message" => "Ongeldige API key opgegeven")
            );
            exit;
        }
    }
    switch ($_GET['action']) {
        case 'createProduct':
            require 'api/product/create.php';
            break;
        case 'deleteProduct':
            require 'api/product/delete.php';
            break;
        case 'readProduct':
            require 'api/product/read.php';
            break;
        case 'searchProduct':
            require 'api/product/search.php';
            break;
        case 'updateProduct':
            require 'api/product/update.php';
            break;
    }
}
