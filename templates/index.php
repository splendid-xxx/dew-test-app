<?php

$hostname = "localhost";
$username = "root";
$password = "yunu6maizaeC";
$db = "devops";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

?>


<?php

$query = mysqli_query($dbconnect, "SELECT * FROM Test where id=2")
   or die (mysqli_error($dbconnect));
$row = mysqli_fetch_array($query);
echo $row['message']
?>



