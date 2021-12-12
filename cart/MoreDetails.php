<?php session_start(); ?>
<?php require_once('../includes/connection.php'); ?>

<?php



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>More Details</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    
</head>

<body class="bg-light">

<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background:linear-gradient(to right, #033115, #19f533,#033115)">
        <a href="MoreDetails.php" class="navbar-brand">
            <h3 class="px-5 ml-5">
            <i class="far fa-file-alt"></i> <b>More Details</b>
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
                <a href="cart.php" class="nav-item nav-link active mr-5">
                    <h5 class="cart"><i class="fas fa-shopping-cart"></i></h5>
                </a>    
            </div>
        </div>

    </nav>
</header>

<!---------------------- php --------------------->
    <?php
        
        if (isset($_GET['id'])){

            $id =$_GET['id'];
            
            $con = mysqli_connect('localhost', 'root', '', 'final_project');
            $sql = "SELECT * FROM itemtb INNER JOIN userinfo ON itemtb.u_id=userinfo.ID WHERE itemtb.item_id=$id";

            $result = mysqli_query($con , $sql) or die( mysqli_error($con));
            $line = mysqli_fetch_array($result);
            // echo ($line['item_image']);
        }

  ?>   
         

<!---------end---------- php --------end---------->

<!---------------------- details --------------------->

<div class="container m-5">
  <div class="row">
    <div class="col-sm">
      <!-- One of three columns -->
    </div>
    <div class="col-sm">
        <?php echo "<img class= \"shadow\" src='upload/$line[item_image]' width=\"320\" height=\"180\">"; ?>
        <h2 class="text-dark my-3"><b><?php echo $line['item_name']; ?></b></h2>
        <h4 class="text-dark my-2">Available Quantity :  <b class="text-success"><?php echo $line['available_quantity']; ?></b></h4>
        <h4 class="text-dark my-2">Item Price :  <b class="text-danger">Rs. <?php echo $line['item_price']; ?>.00/=</b></h4>
        <h6 class="text-dark my-2">Seller Name :  <?php echo $line['Name']; ?></h6>
        <h6 class="text-dark my-2">Tel. No :  <?php echo $line['Mobile']; ?></h6>
        <h6 class="text-dark my-2">Seller Email :  <?php echo $line['Email']; ?></h6>
        <h6 class="text-dark my-2">Seller Address :  <?php echo $line['Address']; ?></h6>
    </div>
    <div class="col-sm">
        <h6 class="text-success mb">Description :<br><br><p class="text-secondary"><?php echo $line['item_description']; ?></p></h6> 
    </div>
  </div>
</div>

<!---------end---------- details --------end---------->

    <!-- <script>
        window.onload = function(){

            document.getElementById("download")
            .addEventListener("click",()=> {

            const print = this.document.getElementById("print");
            console.log(print);
            console.log(window);
            html2pdf().from(print).save();
            })
        };
    </script> -->





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>