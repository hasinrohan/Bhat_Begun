<?php

$con = mysqli_connect("localhost", "root", "", "bhat_begun");

if (!$con) {
    die("Connection Error: " . mysqli_connect_error());
}

echo "Connection successful";

$product_query = "Select * from products";
$product_result = mysqli_query($con, $product_query);

$categories_query = "Select * from categories";
$categories_result = mysqli_query($con, $categories_query);
?>
