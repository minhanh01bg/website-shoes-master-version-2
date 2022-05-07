<?php
// headers_list
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
include $_SERVER["DOCUMENT_ROOT"] . "/php/config/Database.php";
include $_SERVER["DOCUMENT_ROOT"] . "/php/models/post_order.php";

// instantiate DB & connect
$database = new Database();
$db = $database->connect();
// instantiate blog post object
$post = new post_order($db);

$post->user_id = $_GET['user_id'];
$post->name = $_GET['name'];
$post->address = $_GET['address'];
$post->email = $_GET['email'];
$post->number = $_GET['number'];
$post->placed_on = $_GET['place_on'];
$post->total_price = $_GET['total_price'];
$post->total_products = $_GET['total_products'];
$post->method = $_GET['method'];

$query = "INSERT INTO `orders` (`user_id`,`name`, `number`, email, `method`,`address`,total_products,total_price,placed_on) 
VALUES ($post->user_id, '$post->name', '$post->number', 
'$post->email','$post->method','$post->address', '$post->total_products', $post->total_price,'$post->placed_on')";

$stmt = $db->prepare($query);
$stmt->execute();
// $yn = array(
//     'true' => "true",
// );
// echo json_encode($yn);
// }

// Make JSON
// print_r(json_encode($post_arr));
include($_SERVER["DOCUMENT_ROOT"] . "/php/models/post_cart.php");
$post2  = new post_cart($db);
$post2->user_id = $_GET["user_id"];
$result = $post2->delete_all();
// Get row count

echo json_encode(
    array('true' => 'true')
);
