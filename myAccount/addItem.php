<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Account</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="addItemFooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css">
    
</head>

<body style="background:#E7FEED">

<?php $name=($_SESSION['Name']);?>

<?php $u_id=($_SESSION['U_ID']);?>



<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background:linear-gradient(to right, #033115, #19f533,#033115)">
        <a href="addItem.php" class="navbar-brand">
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

<!---------------------- add a new item form --------------------->

<div class="container mb-5">
    <div class="row">
        <div class="col-lg-6 m-auto ">
            <div class="card bg light mt-5 shadow">
                <div class="card-title bg-success text-white mt-5">
                    <h3 class="text-center py-2">Add Your New Item</h3>
                </div>

                    <!-- --------Display Empty fields------ -->
                <?php

                    if(isset($_GET['empty']))
                    {
                        $Message=$_GET['empty'];
                        $Message=" $name, Please Fill your item informations ";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                    <?php        
                    }
                ?>


                     <!-- --------This item already added------ -->
                     <?php

                    if(isset($_GET['added']))
                    {
                        $Message=$_GET['added'];
                        $Message=" $name, Your item already added ";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                    <?php        
                    }
                    ?>

                    <!-- --------add new item successed------ -->
                    <?php

                    if(isset($_GET['success']))
                    {
                        $Message=$_GET['success'];
                        $Message=" Hey $name, Your item added successfully ";
                    ?>
                        <div class="alert alert-success text-center"><?php echo $Message ?></div>
                    <?php        
                    }
                    ?>    

                <div class="card-body">
                    <form action="itemFormAction.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="item_name" placeholder="Item Name" class="form-control my-2">
                        <input type="Number" name="quantity" placeholder="Available Quantity" class="form-control my-2">
                        <input type="Number" name="price" placeholder="item Price" class="form-control my-2">
                        <input type="text" name="description" placeholder="Item Description" class="form-control my-2">
                        <h6 class="text-secondary m-2">Upload a Image</h6>
                        <!-- <input type="file" name="iimg" class="form-control text-success"/> -->
		
			            <input type="file" class="text-secondary" name="img_file" id="img_file">

	                   <div>
                            <canvas id="canvas">
				            Your browser does not support HTML5 Canvas
			                </canvas>
                        </div>
                        		            
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-secondary" for="flexCheckDefault">
                                image croped
                            </label>
                        </div>
		                
     
                        <h6 class="text-secondary">Result</h6>
		                <div id="result">
			
		                </div>
                        <input type="hidden" name="file_name" id="file_name">
			            <input type="hidden" name="cropped_img" id="cropped_img">

                        
                        <button class="btn btn-success mt-4" name="submit" id="submit"disabled>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!---------end---------- add a new item form --------end---------->
<!----------------your items to delete start--------------->
<h1 class="text-danger text-center mt-5 mb-3">Your Items List</h1>
<div class="row">
        <div class="col-lg-6 m-auto ">
            <div class="card bg light mt-5 shadow">
    <!--------------- php ------------>

    <?php
	// connecting to the database
	$connection1 = mysqli_connect('localhost', 'root', '', 'final_project');
	// checking the connection
	if ( !$connection1 ) {
		die("Error - database connection failed");
	}

	// preparing list of items
	$query1  = "SELECT * FROM itemtb WHERE u_id = $u_id";
	$result_set = mysqli_query($connection1, $query1);

	if ( $result_set ) {
		if ( mysqli_num_rows($result_set) > 0 ) {
			while ( $result = mysqli_fetch_assoc($result_set) ) {
				?>
<!------------------item-------------------->
<div class="row my-2">
                    <div class="col-lg-6 m-auto text-center text-success">
                        <h5><?php echo $result['item_name']; ?></h5>
                    </div>
                    <div class="col-lg-6 m-auto text-center">
                        <form action="deleteItem.php?d_id=<?php echo $result['item_id']; ?>" method="POST" enctype="multipart/form-data">
                            <button class="btn btn-danger" name="deleteI" id="deleteI">delete item</button>
                        </form>    
                    </div>
                </div>
<!--------*---------item close---*---------->
                <?php
			}
		} else {
			// no records found	
            ?><h5 class="text-warning text-center mt-3 mb-3" >item list empty</h5>	<?php
		}		
	} else {
		// datbase query failed		
	}
?>

<!--------------- php close ------------>

            </div>
        </div>
</div>

<!-----------------your items to delete end---------------->
</div>



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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.js"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>