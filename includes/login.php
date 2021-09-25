<?php
    require_once('connection.php');
    session_start();

    if (isset($_POST['login'])) 
    {
        if(empty($_POST['Email']) || empty($_POST['password']))
        {
            header("location: ../logindesign.php?empty");
            exit();
        }
        else
        {
            $Email = mysqli_real_escape_string($con,$_POST['Email']);
            $Password = mysqli_real_escape_string($con,$_POST['password']);

            $Query = " select *from userinfo where Email='".$Email."' ";
            $result = mysqli_query($con,$Query);

            if($row=mysqli_fetch_assoc($result))
            {
                $HashPass = password_verify($Password,$row['Password']);

                if($HashPass==false)
                {
                        header("location: ../logindesign.php?p_invalid");
                        exit(); 
                }
                elseif($HashPass==true)
                {
                    $_SESSION['U_ID']=$row['ID'];
                    $_SESSION['Name']=$row['Name'];
                    $_SESSION['Email']=$row['Email'];
                    $_SESSION['Address']=$row['Address'];
                    $_SESSION['Mobile']=$row['Mobile'];
                    $_SESSION['NIC']=$row['NIC'];
                    $_SESSION['AccNo']=$row['AccNo'];
                    $_SESSION['Password']=$row['Password'];

                    header("location: ../account.php?Well");
                    exit();
                }
            }
            else
            {
                header("location: ../logindesign.php?e_invalid");
                exit();
            }
        }
    }
    else
    {
        header("location: ../logindesign.php");
        exit();
    }

?>