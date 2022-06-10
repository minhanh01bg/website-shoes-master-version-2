<?php
// headers_list
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    include ($_SERVER["DOCUMENT_ROOT"]."/php/config/Database.php");
    include ($_SERVER["DOCUMENT_ROOT"]."/php/models/post_product.php");
    // instantiate DB & connect
    $database = new Database();
    $db = $database->connect();
    // instantiate blog post object 
    $post  = new post_product($db);
    // Get id
    $post->id = isset($_GET['id']) ? $_GET['id']:die();
    // Get post data
    $post->read_single();

    // Create array
    $post_arr = array(
        'id' => $post->id,
        'name' => $post->name,
        'details' => $post->details,
        'price' => $post->price,
        'image' => $post->image,
        'object' => $post->ob,        
        'category' => $post->category,
        'brand' => $post->brand,
        'color' => $post->color
    );
    // Make JSON
    print_r(json_encode($post_arr));
