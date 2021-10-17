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

    <link rel="stylesheet" href="style.css">

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
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25 shadow">
            <div class="pt-4 px-4 my-4 shadow ">
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
                        <button class="btn btn-success ml-4">Order Now</button>
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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>