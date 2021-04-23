<?php

    $conn = mysqli_connect("localhost", "root", "", "chat_app");
    if(!$conn){
        echo "Database Connected" . mysqli_connect_error();
    }

?>