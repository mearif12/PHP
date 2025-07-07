<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="index.php" method="post">
      <label for="x">x :</label>
      <input type="text" name="x"> <br><br>
      <label for="y">y :</label>
      <input type="text" name="y"> <br>
      <input type="submit" value="total">

      <br> <br> <br>
      <h3>Circle :</h3>
      <label for="radius">radius :</label>
      <input type="text" name="radius">
      <input type="submit" value="Area">
    </form>
</body>

<?php

   $x = $_POST["x"];

   $y = $_POST["y"];
   
   $total = null;

   //$total = abs($x);
   //$total = round($x);
   //$total = ceil($x);
   //$total = floor($x);
   //$total = sqrt($x);
   //$total = pow($x,$y);
   //$total = max($x,$y);
   //$total = min($x,$y);
   //$total = pi();
   //$total = rand(1,10);

   echo $total;

   $radius = $_POST["radius"];
   $area = pi() * pow($radius,2);

   echo "<br> Area of circle : {$area}";

?>
</html>
