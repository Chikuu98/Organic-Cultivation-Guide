<?php

    require_once('header.php');
    if(isset($_GET['Well']))
    {

        if($_SESSION['U_ID'])
        {
            ?>
            <br><br><br><br>
            <div class="container mt-5">

            <div class="row">

                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-header bg-success text-white">
                            <div class="row align-items-center">
                                <div class="col">
                                    <i class="fas fa-shopping-cart fa-4x"></i>
                                </div>
                                <div class="col">
                                    <h3 class="display-3">01</h3>
                                </div>
                                <h5 class="my-3">EcoJEE Shop</h5>
                            </div>

                        </div>
                        <div class="card-footer">
                            <h5>
                                <a href="cart/cindex.php" class="text-success">Go to Shop <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-header bg-primary text-white">
                            <div class="row align-items-center">
                                <div class="col">
                                    <i class="fab fa-blogger-b fa-4x"></i>
                                </div>
                                <div class="col">
                                    <h3 class="display-3">02</h3>
                                </div>
                                <h5 class="my-3">Blog</h5>
                            </div>

                        </div>
                        <div class="card-footer">
                            <h5>
                                <a href="#" class="text-primary">View blog <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-header bg-info text-white">
                            <div class="row align-items-center">
                                <div class="col">
                                    <i class="fa fa-newspaper fa-4x"></i>
                                </div>
                                <div class="col">
                                    <h3 class="display-3">03</h3>
                                </div>
                                <h5 class="my-3">News & Instructions</h5>
                            </div>

                        </div>
                        <div class="card-footer">
                            <h5>
                                <a href="#" class="text-info">View News <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-white">
                            <div class="row align-items-center">
                                <div class="col">
                                    <i class="fas fa-address-book fa-4x"></i>
                                </div>
                                <div class="col">
                                    <h3 class="display-3">04</h3>
                                </div>
                                <h5 class="my-3">My Account</h5>
                            </div>

                        </div>
                        <div class="card-footer">
                            <h5>
                                <a href="#" class="text-danger">Go to Account <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </h5>
                        </div>
                    </div>
                </div>


            </div>
            </div>

            <?php
        }
        else
        {

        }
    }
    else
    {
        header("location: index.php");
        exit();
    }

?>