<?php
    include 'index.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo "Than you .$name. for registering using the email: .$email. and password: .$password.";


        $sql = "INSERT INTO  registor (name, email, password) VALUES ('$name', '$email', '$password')";
        $final = mysqli_query($conn, $sql);
    
        if($final){
            echo "<script>alert('Data Inserted Successfully')</script>";
        }else{
            echo "<script>alert('Data Inserted Failed')</script>";
        }
    }

?>