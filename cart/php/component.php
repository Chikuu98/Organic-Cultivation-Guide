<?php

function component($itemname, $itemprice, $itemimg, $itemid, $itemdescptn){
    $price=$itemprice+($itemprice/5);
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"cindex.php\" method=\"post\">
                    <div class=\"card shadow my-3\">
                        <div>
                            <img src=\"./upload/$itemimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
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
    $element = "
    <form action=\"cart.php?action=remove&id=$itemid\" method=\"post\" class=\"cart-items\">
                    <div class=\" border rounded shadow\">
                        <div class=\"row bg-white my-2 mx-2 \">
                            <div class=\"col-md-3 pl-0\">
                                <img src=\"./upload/$itemimg\" alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$itemname</h5>
                                <small class=\"text-secondary\">Seller: chikuu98</small>
                                <h5>Rs.<span id=\"i_price\">$itemprice</span>.00<input type=\"hidden\" class=\"iprice\" value=\"$itemprice\"></h5>
                                <a href=\"https://www.w3schools.com?id=$itemid\" class=\"btn btn-success\">More Details</a>
                                <button type=\"submit\" class=\"btn btn-danger mx-2 my-1 shadow\" name=\"remove\">Remove</button>
                            </div>
                            
                            <div class=\"col-md-3 mt-1 \">
                                <small class=\"text-secondary text-center\">Available quantity = $qtt</small>
                                <div >
                                    
                                <p class=\"text-secondary text-center\"><small>quantity :
                                </small><input type=\"number\" value=1 min=\"1\" max=$qtt name=\"qtt\"  oninput=\"subTotal()\"  class=\"iquantity text-center form-control w-75 d-inline shadow\"></p>
                                <h ><small class=\"ml-3 text-success\"><b>Subtotal :Rs.<span class=\"itotal\" id=\"total\"></span>.00</b></small></h6>
                                          
                                </div>
                            </div>
                                                     
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
