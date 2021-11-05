<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background:linear-gradient(to right, #033115, #19f533,#033115)">
        <a href="cindex.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i> Eco<small>JEE</small> Shop
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-2 cart">
                        
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-light\">$count <small>items in </small><i class=\"fas fa-shopping-cart\"></i></span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-light\">0 <small>items in </small><i class=\"fas fa-shopping-cart\"></i></span>";
                        }   
                        ?>  
                    </h5>
                </a>
                <a href="http://localhost/organic/account.php?Well" class="nav-item nav-link active">
                <h5 class="cart"><i class="fas fa-home mr-5"></i></h5>
                </a>    
            </div>
        </div>

    </nav>
    <style>
        html {
    scroll-behavior: smooth;
}
    </style>
</header>