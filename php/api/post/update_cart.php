<?php
// headers_list
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
include($_SERVER["DOCUMENT_ROOT"] . "/php/config/Database.php");
include($_SERVER["DOCUMENT_ROOT"] . "/php/models/post_cart.php");
// instantiate DB & connect
$database = new Database();
$db = $database->connect();
// instantiate blog post object 
$post  = new post_cart($db);
$post->id = $_GET["id"];
$post->size = $_GET["size"];
$post->ob = $_GET["object"];
$post->price = $_GET["price"];
$post->quantity = $_GET["quantity"];
$result = $post->update();
// Get row count

echo json_encode(
    array('true' => 'true')
);
