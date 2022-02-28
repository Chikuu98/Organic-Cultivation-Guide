<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="./css/index.css">
    <script src="https://kit.fontawesome.com/ee4a922350.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cultivation Guide</title>
</head>
<body style="background:#198754">
<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background:linear-gradient(to right, #033115, #19f533,#033115)">
  <div class="container">
    <a class="navbar-brand" href="index.php"><h3><i class="fa fa-pagelines" aria-hidden="true"></i> Cultivation Guide</h3></a>
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
  
</nav>

<!---------------------------------home-cover------------------------------------------->

<div class="row shadow" style="height: 90vh; background:#27ae60">
    <div class="col-md-7 text-center" style="background-image: url('assets/bgindex2.png');">
              <!-- <h1 class="text-light mt-5 pt-5 mb-5">Vision</h1>
              <h3 class="text-light mx-5 px-5">
              " To promote<br>agriculture and food systems<br>that build<br>healthy land, people, communities and quality of life ,<br>for present and future generations. "
            </h3> -->
        
    </div>
    <div class="col-5 text-center" style="background:#27ae60">
    <h1 class="display-1 text-light mt-5 pt-5"><b>EcoJEE</b></h1>
    <h1 class="display-4 text-light mt-5">Organic<br>Cultivation Guide</h1>
    <a href="http://localhost/organic/signupdesign.php">
    <button class=" btn btn-light text-success my-3"><h4>Join Now</h4></button>  
    </a>
      
    </div>
</div>

<!-----------x------------home-cover-------------------------x--------------------------->
   
    <br><br><br>

     <!-----------------------what we do---------------------------------------------------->
    <section class="about bg-success">
        <h1 class="h1about">WHAT WE DO</h1>
        <div class="container">
            <div class="rowa">
                    <div class="cola">
                    <div class="maina">
                        <div class="service">
                            <div class="service-logo">
                                <img src="./assets/home-img/blog.png">
                            </div>
                            <h4 class="h4about">Blog</h4>
                            <p class="pabout">You can improve your knowledge and learn about organic cultivation technology by visiting our blog page. It contains very important articles.
                            </p>
                        </div>
                        <div class="shadowOne"></div>
                        <div class="shadowTwo"></div>
                    </div>
                </div>
                <div class="cola">
                    <div class="maina">
                        <div class="service">
                            <div class="service-logo">
                                <img src="./assets/home-img/cart.png">
                            </div>
                            <h4 class="h4about">Buy & Sell</h4>
                            <p class="pabout">You can easily buy and sell anything related to organic farming by visiting our web page. It also gives you the ability to get in touch with sellers and contact them directly.
                            </p>
                        </div>
                        <div class="shadowOne"></div>
                        <div class="shadowTwo"></div>
                    </div>
                </div>
                <div class="cola">
                    <div class="maina">
                        <div class="service">
                            <div class="service-logo">
                                <img src="./assets/home-img/news.png">
                            </div>
                            <h4 class="h4about">News</h4>
                            <p class="pabout">You can find the latest information and news related to organic farming by visiting our Eco news page. It also contains information about authorized agencies.
                            </p>
                        </div>
                        <div class="shadowOne"></div>
                        <div class="shadowTwo"></div>
                    </div>
                </div>
            </div>
        </div>


    </section>
     <!-----------x------------what we do-------------------------x--------------------------->


     <!-------------------------footer---------------------------------------------------->

     <section class="foot">
        <footer>
        <div class="move-up">
                <span><a href="#"><i style="color: white;" class="fas fa-arrow-circle-up fa-2x"></i></a></span>
            </div>
            <div class="rowf">
                <div class="colf">
                    <h3 class="logof"><i class="fa fa-pagelines" aria-hidden="true"></i> <b>Cultivation Guide</b></h3>
                    <p class="pf">To promote agriculture and food systems that build healthy land, people, communities and quality of life, for present and future generations.</p>
                </div>
                <div class="colf">
                    <h3 class="h3f"><b>Address</b> <div class="underlinef"><span class="spanf"></span></div></h3>
                    <div class="addressf">
                        <p class="pf">Yatiyana Road<br>
                        Aparekka,Matara<br>
                        Sothern Province, Sri Lanka</p>
                    </div>
                    <p class="email-idf">chiranjonline@gmail.com</p>
                    <p>+94- 779980990</p>
                </div>
                <div class="colf">
                    <h3 class="h3f"><b>Links</b> <div class="underlinef"><span class="spanf"></span></div></h3>
                    <ul class="ulf">
                        <li class="lif"><a class="af" href="">Home</a></li>
                        <li class="lif"><a class="af" href="">Buy & Sell</a></li>
                        <li class="lif"><a class="af" href="">Blog</a></li>
                        <li class="lif"><a class="af" href="">News & Inst.</a></li>
                        <li class="lif"><a class="af" href="">Account</a></li>
                    </ul>
                </div>
                <div class="colf">
                    <h3 class="h3f"><b>Newsletter</b> <div class="underlinef"><span class="spanf"></span></div></h3>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <form class="frmf">             
                        <input type="email" placeholder="Enter your  email" required>
                        <Button type="submit"><i class="fas fa-arrow-right" aria-hidden="true"></i></Button>  
                    </form>
                    <div class="social-iconsf">
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-whatsapp-square"></i>
                        <i class="fab fa-instagram-square"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                </div>
            </div>
            
            <hr class="hrf">
            <p class="copyrightf"><b>Chiran Jeewantha Vidanagamage <i class="far fa-copyright"></i> 2021 - All Rights Reserved</b></p>
        </footer>
    </section>
      <!-----------x--------------footer-----------------------x-------------------------->
</body>
</html>

