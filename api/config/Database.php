<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "api";

$dbConn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if(!$dbConn) {
    die("error");
}