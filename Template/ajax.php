<?php

//Require MySQL Connection
require("../database/DBController.php");

//Require Product Connection
require("../database/Product.php");

//DBController object
$db= new DBController(); 

//Product object
$product= new Product($db); 
$product_shuffle = $product->getData();

if (isset($_POST['itemid'])){
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}

