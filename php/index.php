<!-- //php code to connect to mysql database -->
<?php
$localhost = "localhost:3000";
$username = "root";
$password = "";
$dbName = "Regestration";

// Create connection
$conn = mysqli_connect($localhost, $username, $password, $dbName);

// Check connection
if(mysqli_connecterrno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//insert data into mysql database
if(isset($_POST['SUBMIT'])){
    $name = S_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO register(name, email, password) VALUES ('$name', '$email',' $password')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert(Thank you .$name. for joining us!)!</script>";

    }
}
?>