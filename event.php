<!doctype html>
<html lang="en">
  <head>
    <title>Event Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Playfair+Display:,300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
    <style>
.btn{
  border: 1px solid #3498db;
  background: none;
  padding: 10px 20px;
  font-size: 20px;
  font-family: "montserrat";
  cursor: pointer;
  margin: 10px;
  transition: 0.8s;
  position: relative;
  overflow: hidden;
}
.btn1,.btn2,.btn3{
  color: #3498db;
}
.btn1:hover,.btn2:hover,.btn3:hover{
  color: #fff;
}
.btn::before{
  content: "";
  position: absolute;
  left: 0;
  width: 100%;
  height: 0%;
  background: #3498db;
  z-index: -1;
  transition: 0.8s;
}
.btn1::before,.btn2::before,.btn3::before{
  top: 0;
  border-radius: 0 0 50% 50%;
}
{
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

</style>
  <body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.php">Event Management</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Services.php">About & Services</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="event.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Event</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="birthday.php">Birthday</a>
                  <a class="dropdown-item" href="weeding.php">Wedding</a>
                  <a class="dropdown-item" href="corporate.php">Corporate</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_login.php">Admin</a>
              </li>
                  <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>           
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
	
      <div class="row">
  <div class="column">
      <br><br><br><br><img src="img/bd.jpg" alt="Snow" style="width:100%"></br></br></br></br>
<div class="container">
    <a href="birthday.php">
    <button class="btn btn1">Birthday</button>
        </a>
</div>
  </div>
  <div class="column">
      <br><br><br><br><img src="img/wd.jpg" alt="Forest" style="width:100%"</br></br></br></br>
<div class="container">
	<a href="weeding.php">
    <button class="btn btn2">Wedding</button>
</div>
  </div>
  <div class="column">
    <br><br><br><br> <img src="img/cr.jpg" alt="Mountains" style="width:100%"></br></br></br></br>
<div class="container">
	<a href="corporate.php">
    <button class="btn btn3">Corporate</button>
</div>
  </div>
</div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelement-and-player.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>