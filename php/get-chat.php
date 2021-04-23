<?php

    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $out_id = mysqli_real_escape_string($conn, $_POST['out_id']);
        $in_id = mysqli_real_escape_string($conn, $_POST['in_id']);
        // $message = mysqli_real_escape_string($conn, $_POST['message']);
        $output = "";

        $sql = "SELECT * FROM messages LEFT JOIN users ON users.unique_id = messages.in_msg_id
                WHERE (out_msg_id = {$out_id} AND in_msg_id = {$in_id})
                OR (out_msg_id = {$in_id} AND in_msg_id = {$out_id}) ORDER BY msg_id";

        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['out_msg_id'] === $out_id){
                    $output .= '<div class="chat outgoing">
                                    <div class="details">
                                        <p>'.$row['msg'].'</p>
                                    </div>
                                </div>';
                }
                else{  // message receiver
                    $output .= '<div class="chat incoming">
                                    <img src="img/profiles/'.$row['img'].'" alt="">
                                    <div class="details">
                                        <p>'.$row['msg'].'</p>
                                    </div>
                                </div>';
                }
            }
            echo $output;
        }
    }
    else{
        header("../login.php");
    }

?>