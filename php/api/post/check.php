<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
include($_SERVER["DOCUMENT_ROOT"] . "/php/config/Database.php");
include($_SERVER["DOCUMENT_ROOT"] . "/php/models/post_acc.php");
// instantiate DB & connect
$database = new Database();
$db = $database->connect();
// instantiate blog post object 
$post  = new post_acc($db);
$post->id = $_GET['id'];

$post->read_single();
$item = array(
    "id" => $post->id,
    "email" => $post->email,
    "password"=>$post->password,
    "name" => $post->name,
    "phone" => $post->phone,
    "address" => $post->address
);
echo json_encode($item);
