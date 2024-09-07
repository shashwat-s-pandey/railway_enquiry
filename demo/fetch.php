<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rly_divisions";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT division, numberofstations, zone FROM railinfo WHERE zone='SR'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<table><tr><th>Zone</th><th>Number of Divisions</th><th>Number of stations</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["zone"]. "</td><td>" . $row["divisions"]. "</td><td>" . $row["st_nos"]. "</td></tr>";
  }
} else {
  echo "0 results";
}

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>