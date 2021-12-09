<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="addItemFooter.css">
    
</head>

<body class="bg-light">

<?php $name=($_SESSION['Name']);?>

<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background:linear-gradient(to right, #033115, #19f533,#033115)">
        <a href="blog.php" class="navbar-brand">
            <h3 class="px-5 ml-5">
            <i class="fas fa-user-alt"></i> <b><?php echo $name?></b>
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav mr-5">
                <a href="http://localhost/organic/account.php?Well" class="nav-item nav-link active mr-5">
                    <h5 class="cart"><i class="fas fa-home"></i></h5>
                </a>    
            </div>
        </div>

    </nav>
</header>


<!-- --------------footer--------------- -->
<section class="foot">
        <footer>
        <div class="move-up">
                <span><a href="#"><i style="color: white;" class="fas fa-arrow-circle-up fa-2x"></i></a></span>
            </div>
            <div class="rowf">
                <div class="colf">
                    <h3 class="logof"><i class="fab fa-pagelines" aria-hidden="true"></i><b> Cultivation Guide</b></h3>
                    <p class="pf">To promote agriculture and food systems that build healthy land, people, communities and quality of life, for present and future generations.</p>
                </div>
                <div class="colf">
                    <h3 class="h3f"><b>Address </b><div class="underlinef"><span class="spanf"></span></div></h3>
                    <div class="addressf">
                        <p class="pf">Yatiyana Road<br>
                        Aparekka,Matara<br>
                        Sothern Province, Sri Lanka</p>
                    </div>
                    <p class="email-idf">chiranjonline@gmail.com</p>
                    <p>+94- 779980990</p>
                </div>
                <div class="colf">
                    <h3 class="h3f"><b>Links </b><div class="underlinef"><span class="spanf"></span></div></h3>
                    <ul class="ulf">
                        <li class="lif"><a class="af" href="">Home</a></li>
                        <li class="lif"><a class="af" href="">Buy & Sell</a></li>
                        <li class="lif"><a class="af" href="">Blog</a></li>
                        <li class="lif"><a class="af" href="">News & Inst.</a></li>
                        <li class="lif"><a class="af" href="">Account</a></li>
                    </ul>
                </div>
                <div class="colf">
                    <h3 class="h3f"><b>Newsletter </b><div class="underlinef"><span class="spanf"></span></div></h3>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <form class="frmf">             
                        <input type="email" placeholder="Enter your  email" required>
                        <Button type="submit"><i class="fas fa-arrow-right" aria-hidden="true"></i></Button>  
                    </form>
                    <div class="social-iconsf">
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-whatsapp-square"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                </div>
            </div>
            
            <hr class="hrf">
            <p class="copyrightf">Chiran Jeewantha Vidanagamage <i class="far fa-copyright"></i> 2021 - All Rights Reserved</p>
        </footer>
    </section>

    <!-- ----------------footer close------------------- -->



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>