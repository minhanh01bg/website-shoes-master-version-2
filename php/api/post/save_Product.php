<?php
// headers_list
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
include($_SERVER["DOCUMENT_ROOT"] . "/php/config/Database.php");
include($_SERVER["DOCUMENT_ROOT"] . "/php/models/post_product.php");
// instantiate DB & connect
$database = new Database();
$db = $database->connect();
// instantiate blog post object 
$post  = new post_product($db);
$post->id = $_GET["id"];
$post->name = $_GET["name"];
$post->details = $_GET["details"];
$post->price = $_GET["price"];
$post->ob = $_GET["object"];
$post->category = $_GET["category"];
$post->brand = $_GET["brand"];
$post->color = $_GET["color"];

$result = $post->update();
// Get row count
    echo json_encode(
        array('true' => 'true')
    );
?>