<?php
// headers_list
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
include($_SERVER["DOCUMENT_ROOT"] . "/php/config/Database.php");
include($_SERVER["DOCUMENT_ROOT"] . "/php/models/post_acc.php");
// instantiate DB & connect
$database = new Database();
$db = $database->connect();
// instantiate blog post object 
$post  = new post_acc($db);
$post->id = $_POST["id"];
$post->name = $_POST["name"];
$post->email = $_POST["email"];
$post->birth = $_POST["birth"];
$post->phone = $_POST["phone"];
$post->address = $_POST["address"];
$result = $post->update();
// Get row count
    echo json_encode(
        array('true' => 'true')
    );
?>