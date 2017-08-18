<?php
	include('login.php'); // Include Login Script
	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: home.php');
	}	

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap-reboot.min.css">
  </head>


<body class="bg-secondary">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
          <a class="navbar-brand" href="#">
            <img src="../logo.png" width="40" height="40" alt="">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">E-Maintenence <span class="sr-only">(current)</span></a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link disabled" href="#">login to access your account</a>
              </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
              <div class="input-group">
              <input class="form-control mr-sm-2" type="text" placeholder="username" aria-label="Search">
              <input class="form-control mr-sm-2" type="password" placeholder="password" aria-label="Search">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Sign In</button>
            </div>
            </form>
          </div>

        </nav>
          <div class="container">
          <div class="row">

              <div class="col-md-8 col-1">
                </br></br>
                
                <div class="card text-center text-light bg-dark border-info mb-3">
              
                <div class="card-body ">
                  <h4 class="card-title text-light bg-dark">Purpose of E-maintanence</h4>
                  <p class="card-text text-light bg-dark" style="padding : 40px">
                    We have created this to speed up Maintanence work in the government body Specially in college where 
                    approval of several responsible person is required and this may eat up to large amount of time.
                    to reduce this time we developed this.
                    <br>
                    also to keep track of all the maintanence mannually is kind of headache and there is chances of mistake.
                    to remove this headache and inaccurate work we developed this. 
                    <br><br>
                    Regular maintenance is essential to keep premises, equipment, machines and the work environment safe and reliable. It helps to eliminate workplace hazards. Lack of maintenance or inadequate maintenance can lead to dangerous situations, accidents and health problems.
                  </p>
                  <a href="#" class="btn btn-outline-light ">Contact Us</a>
                </div>
                <div class="card-footer text-muted">
                  you are visitor no <span class="badge badge-secondary">
                  1
              		</span>
                </div>
              </div>


              </div>

              <div class="col-md-4 col-6">
              </br></br>
                <div class="card text-light bg-dark border-info mb-3">
                  <!-- <div class="card-header">Register Complain</div> -->

                    <form method="post" action="">
                      <div class="card-body">
                      <div class="form-group">
                        <h4 class="card-title ">To Register The Complain</h4>
                         </br>
                        <p class="card-text"><p> UserName</p><input type="text" name="username" class="form-control form-control-lg" id="compreguname" aria-describedby="emailHelp" required placeholder="Enter Your UserName"></p>

                        <p class="card-text"><p>Password</p><input type="password" name="password" class="form-control form-control-lg" id="compregpass" aria-describedby="emailHelp" required placeholder=" Enter Your Password"></p>

                         <small id="emailHelp" class="form-text text-muted text-center"><b class="text-danger"><?php echo $error;?></b></br> Use at least one letter, one numeral, and eight characters.</small>
                         </br>  
                        <input type="submit" name="submit" value="Log me in" class="btn btn-outline-light btn-lg btn-block "></input>

                         <small id="emailHelp" class="form-text text-muted text-center">  We May occasionally send you emails.</small>

                      </div>
                    </form>
                  </div>
                </div>
              </div>
          </div>
          </div>

          </div>

          <div class="fixed-bottom text-white bg-dark" style="height : 5%">
            <div class="container">
               Copyright © 2017 to Yash Thakar and team.
            </div>
          </div>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    
    <script src="../js/popper.min.js"></script>
    <script src="../js/jquery-3.2.1.slim.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>

