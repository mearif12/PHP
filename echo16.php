<?php
    // function = write some code once,reuse when you need it,
    //            type () after function name to invoke.
    //            Ex : add() , subtract() , divide() .

   function greet($name,$num){
     echo"Hello, {$name} {$num} <br>";
   }  
   greet("Bob",34);
   greet("Andrew",45);

   function is_even($number){
     $res = $number % 2;
     return $res;
   }

   echo is_even(12); //0
?>
