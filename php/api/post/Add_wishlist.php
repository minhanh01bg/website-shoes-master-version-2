<?php
// headers_list
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
include $_SERVER["DOCUMENT_ROOT"] . "/php/config/Database.php";
include $_SERVER["DOCUMENT_ROOT"] . "/php/models/post_wishlist.php";
// instantiate DB & connect
$database = new Database();
$db = $database->connect();
// instantiate blog post object
$post = new post_wishlist($db);

$post->name = $_GET['name'];
$post->pid = $_GET['pid'];
$post->price = $_GET['price'];
$post->user_id = $_GET['user_id'];
$post->image= $_GET['image'];
$query = "INSERT INTO `wishlist` (`NAME`, price, `pid`, `user_id`,`image`) 
VALUES ('$post->name', $post->price, '$post->pid','$post->user_id','$post->image')";

$stmt = $db->prepare($query);
$stmt->execute();
$yn = array(
    'true' => "true",
);
echo json_encode($yn);
// }

// Make JSON
// print_r(json_encode($post_arr));
