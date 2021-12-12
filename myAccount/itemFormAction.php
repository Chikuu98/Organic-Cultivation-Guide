<?php session_start(); ?>
<?php

    require_once('../includes/connection.php');
    $uid=($_SESSION['U_ID']);

    if(isset($_POST['submit']))

            //image uploading part
            // $file_name = $_FILES['iimg']['name'];
            // $file_type = $_FILES['iimg']['type'];
            // $file_size = $_FILES['iimg']['size'];
            // $temp_name = $_FILES['iimg']['tmp_name'];
            
            // $upload_to = '../cart/upload/';
            // move_uploaded_file($temp_name, $upload_to . $file_name);

            $file_name = $_POST['file_name'];
            $base64_img = $_POST['cropped_img'];
    
            $image = explode(',', $base64_img);
    
            $upload_img = base64_decode($image[1]);
    
            $file_uploaded = file_put_contents('../cart/upload/' . $file_name, $upload_img);


    {
        if(empty($_POST['item_name']) || empty($_POST['quantity']) || empty($_POST['price']) || empty($_POST['description']) )
        {
            header("location:addItem.php?empty");
            exit();
        }
        else
        {
            $item_name= mysqli_real_escape_string($con,$_POST['item_name']);
            $quantity= mysqli_real_escape_string($con,$_POST['quantity']);
            $price= mysqli_real_escape_string($con,$_POST['price']);
            $description= mysqli_real_escape_string($con,$_POST['description']);
            $img= mysqli_real_escape_string($con,$_POST['file_name']);
            

            $query = "select * from itemtb where item_name='".$item_name."'";
            $result = mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                header("location:addItem.php?added");
                exit();
            }
            else
            {
                $query = " insert into itemtb (item_name,available_quantity,item_price,item_description,item_image,u_id) values ('$item_name', '$quantity', '$price', '$description', '$img', '$uid')";
                $result = mysqli_query($con,$query);
                header("location:addItem.php?success");
                exit();
            }
        }

    }
    
    ?>