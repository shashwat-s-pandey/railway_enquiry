<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($zone)) {
  $zone = mysqli_real_escape_string($conn, $zone); // Sanitize the input
  echo "Zone: " . htmlspecialchars($zone);
  
  // Prepare and execute SQL query
  $sql = "SELECT division, numberofstations FROM rail_info WHERE zone='$zone'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      echo "<table style='text-align: center; align-items: center;'><tr><th>Division</th><th>Number of Stations</th>";
      while($row = mysqli_fetch_assoc($result)) {
          echo "<tr><td>" . $row["division"]. "</td><td>" . $row["numberofstations"]. "</td><td>";
      }
      echo "</table>"; // Close the table
  } else {
      echo "0 results";
  }
} else {
  echo "Zone variable is not set.";
}

// Close connection
mysqli_close($conn);

?>