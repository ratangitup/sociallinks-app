<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "425ee56a05a8b14c9180620d5f6287c0";
$scopes = "read_orders,write_products";
$redirect_uri = "https://shopifyapp.24livehost.com/token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . "/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();