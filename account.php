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
<body style="background:#68c3a3">
<nav class="navbar navbar-expand-lg navbar-dark shadow bg-success">
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
            <h1 class="text-center text-light mt-5"><b>Hello <?php echo $name?>..!</b></h1>
            <br><br><br><br>
            <div class="container">

            <div class="row">

                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-header bg-success text-white">
                            <div class="row align-items-center">
                                <div class="col">
                                    <i class="fas fa-shopping-cart fa-4x"></i>
                                </div>
                                <div class="col">
                                    <h3 class="display-3">01</h3>
                                </div>
                                <h4 class="my-3">EcoJEE Shop</h4>
                            </div>

                        </div>
                        <div class="card-footer">
                            <h5>
                                <a href="cart/cindex.php" class="text-success">Go to Shop <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-header bg-primary text-white">
                            <div class="row align-items-center">
                                <div class="col">
                                    <i class="fab fa-blogger-b fa-4x"></i>
                                </div>
                                <div class="col">
                                    <h3 class="display-3">02</h3>
                                </div>
                                <h4 class="my-3">Blog</h4>
                            </div>

                        </div>
                        <div class="card-footer">
                            <h5>
                                <a href="blog/blog.php" class="text-primary">View blog <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-header bg-info text-white">
                            <div class="row align-items-center">
                                <div class="col">
                                    <i class="fa fa-newspaper fa-4x"></i>
                                </div>
                                <div class="col">
                                    <h3 class="display-3">03</h3>
                                </div>
                                <h4 class="my-3">News & Instructions</h4>
                            </div>

                        </div>
                        <div class="card-footer">
                            <h5>
                                <a href="#" class="text-info">View News <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-white">
                            <div class="row align-items-center">
                                <div class="col">
                                    <i class="fas fa-address-book fa-4x"></i>
                                </div>
                                <div class="col">
                                    <h3 class="display-3">04</h3>
                                </div>
                                <h4 class="my-3">My Account</h4>
                            </div>

                        </div>
                        <div class="card-footer">
                            <h5>
                                <a href="#" class="text-danger">Go to Account <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </h5>
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