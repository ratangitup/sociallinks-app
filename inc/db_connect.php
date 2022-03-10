<?php

$host = "localhost";
$database = "shopifyapp";
$username = "shopifyapp";
$password = "0oMqGdNAkJq3Ec";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



?>