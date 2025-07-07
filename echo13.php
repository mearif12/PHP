<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="country">Country :</label>
        <input type="text" name="country">
        <input type="submit" value="submit">
    </form>
</body>
<?php
/*
    //associative array  -> an array made of key => value pairs.

    $capitals = array("USA"=>"Washington D.C","Japan"=> "Tokyo","India"=>"New Delhi");

    // echo $capitals["USA"];
    // $capitals["India"] = "Delhi";
    // $capitals["BD"] = "Dhaka";

    // array_pop($capitals);
    // array_shift($capitals);

    // $keys = array_keys($capitals);
    // $values = array_values($capitals);

    // $capitals = array_flip($capitals); //keys will be values and values will be keys.
    // $capitals = array_reverse($capitals);

    echo count($capitals)."<br>";

    foreach($capitals as $key => $value){
        echo "$key : $value <br>";
    }
*/    

    $capitals = array("USA" => "Washington D.C","Japan"=>"Tokyo","India"=>"New Delhi","Russia"=>"Moscow");

    $country = $_POST["country"];

    $capital = $capitals[$country];

    echo "The capital of {$country} is {$capital}";
?>
</html>
