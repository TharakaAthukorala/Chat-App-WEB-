<?php

    session_start();
    include_once "config.php";
    $out_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    
    $output = "";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$out_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%')");
    if(mysqli_num_rows($sql) > 0){
        // $output .= "User is found";
        include "data.php";
    }
    else{
        $output .= "No user found";
    }
    echo $output;

?>