<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="welcome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <title>Welcome</title>
</head>
<body>
<video autoplay muted loop id="myVideo">
    <source src="images/tr.mp4" type="video/mp4">
  </video>
    <nav class="bg-aqua">
        <div class="main">
            <div class="one">
                <a href="#">
                    <div class="hamburger"></div>
                    <div class="hamburger"></div>
                    <div class="hamburger"></div>
                </a>
            </div>
            <div class="two">
                <a href="#" class="navbar-brand text-white"><strong>Lotus</strong></a>
            </div>
            <div class="navbarcontent">
              <div class="three">
                <a href="#" style="font-size: 20px;" class="navbar">Welcome, <?php echo $_SESSION['username']; ?>!</a>
              </div>
              <div class="three">
                <a href="/demo/login.php" class="navbar">Log Out</a>
              </div>
              <div class="lotus_icon">
                  <a href="#"><img src="images/lotusfinal.png" class="lotus" alt=""></a>
              </div>
            </div>
        </div>

    </nav>
    <!-- <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2> -->
</body>
</html>
