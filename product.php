<!DOCTYPE html>
<html>
<body>

<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$connect = mysqli_connect('localhost', 'root', 'YES', 'iut_clinic');

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}



$sql = "SELECT id, username, email, img FROM users";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        print "<br> id: ". $row["id"]. "<br> - Name: ". $row["username"]. "<br> - Email: " . $row["email"] . "<br>";
      print "<img src=\"".$row["img"]."\">";
     
    }
} else {
    print "0 result";
}



$connect->close();   
        ?> 



</body>
</html>