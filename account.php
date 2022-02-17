<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/ee4a922350.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cultivation Guide</title>
</head>
<body style="background:linear-gradient(to right, #033115, #1af06c, #a2f7ac)">
<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background:linear-gradient(to right, #033115, #19f533,#033115)">
  <div class="container">
    <a class="navbar-brand" href="#"><h3><i class="fa fa-pagelines" aria-hidden="true"></i> Cultivation Guide</h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <ul class="nav navbar">

      <?php 

              if(isset($_SESSION['U_ID']))
              {
                  echo    '<form action="includes/logout.php" method="POST">
                              <li class="nav-item"><button type="submit" name="logout" class="btn btn-outline-light">Logout</button></li>
                          </form>';
              }
              else
              {
                  echo '  <li class="nav-item"><a href="logindesign.php" class="btn btn-outline-light me-4">Login</a></li>
                  <li class="nav-item"><a href="signupdesign.php" class="btn btn-outline-light ml-3">Sign Up</a></li>';
              }

      ?>

            </ul>
    </div>
  </div>
</nav>
<!-- -----------------header closed--------------- -->

<?php

    if(isset($_GET['Well']))
    {

        if($_SESSION['U_ID'])
        {
            $name=($_SESSION['Name']);
            ?>

            <!-- -----------body-content------------- -->

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-light display-1 mt-5 ml-5 pl-5"><img style="height: 250px;" src="assets/eco.png"><br><b>Hello <?php echo $name?>..!</b></h1>
                
                
            </div>

            <div class="col-md-6">
                
                <div class="row mx-5 my-5">
                    <div class="row my-3">
                        <div class="col-md-6">
                            <div class="card text-center shadow">
                                <div class="card-header text-white" style="background:linear-gradient(to right, #033115, #0e9743, #19f533)">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <i class="fas fa-shopping-cart fa-2x"></i>
                                        </div>
                                        <div class="col">
                                            <h3 class="display-3">01</h3>
                                        </div>
                                        <h4 class="my-2">EcoJEE Shop</h4>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <h6>
                                        <a href="cart/cindex.php" class="text-success">Go to Shop <i class="fa fa-arrow-alt-circle-right"></i></a>
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card text-center shadow">
                                <div class="card-header text-white" style="background:linear-gradient(to right, #02163d, #170e97, #5b19f5)">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <i class="fab fa-blogger-b fa-2x"></i>
                                        </div>
                                        <div class="col">
                                            <h3 class="display-3">02</h3>
                                        </div>
                                        <h4 class="my-2">EcoJEE Blog</h4>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <h6>
                                        <a href="blog/blog.php" class="text-primary">View blog <i class="fa fa-arrow-alt-circle-right"></i></a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card text-center shadow">
                                <div class="card-header text-white" style="background:linear-gradient(to right, #02163d, #170e97, #5b19f5)">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <i class="fa fa-newspaper fa-2x"></i>
                                        </div>
                                        <div class="col">
                                            <h3 class="display-3">03</h3>
                                        </div>
                                        <h4 class="my-2">News</h4>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <h6>
                                        <a href="news/news.php" class="text-primary">View News <i class="fa fa-arrow-alt-circle-right"></i></a>
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card text-center shadow">
                                <div class="card-header text-white" style="background:linear-gradient(to right, #033115, #0e9743, #19f533)">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <i class="fas fa-address-book fa-2x"></i>
                                        </div>
                                        <div class="col">
                                            <h3 class="display-3">04</h3>
                                        </div>
                                        <h4 class="my-2">My Account</h4>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <h6>
                                        <a href="myAccount/addItem.php" class="text-success">Go to Account <i class="fa fa-arrow-alt-circle-right"></i></a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>
            <?php
        }
        else
        {

        }
    }
    else
    {
        header("location: index.php");
        exit();
    }

?>