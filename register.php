
<html>
    <head>
        <title>Register</title>
         <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="register.css">

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
.btn1{
  color: #3498db;
}
.btn1:hover{
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
.btn1::before{
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
        

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Services.php">About & Services</a>
              </li>

                  <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
               
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
        
        <!--Selection of customer type-->
        <table class="table">
            <tr>
                <td>
                   <br><br><br> <button>
                        <a href="#popup1" style="text-decoration:none;"><b>New Customer</b></a>
                    </button></br></br></br>
                   <br> <button>
                        <a href="#popup2" style="text-decoration:none;"><b>Existing Customer</b></a>
        </button></br>
                </td>
            </tr>

        </table>
		
        <!--popup-->
        <div class="container">
            <div class="row">
                <div id="popup1" class="overlay">
                    <div class="popup1">
                        <center><h2></h2></center>
		                <a class="close" href="#">&times;</a>
		                      <div class="content">
                                <!-- multistep form -->
                                    <div class="col-lg-12">

                                            <form class="form-group" method="POST" action="newcustomer.php">
                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                              <label>ID: </label>
                                                              <input type="text" name="customer_id" class="form-control" placeholder="Enter ID" required>
                                                                </div>

                                                                <div class="col-lg-6 col-md-6">
                                                              <label>Name: </label>
                                                              <input type="text" name="customer_name" class="form-control"  placeholder="Name">
                                                               </div>
                                             </div>
                                                             <br>
                                                              <label>Contact</label>
                                                              <input type="text" name="customer_contact" class="form-control" placeholder="Conatct">
                                                                <br>
                                                           
                                             <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                              <label>Email</label>
                                                              <input type="text" name="customer_email" class="form-control" placeholder="Enter email" >
                                                                </div>

                                                                <div class="col-lg-6 col-md-6">
                                                              <label>Date of birth</label>
                                                              <input type="date" name="customer_dob" class="form-control" placeholder="Enter Date of birth">
                                                                </div>
                                                                   <div class="col-lg-6 col-md-6">
                                                              <label>Password</label>
                                                              <input type="password" name="customer_password" class="form-control" placeholder="Enter password">
                                                                </div>

                                              </div>
                                                             <br>
                                              
                                                              <input type="submit" name="submit" value="Register Now" class="btn btn-warning btn-block btn-lg" style="box-shadow: 2px 2px 2px gray;"onclick="warn();">
                                               
                                              

                                                        </form>


                                 </div>
                            </div>
	                   </div>
                    </div>
                 </div>
            </div>
			
        <!--existing customer-->
            <div class="container">
            <div class="row">
                <div id="popup2" class="overlay">
                    <div class="popup2"> 
                        <center><h2></h2></center>
		                <a class="close" href="#">&times;</a>
		                      <div class="content">
                                <!-- multistep form -->
                                    <div class="col-lg-12">

                                            <form class="form-group" method="POST" action="existingcustomer.php">
                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                              <label>ID: </label>
                                                              <input type="text" name="customer_id" class="form-control" placeholder="Enter ID">
                                                                </div>


                                             </div>


                                             <div class="row">

                                                                   <div class="col-lg-6 col-md-6">
                                                              <label>Password</label>
                                                              <input type="password" name="customer_password" class="form-control" placeholder="Enter password">
                                                                </div>

                                              </div>
                                                              <br>
                                               
                                                              <input type="submit" name="submit" value="Log In" class="btn btn-warning btn-block btn-lg" style="box-shadow: 2px 2px 2px gray;"onclick="warn();">
                                               

                                                        </form>

                                 </div>
                            </div>
	                   </div>
                    </div>
                 </div>
            </div>


         
        <!--end of popup-->
        <!--passing customer id in shpping cart-->


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
