<?php

 
 

 require_once('Database.php');
 session_start();

 $conn =  mysqli_connect('localhost', 'root');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else
    echo "Connected successfully";

mysqli_select_db($conn,'mobileshop');



 $q = "INSERT INTO cart (`u_id`, `pincode`, `house_no`,`state`,`name`) VALUES (2, ,POST['house_no'],POST['state'], POST['name'])";
 mysqli_query($conn,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="buy.php" method="post">
        <p>Your Name</p>
        <input  type="text"  name="name" id="name" >
        <br>
        <p>House no.</p>
        <input type="text" name="house_no" id="house">
        <br>
        <p>State</p>
        <input type="text" name="state" id="state">
        <br>
        <p>Pincode</p>
        <input type="number" name="pincode" id="pincode">
        <button type="submit">Make your order</button>
    </form>
    <a href="Home.php">Home</a>
</body>
</html>



