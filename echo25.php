// -------------------------------------------db.php--------------------------------------------
<?php 

  $db_server = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name = "TestDB";

  try{
    $conn_var = mysqli_connect($db_server,
                              $db_user,
                              $db_password,
                              $db_name);
    echo "You are connected <br>";                          
  } catch(mysqli_sql_exception $e){
        echo "Could not connect";
  }

?>

<!-- ------------------------------------------index.php------------------------------------------ -->
<?php 
   include("db.php");

//    $username = "Hasib";
//    $password = "hasib123";

   $username = "Rahi";
   $password = "rahi12345";
   $hash = password_hash($password,PASSWORD_BCRYPT);

   $sql = "INSERT INTO Users(user,password) VALUES ('$username','$hash');";

   try{
    
     mysqli_query($conn_var,$sql); //to query in db.
     echo "Query Successful";
   } catch(mysqli_sql_exception $e){
    echo"Not Successful";
   }

   mysqli_close($conn_var); //to close connection with MySql.

?>
