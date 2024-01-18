<?php
/*
    This php code is used to initiate the MySQL connection.
    Enter your server address, username, password & database name.
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobile_shop";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--Here jQuery is loaded using the CDN. so internet connection is essential to run this. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Available Items</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body onload="hideContent()">
    <h1>Available Mobiles</h1>
<?php
    $brand = $_GET['brand']; 
    // gets value sent over search form
     
    
    $sql = "SELECT * FROM mobile_details where (`brand` LIKE '%".$brand."%')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $id = $row["item_no"];
        $name = $row["name"];
        $img_id = $row["photo_id"];
        $brand = $row["brand"];
        $price = $row["price"];
        $description = $row["description"];
        $availability = $row["availability"];
        
        //Print the search results within a div element.
        echo '<div id="details">';
            echo "<img src=images/".$row["photo_id"].".jpg>";
            echo "<p>".$row["name"]."</p>";
            echo '<p id="brand'.$id.'" class="brand">Brand: '.$row["brand"].'</p>';
            echo '<p id="price'.$id.'" class="price">Price (RS): '.$row["price"].'</p>';
            echo '<p id="desc'.$id.'" class="description">Description: '.$row["description"].'</p>';
            echo '<p id="available'.$id.'" class="availability">Availability: '.$row["availability"].'</p>';
            echo '<button type="button" onclick="showContent('.$id.')">More</button>';
        echo "</div>";
        
    }
} else {
    //If searched brand is not available, print below message.
    echo "<h2>This brand is not available</h2>";
}
 $conn->close(); 
?>
    <script>
        //JS function to hide the contents when load the HTML body.
        function hideContent(){
            $(".brand").hide();
            $(".price").hide();
            $(".description").hide();
            $(".availability").hide();
        };
        
        //JS function to show the contents when click "More" button.
        function showContent(var1) {
            var2 = "#brand"+var1;
            var3 = "#price"+var1;
            var4 = "#desc"+var1;
            var5 = "#available"+var1;
            
            $(var2).show();
            $(var3).show();
            $(var4).show();
            $(var5).show();
        }
        
</script>
    
</body>
</html>