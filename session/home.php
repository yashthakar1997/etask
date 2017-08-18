<?php
	include("check.php");	
  $msg = "";

  
  $sql="SELECT user FROM complain where user = '$login_user' ";

  if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
    mysqli_free_result($result);
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
                <a class="nav-link disabled" href="#"><h4>Welcome <em><?php echo $login_user;?>!</em></h4></a>
              </li>
            </ul>

             
            <form class="form-inline my-2 my-lg-0">
              <div class="input-group">
                <button type="button" class="btn btn-outline-light mr-2 my-sm-0 text-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">complains <span class="badge badge-secondary"><?php printf(" %d ",$rowcount); ?></span></button>
             
              <button class="btn btn-outline-light mr-2 my-sm-0" type="submit"><a href="logout.php" class="text-light">Logout</a></button>
              
            </div>
            </form>
          </div>

        </nav>
          <div class="container">
          <div class="row">

              <div class="col-12">
              </br>
                <div class="card text-light bg-dark border-info mb-3">
                  <!-- <div class="card-header">Register Complain</div> -->
                    <div class="card-body">
                    <form method="POST" action="home_insert.php" enctype="multipart/form-data">
                        <h4 class="card-title">Enter Details To Register Complain</h4>
                      </br>
                    <div class="form-group row">

                      <label for="emailHelp" class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-10">
                        <input type="text" required name="title" class="form-control" id="emailHelp" placeholder="Complain About">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Description</label>
                      <div class="col-sm-10">
                      <textarea class="form-control" required name="description" id="exampleFormControlTextarea1" rows="5" placeholder="complain description"></textarea>
                    </div>
                    </div>


                    <div class="form-group row">
                      <label for="exampleFormControlFile1" class="col-sm-2 col-form-label">Upload Image</label>
                      <div class="col-sm-10">
                      <input type="file" name="fileToUpload" id="fileToUpload" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </div>


                    <div class="form-group row">
                      <label for="inputState" class="col-sm-2 col-form-label">Priority</label>
                      <div class="col-sm-10">
                        <select name="priority" id="inputState" class="form-control">
                          <option name="1" value="1">Low</option>
                          <option name="2" value="2">Medium</option>
                          <option name="3" value="3">High</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputState" class="col-sm-2 col-form-label">to whom</label>
                      <div class="col-sm-10">
                        <select name="whom" id="inputState" class="form-control">
                          <option name="1" value="1">Co-Ordinator</option>
                          <option name="1" value="2">Faculty</option>
                          <option name="1" value="3">H.O.D</option>
                          <option name="1" value="4">Principal</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputState" class="col-sm-2 col-form-label"></label>
                      <div class="col-sm-4">
                         <button type="submit" value="Upload Image" name="submit" class="btn btn-outline-light btn-sm btn-block  ">Submit</button>
                      </div>
                      <div class="col-sm-6">
                         <label><input type="checkbox" value="1" name="mail"> Mail Feedback</label>

                      </div>
                     
                    </div>
                  </form>
                  </div>

              </div>


          </div>
          </div>

          </div>

          <div class="fixed-bottom text-light bg-dark" style="height : 5%">
            <div class="container">
               Copyright © 2017 to Yash Thakar and team.
            </div>
          </div>

              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">your complains</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="form-group">
                          <label for="recipient-name" class="form-control-label">complains by <em><?php echo $login_user;?>!</em></label>
                         
                            <?php
                                   $sql = "SELECT title, description, date FROM complain where user = '$login_user' ";
                                  $result = $conn->query($sql);

                                  if ($result->num_rows > 0) {
                                      echo "<table class='table'><tr><th>title</th><th>description</th><th>date</th></tr>";
                                      // output data of each row
                                      while($row = $result->fetch_assoc()) {
                                          echo "<tr><td>".$row["title"]."</td><td>".$row["description"]."</td><td> ".$row["date"]."</td></tr>";
                                      }
                                      echo "</table>";
                                  } else {
                                      echo "0 results";
                                  }

                            ?>

                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">give comment</button>
                    </div>
                  </div>
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