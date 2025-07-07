// -------------------------------------db.php------------------------------------------------
<?php 
  
  $db_server = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name = "TestDB";

  // Enable MySQLi exceptions
  // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  try{
    $conn_var = mysqli_connect($db_server,$db_user,$db_password,$db_name);
    echo"You are Connected <br>";
    
  } catch(mysqli_sql_exception $e ){
    echo"Could not connect";
  }
?>  

<!-- ---------------------------------index.php----------------------------------------------- -->
<?php
  //connecting php with MySql : 1. MySQLi extension , 2. PDO (PHP Data Objects).
  
  include("db.php");
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  <h1>PHP + MySQL</h1>
</body>
</html>
