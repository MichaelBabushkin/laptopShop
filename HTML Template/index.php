<?php
// include header.php file
include('header.php');
?>

        <!-- Owl-carousel -->
        <section id="banner-area">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="./assets/dell-banner.jpg" alt="asus zenbook image">
                </div>
                <div class="item">
                    <img src="./assets/Banner_Macbook.jpg" alt="apple macbook image">
                </div>
                <div class="item">
                    <img src="./assets/Banner_Surfacebook.jpg" alt="microsoft surfacebook image">
                </div>
            </div>
        </section>
        <!-- END Owl-carousel -->

        <!-- Top Sale -->
        <section id="top-sale">
            <div class="container py-5">
                <h4 class="font-rubik font-size-20">Best Sellers</h4>
                <hr>
                <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/hp1.jpg" alt="product 1" class="img-fluid"> </a>
                            <div class="text-center">
                                <h6 class="py-2">HP - 2-in-1 14" Touch-Screen Chromebook - Intel Celeron - 4GB Memory -
                                    32GB eMMC Flash Memory - Ceramic White</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$319.00</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/apple2.jpg" alt="product 2" class="img-fluid"> </a>
                            <div class="text-center">
                                <h6 class="py-2">Apple - MacBook Air 13.3" Laptop with Touch ID - Intel Core i3 - 8GB
                                    Memory - 256GB Solid State Drive (Latest Model) - Space Gray</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$950.00</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/asus3.jpg" alt="product 3" class="img-fluid"> </a>
                            <div class="text-center">
                                <h6 class="py-2">ASUS - ROG Strix G15 15.6" Gaming Laptop - Intel Core i7 - 8GB Memory -
                                    NVIDIA GeForce GTX 1650 Ti - 512GB SSD - Electro Punk</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$999.00</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/asus-zenbook4.jpg" alt="product 4"
                                    class="img-fluid"> </a>
                            <div class="text-center">
                                <h6 class="py-2">ASUS - Zenbook 14" Laptop - AMD Ryzen 5 - 8GB Memory - NVIDIA GeForce
                                    MX350 - 256GB SSD - Light Gray</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$549.00</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/hp-pavilion5.jpg" alt="product 5" class="img-fluid">
                            </a>
                            <div class="text-center">
                                <h6 class="py-2">HP - Pavilion x360 2-in-1 14" Touch-Screen Laptop - Intel Core i5 - 8GB
                                    Memory - 256GB SSD - Luminous Gold</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$750.00</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end owl carousel -->

            </div>
        </section>

        <!-- END Top Sale -->

        <!-- Special Price -->
        <section id="special-price">
            <div class="container">
                <h4 class="font-rubik font-size-20">Choose Your Laptop </h4>
                <div id="filters" class="button-group text-right">
                    <button class="btn is-checked" data-filter="*">All Brands</button>
                    <button class="btn" data-filter=".Apple">Apple</button>
                    <button class="btn" data-filter=".Hp">HP</button>
                    <button class="btn" data-filter=".Asus">Asus</button>
                </div>

                <div class="grid">
                    <div class="grid-item Apple border">
                        <div class="item py-2" style="width: 218px;">
                            <div class="product font-rale">
                                <a href="#"><img src="./assets/products/apple2.jpg" alt="product 2" class="img-fluid">
                                </a>
                                <div class="text-center">
                                    <h6 class="py-2">Apple - MacBook Air 13.3" Laptop with Touch ID - Intel Core i3 -
                                        8GB
                                        Memory - 256GB Solid State Drive (Latest Model) - Space Gray</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$950.00</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Hp border">
                        <div class="item py-2 " style="width: 218px;">
                            <div class="product font-rale">
                                <a href="#"><img src="./assets/products/hp1.jpg" alt="product 2" class="img-fluid"> </a>
                                <div class="text-center">
                                    <h6 class="py-2">HP - 2-in-1 14" Touch-Screen Chromebook - Intel Celeron - 4GB
                                        Memory -
                                        32GB eMMC Flash Memory - Ceramic White</h6>>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$319.00</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item Asus border">
                        <div class="item py-2" style="width: 218px;">
                            <div class="product font-rale">
                                <a href="#"><img src="./assets/products/asus3.jpg" alt="product 3" class="img-fluid">
                                </a>
                                <div class="text-center">
                                    <h6 class="py-2">ASUS - ROG Strix G15 15.6" Gaming Laptop - Intel Core i7 - 8GB
                                        Memory -
                                        NVIDIA GeForce GTX 1650 Ti - 512GB SSD - Electro Punk</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$999.00</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Asus border">
                        <div class="item py-2" style="width: 218px;">
                            <div class="product font-rale">
                                <a href="#"><img src="./assets/products/asus3.jpg" alt="product 3" class="img-fluid">
                                </a>
                                <div class="text-center">
                                    <h6 class="py-2">ASUS - ROG Strix G15 15.6" Gaming Laptop - Intel Core i7 - 8GB
                                        Memory -
                                        NVIDIA GeForce GTX 1650 Ti - 512GB SSD - Electro Punk</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$999.00</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Asus border">
                        <div class="item py-2" style="width: 218px;">
                            <div class="product font-rale">
                                <a href="#"><img src="./assets/products/asus3.jpg" alt="product 3" class="img-fluid">
                                </a>
                                <div class="text-center">
                                    <h6 class="py-2">ASUS - ROG Strix G15 15.6" Gaming Laptop - Intel Core i7 - 8GB
                                        Memory -
                                        NVIDIA GeForce GTX 1650 Ti - 512GB SSD - Electro Punk</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$999.00</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Apple border">
                        <div class="item py-2" style="width: 218px;">
                            <div class="product font-rale">
                                <a href="#"><img src="./assets/products/apple2.jpg" alt="product 2" class="img-fluid">
                                </a>
                                <div class="text-center">
                                    <h6 class="py-2">Apple - MacBook Air 13.3" Laptop with Touch ID - Intel Core i3 -
                                        8GB
                                        Memory - 256GB Solid State Drive (Latest Model) - Space Gray</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$950.00</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Hp border">
                        <div class="item py-2 " style="width: 218px;">
                            <div class="product font-rale">
                                <a href="#"><img src="./assets/products/hp1.jpg" alt="product 2" class="img-fluid"> </a>
                                <div class="text-center">
                                    <h6 class="py-2">HP - 2-in-1 14" Touch-Screen Chromebook - Intel Celeron - 4GB
                                        Memory -
                                        32GB eMMC Flash Memory - Ceramic White</h6>>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$319.00</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item Asus border">
                        <div class="item py-2" style="width: 218px;">
                            <div class="product font-rale">
                                <a href="#"><img src="./assets/products/asus3.jpg" alt="product 3" class="img-fluid">
                                </a>
                                <div class="text-center">
                                    <h6 class="py-2">ASUS - ROG Strix G15 15.6" Gaming Laptop - Intel Core i7 - 8GB
                                        Memory -
                                        NVIDIA GeForce GTX 1650 Ti - 512GB SSD - Electro Punk</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$999.00</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Asus border">
                        <div class="item py-2" style="width: 218px;">
                            <div class="product font-rale">
                                <a href="#"><img src="./assets/products/asus3.jpg" alt="product 3" class="img-fluid">
                                </a>
                                <div class="text-center">
                                    <h6 class="py-2">ASUS - ROG Strix G15 15.6" Gaming Laptop - Intel Core i7 - 8GB
                                        Memory -
                                        NVIDIA GeForce GTX 1650 Ti - 512GB SSD - Electro Punk</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$999.00</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Asus border">
                        <div class="item py-2" style="width: 218px;">
                            <div class="product font-rale">
                                <a href="#"><img src="./assets/products/asus3.jpg" alt="product 3" class="img-fluid">
                                </a>
                                <div class="text-center">
                                    <h6 class="py-2">ASUS - ROG Strix G15 15.6" Gaming Laptop - Intel Core i7 - 8GB
                                        Memory -
                                        NVIDIA GeForce GTX 1650 Ti - 512GB SSD - Electro Punk</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$999.00</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- END Special Price -->

        <!-- Banner Ads -->
        <section id="banner_adds">
            <div class="container py-5">
                <img src="./assets/laptop-banner1.png" alt="Banner1" class="img-fluid" style="width: 49%;">
                <img src="./assets/laptop-banner2.jpg" alt="Banner1" class="img-fluid" style="width: 49%;">

            </div>

        </section>

        <!--END Banner Ads -->

        <!-- New Laptops -->
        <section id="new-phones">
            <div class="container py-5">
                <h4 class="font-rubik font-size-20">New Laptops</h4>
                <hr>
                <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/hp1.jpg" alt="product 1" class="img-fluid"> </a>
                            <div class="text-center">
                                <h6 class="py-2">HP - 2-in-1 14" Touch-Screen Chromebook - Intel Celeron - 4GB Memory -
                                    32GB eMMC Flash Memory - Ceramic White</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$319.00</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/apple2.jpg" alt="product 2" class="img-fluid"> </a>
                            <div class="text-center">
                                <h6 class="py-2">Apple - MacBook Air 13.3" Laptop with Touch ID - Intel Core i3 - 8GB
                                    Memory - 256GB Solid State Drive (Latest Model) - Space Gray</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$950.00</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/asus3.jpg" alt="product 3" class="img-fluid"> </a>
                            <div class="text-center">
                                <h6 class="py-2">ASUS - ROG Strix G15 15.6" Gaming Laptop - Intel Core i7 - 8GB Memory -
                                    NVIDIA GeForce GTX 1650 Ti - 512GB SSD - Electro Punk</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$999.00</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/asus-zenbook4.jpg" alt="product 4"
                                    class="img-fluid"> </a>
                            <div class="text-center">
                                <h6 class="py-2">ASUS - Zenbook 14" Laptop - AMD Ryzen 5 - 8GB Memory - NVIDIA GeForce
                                    MX350 - 256GB SSD - Light Gray</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$549.00</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/hp-pavilion5.jpg" alt="product 5" class="img-fluid">
                            </a>
                            <div class="text-center">
                                <h6 class="py-2">HP - Pavilion x360 2-in-1 14" Touch-Screen Laptop - Intel Core i5 - 8GB
                                    Memory - 256GB SSD - Luminous Gold</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$750.00</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end owl carousel -->

            </div>
        </section>

        <!-- End New Laptops -->

        <!-- Latest Blogs -->
        <section id="blogs">
            <div class="container py-4">
                <h4 class="font-rubik font-size-20">Latest Blogs</h4>
                <hr>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card-border-0 font-rale mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size-16">Laptops for every budget</h5>
                            <img src="./assets/blog/blog1.jpg" alt="cart-image" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Learn how to buy the best possible
                                laptop for every budget</p>
                            <a href="#" class="color-second text-left">Click to read more...</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-border-0 font-rale mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size-16">Best Laptops</h5>
                            <img src="./assets/blog/blog2.jpg" alt="cart-image" class="card-img-top"
                                style="min-height: 191.64px;">
                            <p class="card-text font-size-14 text-black-50 py-1">Learn what are the best laptops right
                                now in the market</p>
                            <a href="#" class="color-second text-left">Click to read more...</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-border-0 font-rale mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size-16">Laptops For Students</h5>
                            <img src="./assets/blog/blog3.jpg" alt="cart-image" class="card-img-top"
                                style="min-height: 191.64px;">
                            <p class="card-text font-size-14 text-black-50 py-1">Learn how to buy the best possible
                                laptop for school/university</p>
                            <a href="#" class="color-second text-left" id="blog-3-link">Click to read more...</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Latest Blogs -->

    </main>

    <!-- end main -->

    <!-- start footer -->
    <footer id="footer" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <h4 class="font-rubik font-size-20">Laptop Shop</h4>
                    <p class="font-size-14 font-rale text-white-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo iure unde accusantium odio, aut totam maiores, illo nobis, doloribus sed inventore dolor! Perspiciatis recusandae alias rerum vitae sequi odio eum?</p>
                </div>
                <div class="col-lg-4 col-12">
                    <h4 class="font-rubik font-size-20">NewsLetter</h4>
                    <form class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                        </div>
                    </form>

                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="font-rubik font-size-20">Information</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delievery Information</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms</a>
                    </div>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="font-rubik font-size-20">Account</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wishlist</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">NewsLetter</a>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <div class="copyright text-center bg-dark text-white py-2">
        <p class="font-rale font-size-14">&copy; Copyright 2020. Designed By Michael Babushkin</p>
    </div>

    <!-- end footer -->


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

    <!-- Owl-Carousel Ja -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>

    <!-- Isotope Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
        integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
        crossorigin="anonymous"></script>

    <!-- Custom Javascript -->
    <script src="./index.js"></script>

</body>

</html>