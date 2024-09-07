<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotus Trains</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
</head>
<body style="background-color: #eee;">
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
              <div class="three" style="">
                <a href="/demo/index.php" class="navbar">Home</a>
              </div>
              <div class="three">
                <a href="/demo/login.php" class="navbar">Login</a>
              </div>
              <div class="three">
                <a href="/demo/signup.php" class="navbar">Register</a>
              </div>
              <div class="three">
                <a href="/demo/info.php" class="navbar">Info</a>
              </div>
              <div class="four">
                <a href="#" class="navbar">Contact Us</a>
              </div>
              <div class="lotus_icon">
                  <a href="#"><img src="images/lotusfinal.png" class="lotus" alt=""></a>
              </div>
            </div>
        </div>

    </nav>

    <!-- <div>
      <h2>User Registration</h2>
      <form action="insert.php" method="POST">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required><br><br>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required><br><br>

          <input type="submit" value="Submit">
      </form>
    </div> -->

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-5 offset-1 mb-3">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/train.png" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">Search for Trains </h3><br/>
                        <a href="# " class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#exampleModal" >Search Trains</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/route.png" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">Train Route </h3><br/>
                        <a href="# " class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#stationModal">Find Route</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 offset-1">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/pnr.png" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">PNR Enquiry</h3><br/>
                        <a href="# " class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#pnrModal">Fetch Status</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/running-status.png" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">Train Status</h3><br/>
                        <a href="# " class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#trainstatusModal">Track</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Search Trains between stations </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <label>Boarding Station:</label>
                        <input id="boarding_station" type="text" class="form-control" placeholder="e.g HW (Haridwar)"><br/>
                        <label>Destination Station:</label>
                        <input id="destination_station" type="text" class="form-control" placeholder="e.g NDLS (New Delhi)"><br/>
                        <button id="search_trains" class="btn btn-block btn-lg text-white" style="background-color: #2a99de;">Search Trains</button>
                        <div id="display_trains"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="stationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="stationModalLabel">Check Train Schedule</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <label>Enter Train Number:</label>
                        <input id="train_no" type="text" class="form-control" placeholder="e.g 12018"><br/>
                        <button id="fetch_stations" class="btn btn-block btn-lg text-white" style="background-color: #2a99de;">Show Route</button>
                        <div id="display_stations"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="pnrModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="pnrModalLabel">Search Trains between stations </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <label>Enter PNR Number:</label>
                        <input id="pnr_no" type="text" class="form-control" placeholder="pnr generated on ticket"><br/>
                        <button id="check_pnr_status" class="btn btn-block btn-lg text-white" style="background-color: #2a99de;">Check Status</button>
                        <div id="display_pnr_status"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="trainstatusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="trainstatusModalLabel">Check train status</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <label>Enter Train Number:</label>
                        <input id="pnr_no" type="text" class="form-control" placeholder="e.g 12018"><br/>
                        <button id="check_status" class="btn btn-block btn-lg text-white" style="background-color: #2a99de;">Check Train Status</button>
                        <div id="display_status"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="app.js" type="text/javascript"></script>
</body>
</html>
