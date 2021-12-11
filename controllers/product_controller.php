<?php
//connect to post class
require("../classes/product_post.php");

// Inserting a new post
function addProduct($product_name,$image_url,$price,$product_des,$quantity){
    // Create new post object
    $post = new Post;

    // Run query
    $runQuery = $post->addproduct($product_name,$image_url,$price,$product_des,$quantity);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}


function allProducts(){
    // Create new post object
    $post = new Post;

    // Run query
    $runQuery = $post->getallproducts();

    if($runQuery){
        $posts = array();
        while($record = $post->db_fetch()){
            $posts[] = $record;
        }
        return $posts;
    }else{
        return false;
    }
}



function productInfo($product_name){
  
    // Create new post object
    $post = new Post;
    // Run query
    $runQuery = $post->productinfo($product_name);

    if($runQuery){

        $posts = $post->db_fetch();
        if(!empty($posts)){
            return $posts;
        }else{
            return [];
        }
        
    }else{
        return false;
    }
}












function updateProductInfo($product_name,$price,$quantity){
    // Create new post object
    
    $post = new Post;

    // Run query
    $runQuery = $post->updateproductInfo($product_name,$price,$quantity);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

?>