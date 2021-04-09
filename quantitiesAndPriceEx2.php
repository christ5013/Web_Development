<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <title>Best Deal Purchase</title>
</head>
<body>
   <div class="container p-3 my-5 bg-dark text-white" style="width:800px; height:500px">
<br>
<center>
<h2>There are two deals of an item to buy. The quantities and prices of the item are given below. 
Write a program in PHP to find the best deal to purchase the item.</h2>
</center>
<br>
<hr>
<?php 

$quantity1 = 70;
$quantity2 = 100;
$price1 = 35;
$price2 = 30;

Echo 'quantity1 = 70 <br> quantity2 = 100 <br> price1 = 35 <br> price2 = 30 <br><br>';

 if ($price1* $quantity1 < $price2*$quantity2){
    echo "<center><h4>Best Deal is Price 1 which is $price1 with the quantity of $quantity1 <h4>";
 }else{
     echo "<center> <h4>Best Deal is Price 2 which is $price2 with the quantity of $quantity2<h4>";
 }
?>
</div>
</body>
</html>
