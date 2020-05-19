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
      
      <div class="slider-item" style="background-image: url('img/img_3.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Dhaka,BD</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
            </div>
          </div>
        </div>
      </div>


    </section>
    <!-- END slider -->

    <section class="section">
      <div class="container">
        <div class="row mb-5 justify-content-center element-animate">
          <div class="col-md-12">
            <span class="section-heading">Contact</span>
            <h2>Get In Touch</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
          <form action="#" method="post">
            
            <div class="row mb-4">
              <div class="col-md-4 mb-md-0 mb-4">
                <input type="text" class="form-control" placeholder="Full Name">
              </div>
              <div class="col-md-4 mb-md-0 mb-4">
                <input type="text" class="form-control" placeholder="Email Address">
              </div>
              <div class="col-md-4 mb-md-0 mb-4">
                <input type="text" class="form-control" placeholder="Phone">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-12">
                <textarea name="#" id="" class="form-control" placeholder="Write some words of encouragement" cols="30" rows="10"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <input type="submit" class="btn btn-primary btn-block" value="Send Message">
              </div>
            </div>
            
            
          </form>
          </div>

        </div>
          
                    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                         <div id="google-map">


                                        <div class="mapouter"><div class="gmap_canvas"><iframe width="706" height="318" id="gmap_canvas" src="https://maps.google.com/maps?q=East%20West%20University&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>






                             <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" allowfullscreen></iframe>-->
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