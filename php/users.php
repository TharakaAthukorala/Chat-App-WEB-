<?php

session_start();
include_once "config.php";
$out_id = $_SESSION['unique_id'];
$sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$out_id}"); // WHERE NOT unique_id = {$out_id}
$output = "";

if(mysqli_num_rows($sql) == 1){
    $output .= "No users available in chat";
}
elseif(mysqli_num_rows($sql) > 0){
    include "data.php";
} 
echo $output;

?>