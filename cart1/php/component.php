<?php

function component($itemname, $itemprice, $itemimg, $itemid, $itemdescptn){
    $price=$itemprice+100;
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"cindex.php\" method=\"post\">
                    <div class=\"card shadow my-3\">
                        <div>
                            <img src=\"$itemimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$itemname</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                            $itemdescptn
                            </p>
                            <h5>
                                <small><s class=\"text-secondary\">Rs.$price.00</s></small>
                                <span class=\"price text-success\">Rs.$itemprice.00</span>
                            </h5>
                            <button type=\"submit\" class=\"btn btn-success my-3 shadow\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='itemid' value='$itemid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($itemimg, $itemname, $itemprice, $itemid, $qtt){
   
    if (isset($_SESSION['cart'])){
    
    $cart_price = $itemprice * $qtt ;
}else{
    $cart_price=$itemprice;
}
    
    $element = "
    
    <form action=\"cart.php?action=remove&id=$itemid\" method=\"post\" class=\"cart-items\">
                    <div class=\"shadow border rounded\">
                        <div class=\"row bg-white my-2 mx-2\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$itemimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$itemname</h5>
                                <small class=\"text-secondary\">Seller: chikuu98</small>
                                <h5 class=\"pt-2\">Rs.$cart_price.00</h5>
                                <button type=\"submit\" class=\"btn btn-success my-1 shadow\">More Details</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2 my-1 shadow\" name=\"remove\">Remove</button>
                            </div>
                            
                            <div class=\"col-md-3 py-3 shadow\">
                                <small class=\"text-secondary text-center\">Available quantity = $qtt</small>
                                <div class=\"py-3 ml-4 mt-2\">
                                    
                                    <input type=\"number\" min=\"1\" max=$qtt name=\"qtt\" value=1 class=\" text-center form-control w-75 d-inline shadow\">
                                   
                                </div>
                            </div>
                                                     
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

// <form > <input type='text' name='qty' id='qty' />
// <input type='button' name='add' onclick='javascript:document.getElementById("qty").value++;' value='+'/> 
// <input type='button' name='subtract' onclick='javascript: document.getElementById("qty").value--;' value='-'/> 
// </form>

// <input type="number" name="quantity" min="1" max="99">