<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter last number to count to:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
<?php
    // for loop = repeat some code a certain # of times

    $counter = $_POST["counter"];

    for($i = 1;$i <= $counter; $i++){
        echo $i . "<br>";
    }
?>
</html>
