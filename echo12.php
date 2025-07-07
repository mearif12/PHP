<?php 
     
     // array -> "variable" that can hold more than one value at a time.

     $fruits = array("apple","mango","nut","orange");

     // echo $fruits . "<br>"; //not work as a result dont show everything.

     $fruits[2] = "guava";
     // array_push($fruits,"banana","berry");
     // array_pop($fruits); //remove last one.
     // array_shift($fruits);//remove first one.
     // $reversed = array_reverse($fruits);

     echo count($fruits)."<br>";

     foreach($fruits as $fruit){
        echo $fruit . "<br>";
     }
?>
