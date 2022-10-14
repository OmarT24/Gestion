
<html>
<body>
    <table>
<tr>
    <th>ID</th>
    <th>Nom Du Produit</th>
    <th>Prix</th>
  </tr>

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

$sql = "SELECT * FROM produit";
$result = mysqli_query($conn, $sql);

  
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      
        echo "<tr><td>". $row["id"]. " </td><td>  " . $row["nom"]. " </td><td>" . $row["prix"]. "</td></tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</table>
  

</body>
</html>