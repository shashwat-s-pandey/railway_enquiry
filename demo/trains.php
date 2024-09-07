<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "department";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT empid, name, role FROM dept1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<table><tr><th>empID</th><th>Name</th><th>Role</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["empid"]. "</td><td>" . $row["name"]. "</td><td>" . $row["role"]. "</td></tr>";
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