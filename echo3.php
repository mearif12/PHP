<?php 
 
 //Arithmetic operators -> +, - , * , / , **, %.

 $x = 5;
 $y = 2;
 $z = null;

// $z = $x + $y;
// $z = $x - $y;
// $z = $x * $y;
// $z = $x / $y;
   $z = $x % $y;
 echo $z . "<br>";

 //Increment/decrement operators -> ++ , -- .

  $sum = 10;
  $sum++;
  echo $sum . "<br>";

  $count = 9;
  $count += 4;
  echo $count . "<br>";

 //Operator precedence -> () , ** , * / % , + - .

  $total = 1 + 2 - 3 * 4 / 5 ** 6;
  echo $total;
?> 
