<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);



if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $email = $_GET['Email'];
    $query = "INSERT INTO login_form (name, email) VALUES  ('$name', '$email')";
    $result = mysqli_query($conn, $query);
    if ($result) {
       //echo "record added successfully";
        header('Location:  index.php');
    }

}