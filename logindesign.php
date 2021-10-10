<?php require_once('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card bg light mt-5">
                <div class="card-title bg-success text-white mt-5">
                    <h3 class="text-center py-2">Login Form</h3>
                </div>

                <!-----Cheking input fields empty?----->
                <?php

                    if(isset($_GET['empty']))
                    {
                        $Message=$_GET['empty'];
                        $Message= " Please fill in the blanks ";
                ?>
                    <div class="alert alert-danger text-center"><?php echo $Message ?></div>   
                <?php         
                    }
                ?>

                <!--------Invalid Email------->
                <?php

                    if(isset($_GET['e_invalid']))
                    {
                        $Message=$_GET['e_invalid'];
                        $Message= " Invalid Email Address ";
                ?>
                    <div class="alert alert-danger text-center"><?php echo $Message ?></div>   
                <?php         
                    }
                ?>
                <!--------Invalid Password------->
                <?php

                    if(isset($_GET['p_invalid']))
                    {
                        $Message=$_GET['p_invalid'];
                        $Message= " Invalid Password ";
                ?>
                    <div class="alert alert-danger text-center"><?php echo $Message ?></div>   
                <?php         
                    }
                ?>


                <div class="card-body">
                    <form action="includes/login.php" method="POST">
                        <input type="text" name="Email" placeholder="Enter your e-mail" class="form-control my-3">
                        <input type="password" name="password" placeholder="Enter your password" class="form-control">
                        <button class="btn btn-success mt-4" name="login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>