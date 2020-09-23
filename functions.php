<?php

//Require MySQL Connection
require("database/DBController.php");

//Require Product Connection
require("database/Product.php");

//Require Cart Connection
require("database/Cart.php");


//DBController object
$db= new DBController(); 

//Product object
$product= new Product($db); 
$product_shuffle = $product->getData();

//Cart object
$Cart= new Cart($db); 


