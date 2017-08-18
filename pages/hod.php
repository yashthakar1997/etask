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
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Login</button>
            </div>
            </form>
          </div>

        </nav>
      </br>
   <div class="container">
         
         <div class="row">
              <div class="col-12">
              </br>
                <div class="card text-light bg-dark border-info mb-3">
                  <!-- <div class="card-header">Register Complain</div> -->
                    <div class="card-body">
                    <form>
                        <h4 class="card-title">Details Of Complains</h4>
                      </br>
                        <div class="form-group row">

                            <label for="emailHelp" class="col-2 col-form-label">Search</label>
                            <div class="col-2">
                              <select id="inputState" class="form-control">
                                <option>dept</option>
                                <option>Faculty</option>
                                <option>H.O.D</option>
                                <option>Principal</option>
                              </select>
                            </div>
                            <div class="col-2">
                               <select id="inputState" class="form-control">
                                <option>faculty</option>
                                <option>Faculty</option>
                                <option>H.O.D</option>
                                <option>Principal</option>
                              </select>
                            </div>
                            <div class="col-2">
                               <select id="inputState" class="form-control">
                                <option>title</option>
                                <option>Faculty</option>
                                <option>H.O.D</option>
                                <option>Principal</option>
                              </select>
                            </div>
                            <div class="col-2">
                               <select id="inputState" class="form-control">
                                <option>date</option>
                                <option>Faculty</option>
                                <option>H.O.D</option>
                                <option>Principal</option>
                              </select>
                            </div>
                       </div>
                      </form>
                   </div>



                   <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>title</th>
                              <th>desc</th>
                              <th>priority</th>
                              <th> approve</th>
                              <th> forward</th>
                              <th> reminder</th>
                              <th> comment</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>fan</td>
                              <td>ce fan stopped working</td>
                              <td>high</td>
                              <td> yes</td>
                              <td> HOD</td>
                              <td> no </td>
                              <td>urgent </td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>pc</td>
                              <td>not turning on</td>
                              <td>low</td>
                              <td> no</td>
                              <td> -</td>
                              <td> yes </td>
                              <td> extra </td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>water purifier</td>
                              <td>ce</td>
                              <td>high</td>
                              <td> yes</td>
                              <td> HOD</td>
                              <td> yes </td>
                              <td> urgent </td>
                            </tr>
                          </tbody>
                        </table>
      </div>
   </div>         
  </div>
</div>

          <div class="fixed-bottom text-light bg-dark" style="height : 5%">
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