<?php
    include("index.php");
    $sql = "SELECT * FROM register";
    $result = mysqli_query($conn, $sql);

    if(msqli_num_row($result)> 0){
        while($row = mysqli_fetch_assoc($result)){
            echo 'name:' .$row['name']. "br";

            echo 'email:' .$row['email'];
        }
    }