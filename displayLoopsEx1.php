
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Display Using Loops</title>
</head>
<body>
<div class="container p-3 my-5 bg-dark text-white" style="width:600px; height:600px">
<center>

   <h3>Json Data Display using Loops</h3>
</center>
<br>
<hr>
    <?php
        echo "<center>";
        $data = array(
            "Student1" => array(
                "Name" => "John Carg",
                "Age" => "17",
                "School" => "Ahlcon Public school",
            ),
            "Student2" => array(
                "Name" => "Smith Soy",
                "Age" => "16",
                "School" => "St. Marie school",
            ),
            "Student3" => array(
                "Name" => "Charle Rena  ",
                "Age" => "16",
                "School" => "St. Columba school",
            )
        );

        $key1 = array_keys($data);
        for($ctr = 0; $ctr < count($data); $ctr++) {
            echo $key1[$ctr] ."<br><br>";
            foreach($data[$key1[$ctr]] as $key2 => $value) {
                echo $key2 . " : " . $value . "<br>";
            }
            echo "<br><br>";
        }   
    ?>
</div>
</body>
</html>
