<!doctype html>
<html lang="en">
  <head>
    <title>About Event Management</title>
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
                 <li class="nav-item">
                <a class="nav-link" href="register.php">Event</a>
              </li>
           
              <li class="nav-item">
                <a class="nav-link" href="index1.php">Admin</a>
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
    
    <section class="home-slider owl-carousel">
      
      <div class="slider-item" style="background-image: url('img/eventimg.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>About</h1>
              <p class="mb-5">This is a Event Management owned by a group of cse411 course . The whole design was created by them..</p>
            </div>
          </div>
        </div>
      </div>


    </section>
    <!-- END slider -->

    <section class="section pt-md-5 pb-md-5 element-animate">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-12">
            <h2>Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p>An event management system is typically made up of client agents that reside in the remote devices, a central component for gathering the events, an event database and a reporting system to deliver the results in various formats</p>
               <br> 1. Event coordination
               <br> 2. Special event planning services
               <br> 3. Online resource
               <br> 4. Creating an event design
               <br> 5. Budget Planning
          </div>
          <div class="col-md-6">
            <p><img src="img/event1img.jpg" alt="Image placeholder" class="img-fluid"></p>
            
          </div>
        </div>
        <div class="row">
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="section">
      <div class="container">
        <div class="row mb-5 justify-content-center element-animate">
          <div class="col-md-12">
            <span class="section-heading">Group Members</span>
            <h2>Meet Our Members</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 element-animate">
            <div class="media pastor d-block text-center">
              <img src="img/salman.jpg" alt="Image placeholder" class="img-fluid mb-4">
              <div class="media-body">
                <h3>Syed Salman Hayat</h3>
                
              </div>
            </div>
          </div>
          <div class="col-md-4 element-animate">
            <div class="media pastor d-block text-center">
              <img src="img/eva.jpg" alt="Image placeholder" class="img-fluid mb-4">
              <div class="media-body">
                <h3>Rayhan-E-Zannat</h3>
         
              </div>
            </div>
          </div>
          <div class="col-md-4 element-animate">
            <div class="media pastor d-block text-center">
              <img src="img/Rakib.jpg" alt="Image placeholder" class="img-fluid mb-4">
              <div class="media-body">
                <h3>Rakib Ali Tanzin</h3>
          
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

 
    <!-- END section -->
    
    

  

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelement-and-player.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/main.js"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>
  </body>
</html>