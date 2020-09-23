       <!-- Product -->
       <?php  
        $item_id = $_GET['item_id']??1;
        foreach($product->getData() as $item):
            if( $item['item_id'] == $item_id):
       ?>
       <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">

                        <img src="<?php echo $item['item_image']??"./assets/products/apple2.jpg"?>" alt="product-image" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Proceed To Buy</button>
                            </div>
                            <div class="col">
                            <?php
                            if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-14">In the Cart</button>';
                            }else{
                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-14 form-control">Add to Cart</button>';
                            }
                            ?>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name']?? "Unknown" ?></h5>
                        <small>By <?php echo $item['item_brand']?? "Unknown" ?></small>

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
                        <hr class="m-0">

                        <!-- Product price -->
                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>Price:</td>
                                <td><strike>$999</strike></td>
                            </tr>
                            <tr class="font-rale font-size-18">
                                <td>Sale Price:</td>
                                <td class="font-size-18 text-danger">$<big><?php echo $item['item_price']?? 0 ?></big></td>
                            </tr>
                            <tr class="font-rale font-size-18">
                                <td>You Save:</td>
                                <td class="font-size-16 text-danger">$<big>50</big></td>
                            </tr>
                        </table>
                        <!-- END Product price -->

                        <!-- Policy -->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12"><big>10</big> Days <br>Replacement</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck border p-3 rounded pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">Free <br>Shipping</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12"><big>1</big> Year <br>Warranty</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Policy -->
                        <hr>

                        <!-- Order Details -->
                        <div id="order-details" class="font-rale d-flex flex-column text-dark">
                            <small>FREE Shipping: Get it by Thu, Aug 6</small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliever to
                                Haifa,Israel</small>
                        </div>
                        <!-- END Order Details -->
                        <div class="row">
                            <div class="col-6">
                                <!--color  -->
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-baloo">Color:</h6>
                                        <div class="p-3" style="background: url(./assets/products/colors/macbook_air13_gold.jpg); background-repeat: no-repeat ;"><button
                                                class="btn font-size-14"></button></div>
                                        <div class="p-3" style="background: url(./assets/products/colors/macbook_air13_silver.jpg); background-repeat: no-repeat ;"><button
                                                class="btn font-size-14"></button></div>
                                    </div>
                                </div>
                                <!--END color  -->
                            </div>
                            <div class="col-6">
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">Qty:</h6>
                                    <div class="px-4 d-flex font-rale">
                                        <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                        <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12">
                        <h6 class="font-rubik">Product Description</h6>
                        <hr>
                        <p class="font-rale font-size-14">Apple - MacBook Air 13.3" Laptop with Touch ID - Intel Core i5
                            - 8GB Memory - 512GB Solid State Drive (Latest Model) - Space Gray</p>
                        <p class="font-rale font-size-16">About this item:</p>
                        <ul>
                            <li> Stunning 13.3-inch Retina display with True Tone technology</li>
                            <li> Backlit Magic Keyboard and Touch ID</li>
                            <li>Tenth-generation Intel Core i5 processor</li>
                            <li> Intel Iris Plus Graphics</li>
                            <li>Fast SSD storage</li>
                            <li>8GB of memory</li>
                            <li> Stereo speakers with wider stereo sound</li>
                            <li> Two Thunderbolt 3 (USB-C) ports</li>
                            <li>Up to 11 hours of battery life</li>
                            <li>Force Touch trackpad</li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <!-- END Product -->
        <?php 
        endif;
        endforeach;
        ?>