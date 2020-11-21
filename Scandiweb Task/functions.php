<?php
//require MySQL connection
require ('database/dbConnection.php');

//require Product CLass
require ('database/product.php');
// DBController Object
$db=new dbConnection();

// Product object
$product=new product($db);
