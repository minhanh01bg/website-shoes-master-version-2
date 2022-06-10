<?php
// headers_list
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
include $_SERVER["DOCUMENT_ROOT"] . "/php/config/Database.php";
include $_SERVER["DOCUMENT_ROOT"] . "/php/models/post_product.php";
// instantiate DB & connect
$database = new Database();
$db = $database->connect();
// instantiate blog post object
$post = new post_product($db);

$post->id = $_POST['id'];
$post->name = $_POST['name'];
$post->details = $_POST['details'];
$post->price = $_POST['price'];
$post->ob = $_POST['object'];
$post->category = $_POST['category'];
$post->brand = $_POST['brand'];
$post->color = $_POST['color'];

$query = "INSERT INTO `products` (ID, `NAME`, details, price, `object`, category, brand,`color`) 
VALUES ($post->id, '$post->name', '$post->details', $post->price, '$post->ob','$post->category','$post->brand','$post->color');";

$stmt = $db->prepare($query);
$stmt->execute();
$yn = array(
    'true' => "true",
);
echo json_encode($yn);
// }

// Make JSON
// print_r(json_encode($post_arr));
