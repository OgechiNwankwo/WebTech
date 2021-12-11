<?php
//connect to post class
require("../classes/users_post.php");

// Inserting a new post
function createUser($fullname,$email,$password){
    // Create new post object
    $post = new Post;

    // Run query
    $runQuery = $post->create($fullname,$email,$password);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}



function getUserInfo($email,$password){
    
    // Create new post object
    $post = new Post;
    // Run query
    $runQuery = $post->getuserinfo($email,$password);

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


function Review($name,$review){
    // Create new post object
    $post = new Post;

    // Run query
    $runQuery = $post->review($name,$review);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

function allReviews(){
    // Create new post object
    $post = new Post;

    // Run query
    $runQuery = $post->getallreviews();

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



// function getemail($email){
//     $_SESSION['email'] = $email;
//     // Create new post object
//     $post = new Post;

//     // Run query
//     $runQuery = $post->getemailPost($email);

//     if($runQuery){

//         $posts = $post->db_fetch();
//         if($posts){
//             return $posts;
//         }else{
//             return [];
//         }
        
//     }else{
//         return false;
//     }
// }

// function updateUserInfo($password,$email){
//     // Create new post object
    
//     $post = new Post;

//     // Run query
//     $runQuery = $post->updateuserinfo($password,$email);

//     if($runQuery){
//         return $runQuery;
//     }else{
//         return false;
//     }
// }

// function deleteUser($fullname){
//     // Create new post object
//     $post = new Post;

//     // Run query
//     $runQuery = $post->deleteuser($fullname);

//     if($runQuery){
//         return $runQuery;
//     }else{
//         return false;
//     }
// }

?>