<?php
// headers_list
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
include($_SERVER["DOCUMENT_ROOT"] . "/php/config/Database.php");
include($_SERVER["DOCUMENT_ROOT"] . "/php/models/post_order.php");
// instantiate DB & connect
$database = new Database();
$db = $database->connect();
// instantiate blog post object 
$post  = new post_order($db);
$result = $post->read();
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
            'name' => $name,
            'number' => $number,
            'email' => $email,
            'method' => $method,
            'address' => $address,
            'total_products' => $total_products,
            'total_price' => $total_price,
            'placed_on' => $placed_on,
            'payment_status' => $payment_status,
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
?>