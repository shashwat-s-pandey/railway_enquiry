<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotus Trains</title>
    <link rel="stylesheet" href="info.css">
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
              <div class="four">
                <a href="#" class="navbar">Contact Us</a>
              </div>
              <div class="lotus_icon">
                  <a href="#"><img src="images/lotusfinal.png" class="lotus" alt=""></a>
              </div>
            </div>
        </div>

    </nav>

    <div style="text-align: center;">
        <h1 style="margin-top: 70px; width: 15em; padding: 10px; background-color: #eee; opacity: 0.9; border-radius: 10px; display: inline-block;">Indian Railways — Zones</h1>
    </div>

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-3 mb-3 card-wrapper">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/z1.jpg" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">Southern<br/></h3><br/>
                        <a href="#" class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#SRModal">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 card-wrapper">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/z2.jpg" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">Central </h3><br/>
                        <a href="#" class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#CRModal">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 card-wrapper">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/z3.jpg" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">Western </h3><br/>
                        <a href="#" class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#WRModal">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 card-wrapper">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/z4.jpg" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">Eastern </h3><br/>
                        <a href="#" class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#ERModal">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 card-wrapper">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/z5.jpg" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">Northern </h3><br/>
                        <a href="#" class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#NRModal">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 card-wrapper">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/z6.png" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">North East </h3><br/>
                        <a href="#" class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#NERModal">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 card-wrapper">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/z7.jpg" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">South East </h3><br/>
                        <a href="#" class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#SERModal">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 card-wrapper">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/z8.jpg" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">Northeast Frontier </h3><br/>
                        <a href="#" class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#NFRModal">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 card-wrapper">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/z9.jpg" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">South Central </h3><br/>
                        <a href="#" class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#SCRModal">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 card-wrapper">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/z10.jpg" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">Kolkata Metro </h3><br/>
                        <a href="#" class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#KRModal">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 card-wrapper">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/z11.jpg" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">East Central</h3><br/>
                        <a href="#" class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#ECRModal">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 card-wrapper">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/z12.jpg" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">South East Central</h3><br/>
                        <a href="#" class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#SECRModal">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 card-wrapper">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/z13.jpg" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">North Western</h3><br/>
                        <a href="#" class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#NWRModal">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 card-wrapper">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/z14.jpg" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">East Coast</h3><br/>
                        <a href="#" class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#ECoRModal">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 card-wrapper">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/z15.jpg" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">North Central</h3><br/>
                        <a href="#" class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#NCRModal">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 card-wrapper">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/z16.jpg" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">South Western</h3><br/>
                        <a href="#" class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#SWRModal">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3 card-wrapper">
                <div class="mycard">
                    <div class="card-body ">
                        <img src="images/z17.png" class="img-icon" alt="">
                        <h3 class="text-md-center mt-3 text-muted">West Central</h3><br/>
                        <a href="#" class="btn btn-block text-white" style="background-color: #2a99de;" data-toggle="modal" data-target="#WCRModal">Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="SRModal" tabindex="-1" aria-labelledby="SRModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SRModalLabel">Southern Railway Zone</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                    <?php 
                        $zone = 'SR';
                        include 'fetch.php';
                    ?>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="CRModal" tabindex="-1" aria-labelledby="CRModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="CRModalLabel">Central Railway Zone</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                <?php 
                        $zone = 'CR';
                        include 'fetch.php';
                    ?>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="WRModal" tabindex="-1" aria-labelledby="WRModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="WRModalLabel">Western Railway Zone</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                <?php 
                        $zone = 'WR';
                        include 'fetch.php';
                    ?>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="ERModal" tabindex="-1" aria-labelledby="ERModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ERModalLabel">Eastern Railway Zone</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                <?php 
                        $zone = 'ER';
                        include 'fetch.php';
                    ?>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="NRModal" tabindex="-1" aria-labelledby="NRModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="NRModalLabel">Northern Railway Zone</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                <?php 
                        $zone = 'NR';
                        include 'fetch.php';
                    ?>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="NERModal" tabindex="-1" aria-labelledby="NERModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="NERModalLabel">North Eastern Railway Zone</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                <?php 
                        $zone = 'NER';
                        include 'fetch.php';
                    ?>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="SERModal" tabindex="-1" aria-labelledby="SERModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SERModalLabel">South Eastern Railway Zone</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                <?php 
                        $zone = 'SER';
                        include 'fetch.php';
                    ?>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="NFRModal" tabindex="-1" aria-labelledby="NFRModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="NFRModalLabel">Northeast Frontier Railway Zone</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                <?php 
                        $zone = 'NFR';
                        include 'fetch.php';
                    ?>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="SCRModal" tabindex="-1" aria-labelledby="SCRModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SCRModalLabel">South Central Railway Zone</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                <?php 
                        $zone = 'SCR';
                        include 'fetch.php';
                    ?>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="KRModal" tabindex="-1" aria-labelledby="KRModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="KRModalLabel">Kolkata Metro</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                <?php 
                        $zone = 'KR';
                        include 'fetch.php';
                    ?>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="ECRModal" tabindex="-1" aria-labelledby="ECRModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ECRModalLabel">East Central Railway Zone</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                <?php 
                        $zone = 'ECR';
                        include 'fetch.php';
                    ?>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="SECRModal" tabindex="-1" aria-labelledby="SECRModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SECRModalLabel">South East Central Railway Zone</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                <?php 
                        $zone = 'SECR';
                        include 'fetch.php';
                    ?>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="NWRModal" tabindex="-1" aria-labelledby="NWRModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="NWRModalLabel">North Western Railway Zone</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                <?php 
                        $zone = 'NWR';
                        include 'fetch.php';
                    ?>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="ECoRModal" tabindex="-1" aria-labelledby="ECoRModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ECoRModalLabel">East Coast Railway Zone</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                <?php 
                        $zone = 'ECoR';
                        include 'fetch.php';
                    ?>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="NCRModal" tabindex="-1" aria-labelledby="NCRModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="NCRModalLabel">North Central Railway Zone</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                <?php 
                        $zone = 'NCR';
                        include 'fetch.php';
                    ?>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="SWRModal" tabindex="-1" aria-labelledby="SWRModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SWRModalLabel">South Western Railway Zone</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                <?php 
                        $zone = 'SWR';
                        include 'fetch.php';
                    ?>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="WCRModal" tabindex="-1" aria-labelledby="WCRModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="WCRModalLabel">West Central Railway Zone</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                <?php 
                    $zone = 'WCR';
                    include 'fetch.php';
                ?>
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
