<html>

<head>
    <title>practice</title>
    <style>
        form {
            border: 1px solid black;
            width: 30%;
        }
    </style>
</head>

<body>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    


   
    $sql = "SELECT * FROM login_form WHERE id = 2";
   $result = mysqli_query($conn, $sql);
    
   
   
    while ($row = mysqli_fetch_assoc($result)) {
    
            echo "id: " . $row["id"] . " - Name: " . $row["name"] . " " . $row["email"] . "<br>";
  
         }



   

    ?>
    <form action="signup.php" method="get">
        Name: <input type="text" name="name" required><br>
        E-mail: <input type="text" name="Email" required><br>
        <input type="submit" name="submit" value="Button">
    </form>



</body>

</html>