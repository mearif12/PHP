<?php
   
   // logical operators = combine conditional statements
   // if(condition1 && condition2)

   // && = True if both conditions are true.
   // || = True if at least one condition is true.
   // ! = True if false. false if true.

    $temp = 17;
    $cloudy = true;
    
    if($temp > 0 && $temp <=25){
        echo "Weather is good.<br>";
    } else {
        echo "Weather is bad.<br>";
    }

    if(!$cloudy){
       echo "It's sunny.";  
    } else {
        echo "It's cloudy.";
    }

    //ticket-price
    $child = false;
    $senior = false;
    $ticket = null;

    if($child || $senior){
        $ticket = 10;
    } else {
        $ticket = 20;
    }

    echo "<br> The price of the ticket is : \${$ticket}";
?>
