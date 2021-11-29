<?php

    require_once('connection.php');

    if(isset($_POST['signup']))
    {
        if(empty($_POST['Name']) || empty($_POST['Email']) || empty($_POST['Address']) || empty($_POST['Mobile']) || empty($_POST['NIC_No']) || empty($_POST['Password']))
        {
            header("location:../signupdesign.php?empty");
            exit();
        }
        else
        {
            $Name= mysqli_real_escape_string($con,$_POST['Name']);
            $Email= mysqli_real_escape_string($con,$_POST['Email']);
            $Address= mysqli_real_escape_string($con,$_POST['Address']);
            $Mobile= mysqli_real_escape_string($con,$_POST['Mobile']);
            $NIC_No= mysqli_real_escape_string($con,$_POST['NIC_No']);
            $Password= mysqli_real_escape_string($con,$_POST['Password']);

            if(!preg_match("/^[a-zA-Z]*$/",$Name))
            {
                header("location:../signupdesign.php?Invalid");
                exit();
            }
            else
            {
                if(!filter_var($Email,FILTER_VALIDATE_EMAIL))
                {
                    header("location:../signupdesign.php?Email");
                    exit();
                }
                else
                {
                    $query = "select * from userinfo where NIC='".$NIC_No."'";
                    $result = mysqli_query($con,$query);

                    if(mysqli_fetch_assoc($result))
                    {
                        header("location:../signupdesign.php?User");
                        exit();
                    }
                    else
                    {
                        $query = "select * from userinfo where Email='".$Email."'";
                        $result = mysqli_query($con,$query);

                        if(mysqli_fetch_assoc($result))
                        {
                            header("location:../signupdesign.php?Email1");
                            exit();
                        }
                        else
                        {
                            $Hash = password_hash($Password, PASSWORD_DEFAULT);
                            $query = " insert into userinfo (Name,Email,Address,Mobile,NIC,Password) values ('$Name', '$Email', '$Address', '$Mobile', '$NIC_No', '$Hash')";
                            $result = mysqli_query($con,$query);
                            header("location:../signupdesign.php?success");
                            exit();
                        }
                    }
                }
            }
        }
    }
    else
    {
        header("location: ../index.php");
        exit();
    }
    
    ?>