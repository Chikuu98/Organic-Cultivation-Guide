<?php require_once('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card bg light mt-5">
                <div class="card-title bg-success text-white mt-5">
                    <h3 class="text-center py-2">Sign Up Form</h3>
                </div>

                    <!-- --------Display Empty fields------ -->
                <?php

                    if(isset($_GET['empty']))
                    {
                        $Message=$_GET['empty'];
                        $Message=" Please Fill in the Blanks ";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                    <?php        
                    }
                ?>

                    <!-- --------Invalid Characters------ -->
                    <?php

                    if(isset($_GET['Invalid']))
                    {
                        $Message=$_GET['Invalid'];
                        $Message=" Invalid input ";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                    <?php        
                    }
                    ?>
                    <!-- --------Invalid Email------ -->
                    <?php

                    if(isset($_GET['Email']))
                    {
                        $Message=$_GET['Email'];
                        $Message=" Invalid Email Address ";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                    <?php        
                    }
                    ?>

                     <!-- --------User already exist------ -->
                     <?php

                    if(isset($_GET['User']))
                    {
                        $Message=$_GET['User'];
                        $Message=" User already exist ";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                    <?php        
                    }
                    ?>

                     <!-- --------Email Address Already Exist------ -->
                     <?php

                        if(isset($_GET['Email1']))
                        {
                            $Message=$_GET['Email1'];
                            $Message=" Email Address Already Exist ";
                        ?>
                            <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                        <?php        
                        }
                        ?>
                    <!-- --------registration successed------ -->
                    <?php

                    if(isset($_GET['success']))
                    {
                        $Message=$_GET['success'];
                        $Message=" User registered successfully ";
                    ?>
                        <div class="alert alert-success text-center"><?php echo $Message ?></div>
                    <?php        
                    }
                    ?>    

                <div class="card-body">
                    <form action="includes/signup.php" method="POST">
                        <input type="text" name="Name" placeholder="Name" class="form-control my-2">
                        <input type="text" name="Email" placeholder="Email" class="form-control my-2">
                        <input type="text" name="Address" placeholder="Address" class="form-control my-2">
                        <input type="Number" name="Mobile" placeholder="Mobile" class="form-control my-2">
                        <input type="Number" name="NIC_No" placeholder="National ID" class="form-control my-2">
                        <input type="password" name="Password" placeholder="Password" class="form-control">
                        <button class="btn btn-success mt-4" name="signup">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>