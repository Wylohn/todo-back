<?php

// include('connexion.php');
// //All Posts
//     $query = "SELECT * FROM post";
//     $response = array();
//     $result = mysqli_query($db, $query);
//     while($row = mysqli_fetch_array($result))
//     {
//       $response[] = $row;
//     }
//     echo json_encode($response, JSON_PRETTY_PRINT);


require './connexion.php';

$getpost = "SELECT * FROM `post`";
$postList = [];

try {
    $query = mysqli_query($db, $getpost);

    while($row = mysqli_fetch_array($query)) {
        $postList[] = $row;
    }

    var_dump($postList);
    echo json_encode($postList);
} catch(\Exception $e) {
    die('MySQL Error : ' . $e->getMessage());
}
?>
