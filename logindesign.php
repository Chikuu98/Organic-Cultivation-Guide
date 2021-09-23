<?php require_once('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card bg light mt-5">
                <div class="card-title bg-success text-white mt-5">
                    <h3 class="text-center py-2">Login Form</h3>
                </div>
                <div class="card-body">
                    <form action="login.php">
                        <input type="text" name="UserName" placeholder="Enter your username" class="form-control my-3">
                        <input type="text" name="password" placeholder="Enter your password" class="form-control">
                        <button class="btn btn-success mt-4" name="login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>