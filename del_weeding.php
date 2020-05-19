<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: admin_login.php');
	exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Add weeding Item</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Playfair+Display:,300, 400, 700" rel="stylesheet">
	
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
    
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="admin_home.php">Admin Panel</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
			  
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="index.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="add_birthday.php">Birthday</a>
                  <a class="dropdown-item" href="add_weeding.php">Marriage</a>
                    <a class="dropdown-item" href="add_corporate.php">Corporate</a>
             
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="event.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Delete</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="del_birthday.php">Birthday</a>
                  <a class="dropdown-item" href="del_weeding.php">Marriage</a>
                    <a class="dropdown-item" href="del_corporate.php">Corporate</a>
                </div>
              </li>

                 <li class="nav-item">
                <a class="nav-link" href="logout1.php">logout</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    <br> <br> <br>
	
	<body>
    <div class="container">
		<span class="section-heading">delete weeding Package</span><br>
		<br>
		<a class="section-heading-pack" href="del_wd_stage.php">Stage design</a>
		<a class="section-heading-pack" href="del_wd_card.php">invitation card</a>
		<a class="section-heading-pack" href="del_wd_photo.php">photography</a>
		<a class="section-heading-pack" href="del_wd_transport.php">transport</a>
		<a class="section-heading-pack" href="del_wd_catering.php">Catering</a>
		
    </div>
    </body>  
 
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/main.js"></script>
</html>