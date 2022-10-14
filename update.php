<html>
<body>
<form action="save.php" method="post">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stock"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM produit where id=".$_REQUEST["id"];
$result = mysqli_query($conn, $sql);

  
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
      
      
        echo " ID :<input type='number' name='id' value='"
       .$row["id"] ."'><br>";
       echo " Nom Du Plat: <input type='text' name='nom' value='"
       .$row["nom"] ."'><br>";
       echo " Prix: <input type='number' name='prix' value='"
       .$row["prix"] ."'><br>";
    
} else {
    echo "0 results";
}

mysqli_close($conn);
?>





<input type="submit">
</form>

</body>
</html>