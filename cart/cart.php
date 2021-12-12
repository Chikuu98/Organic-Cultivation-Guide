<?php

session_start();

require_once ("php/ConnectDb.php");
require_once ("php/component.php");

$db = new ConnectDb("final_project", "itemtb");

// ---remove item in the cart---
if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["itemid"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}
// ---remove all from the cart---
if (isset($_POST['remove_all'])){
    if ($_GET['action'] == 'remove_all'){
                unset($_SESSION['cart']);
                echo "<script>alert('Cart has been cleared...!')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
    }


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="cartFooter.css">

    <!-----html to PDF----->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body class="bg-light">

<?php
    require_once ('php/header.php');
?>

<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <!-------cart items--------->
            <div class="shopping-cart my-3">
                <h5 class="text-success">Your Cart</h5>
                <hr>
                <?php 
                    if (isset($_SESSION['cart'])){
                        $item_id = array_column($_SESSION['cart'], 'itemid');
                        
                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($item_id as $id){
                                if ($row['item_id'] == $id){
                                    cartElement($row['item_image'], $row['item_name'],$row['item_price'], $row['item_id'], $row['available_quantity']);
                                    // echo "<hr>";
                                }
                            }
                        }
                    }else{
                        echo "<h6 class=\"text-warning\">Cart is Empty</h6>";
                    }

                ?>
                <!-- ---remove all from the cart----- -->
                <form method="post" action="cart.php?action=remove_all">
                <button type="submit" name="remove_all" class="btn btn-warning mt-5 shadow">Remove all from your cart</button> 
                </form>

            </div>
        </div>

                  <!-- ----price details---- -->
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25 ">
            <div class="pt-4 px-4 my-4 shadow " id="print">
                <h6 class="text-success text-center"><b>PRICE DETAILS</b></h6>
                <hr>
                <div class="row price-details py-4 my-4 ">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                        ?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6 class="text-danger">Amount Payable</h6>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <h6>Rs.<span id="gtotal"></span>.00</h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6  class="text-danger"><b>Rs.<span id="gtotal2"></span>.00/=</b></h6>
                        <hr>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input ml-1 mt-2" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label ml-4" for="flexCheckChecked">
                        <b class="text-secondary">Cash On Delivery</b>
                        <button class="btn btn-success ml-4" id="download">Print Bill</button>
                    </label>
                    </div>
                </div>
            </div>           
        </div> 
    </div>
</div>

<!-- ----calculate subtotal & grand total---- -->
<script>
    var gt = 0 ;
    var iprice = document.getElementsByClassName("iprice");
    var iquantity = document.getElementsByClassName("iquantity");
    var itotal = document.getElementsByClassName("itotal");
   

    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);
            gt = gt + (iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;
        gtotal2.innerText=gt;
    }
    subTotal();

</script>

<script>
        window.onload = function(){

            document.getElementById("download")
            .addEventListener("click",()=> {

            const print = this.document.getElementById("print");
            console.log(print);
            console.log(window);
            html2pdf().from(print).save();
            })
        };
</script>


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