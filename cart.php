<?php
ob_start();

// include header.php file
include('header.php');
?>

<?php 

// include cart file
count($product->getData('cart'))?include('Template/_cart-template.php'):include('Template/notFound/_cart_notFound.php');


// include cart file
count($product->getData('wishlist'))?include('Template/_wishlist_template.php'):include('Template/notFound/_wishlist_notFound.php');

// include new Laptop file
include('Template/_top-sale.php');

?>

<?php
// include footer.php file
include('footer.php');
?>