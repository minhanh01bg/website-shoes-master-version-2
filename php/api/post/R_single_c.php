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
// Get row count
$post->user_id = isset($_GET['id']) ? $_GET['id'] : die();
// Get post data
$post->read_single();

$result = $post->read_single();
// Get row count
$num = $result->rowCount();
// echo $num;
if ($num > 0) {
    $post_arr = array();
    $posts_arr['data'] = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $post_item = array(
            'id' => $id,
            'user_id' => $user_id,
            'pid' => $pid,
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity,
            'image' => $image,
            'size' => $size,
            'object' => $object,
            'category' => $category
        );
        // push to 'data'
        array_push($posts_arr['data'], $post_item);
    }
    echo json_encode($posts_arr);
} else {
    // No posts
    echo json_encode(
        array('message' => 'No posts found')
    );
}
