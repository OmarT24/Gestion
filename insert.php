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

$sql = "INSERT INTO produit(id, nom, prix) VALUES (NULL, '".$_POST["name"]."',".$_POST["price"].")";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>