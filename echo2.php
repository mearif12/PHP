 <?php 
  //data-types -> string,integer,float,boolean.
  //variable -> that varies the value.

  //string literals
  $name = " Arif"; //string
  $id = 12; //integer
  $yes = true; //boolean
  $life = 0.5; //float
  $bucks = 0.00;

  echo"Hello " , " there {$name}{$id} <br>";
  echo"How are you?";
  echo"\nI am {$yes} with {$life} and \${$bucks}"; 

  $total = null;

  $total = $life * $bucks ;
  echo"you have {$total} ";

  //N:B: use '+' in numerical types.
  ?> 
