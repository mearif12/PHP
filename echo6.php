<?php

    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if ($hours <= 0){
        $weekly_pay = 0;
    }
    elseif ($hours <= 40){
        $weekly_pay = ($hours * $rate);
    }
    else{
        $weekly_pay = (40 * $rate) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You made \${$weekly_pay} this week";
   
?>
