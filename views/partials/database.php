<?php

$host = "localhost";
$username = "dckap";
$password = "Dckap2023Ecommerce";
$dbname = "registration";
$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_errno){
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;

