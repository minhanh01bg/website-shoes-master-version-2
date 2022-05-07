<?php
// headers_list
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
include $_SERVER["DOCUMENT_ROOT"] . "/php/config/Database.php";
include $_SERVER["DOCUMENT_ROOT"] . "/php/models/post_cart.php";
// instantiate DB & connect
$database = new Database();
$db = $database->connect();
// instantiate blog post object
$post = new post_cart($db);

$post->user_id = $_GET['user_id'];
$post->pid = $_GET['pid'];
$post->name=$_GET['name'];
$post->price = $_GET['price'];
$post->ob = $_GET['object'];
$post->image = $_GET['image'];
$post->category = $_GET['category'];
$query = "INSERT INTO `cart` (`user_id`,pid,`NAME`, `image`, price, `object`, category) 
VALUES ('$post->user_id', '$post->pid','$post->name','$post->image', $post->price, '$post->ob','$post->category')";

$stmt = $db->prepare($query);
$stmt->execute();
$yn = array(
    'true' => "true",
);
echo json_encode($yn);
// }

// Make JSON
// print_r(json_encode($post_arr));
