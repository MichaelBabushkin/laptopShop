<?php
ob_start();
// include header.php file
include('header.php');
?>

<?php
// include banner area file
include('Template/_banner-area.php');

// include top sale file
include('Template/_top-sale.php');

// include special price file
include('Template/_special-price.php');

// include banner ads file
include('Template/_banner-adds.php');

// include new laptops file
include('Template/_new-phones.php');

// include blogs file
include('Template/_blogs.php');

?>


<?php
// include footer.php file
include('footer.php');
?>