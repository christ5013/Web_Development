<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Integer to String Conversion</title>
</head>
<body>
<style>
.container{
    width:600px;
}
#number{
    margin-left:10px;
}
</style>
<body>
<div class="container p-5 my-5 bg-dark text-white">
<center>
<h3>Integer to String Conversion</h3>
</center>
<hr>
<br>
<form class="form-inline" method="GET">
  <div class="form-group mx-sm-3 mb-2">
    <label >Input a Numbers: </label>
    <input type="text" class="form-control" id="number" name="number">
  </div>
  <button type="submit" class="btn btn-primary mb-2"  name = "convert">Convert</button>
</form>
<br>
<hr>
<?php
    if(isset($_GET["convert"])){
        $getInput = $_GET['number'];
        echo "<center>";
        for($count = 0;$count <strlen($getInput); $count++){
            // echo $getInput[$count];

            switch ($getInput[$count]){
                case '0':
                    echo "Zero";
                    break;
                case '1':
                     echo "One ";
                    break;
                case '2':
                    echo "Two ";
                    break;
                case '3':
                    echo "Three ";
                    break;
                case '4':
                   echo "Four ";
                    break;
                case '5':
                     echo"Five ";
                    break;
                case '6': 
                    echo "Six ";
                    break;
                case '7':
                    echo "Seven ";
                    break;
                case '8':
                    echo "Eight ";
                    break;
                case '9':
                   echo "Nine ";
                    break;
            }
        }
          
            
            
        }
     
?>
</div>
</body>
</html>