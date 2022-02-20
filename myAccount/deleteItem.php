<?php session_start(); ?>
<?php

    require_once('../includes/connection.php');
    if(isset($_POST['deleteI'])){
        $d_id=$_GET['d_id'];
        $query2 ="DELETE FROM `itemtb` WHERE item_id= $d_id";
        $result2 = mysqli_query($con,$query2);
        header("location:addItem.php?deleted");
    }
    
    ?>