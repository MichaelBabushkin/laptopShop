<!-- Shopping cart section  -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteWishlist($_POST['item_id']);
    }

    if(isset($_POST['cart-submit'])){
        $Cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
    }
}
?>
        <section id="cart" class="py-3 mb-5">
            <div class="container-fluid w-75">
                <h5 class="font-baloo font-size-20">Wishlist</h5>

                <!-- shopping cart items -->
                <div class="row">
                    <div class="col-sm-9">
                        <?php
                        foreach ($product->getData('wishlist') as $item): 
                            $cart=$product->getProduct($item['item_id']);
                           $subTotal[]= array_map(function($item){                        
                        ?>

                        <!-- cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image']??"./assets/products/apple2.jpg" ?>"
                                    style="height: 120px;" alt="cart item" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name']??"Unknown"; ?></h5>
                                <small>By <?php echo $item['item_brand']??"Brand"; ?></small>
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rale font-size-14">Average Rating 4.7 |733 Reviews</a>
                                </div>
                                <!-- item quantity -->
                                <div class="qty d-flex pt-2">
 
                                    <form method="POST">
                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id']??0; ?>">
                                        <button type="submit" name="delete-cart-submit"
                                            class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                    </form>
                                    <form method="POST">
                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id']??0; ?>">
                                        <button type="submit" name="cart-submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">Add to Cart</button>

                                    </form>
                                </div>
                                <!-- END item quantity -->
                            </div>
                            <div class="col-sm-2 text-right">
                                <div class="font-size20 text-danger font-baloo">
                                    $<span class="product_price" data-id="<?php echo $item['item_id']??0; ?>"><?php echo $item['item_price']??0; ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- END cart item -->
                        <?php
                        return $item['item_price'];
                            },$cart);  //closing array_map function
                        endforeach;
                        ?>

                    </div>

                </div>

                <!-- END shopping cart items -->
            </div>

        </section>
        <!-- END Shopping cart section -->