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
$post->user_id = $_GET["user_id"];
$result = $post->delete_all();
// Get row count

    echo json_encode(
        array('true' => 'true')
    );
