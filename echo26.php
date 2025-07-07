// -----------------------------------------db.php----------------------------------------------
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

//    $sql = "SELECT * FROM users WHERE user = 'Rahi'; ";

   $sql = "SELECT * FROM users;";

   $result = mysqli_query($conn_var,$sql);

//    if(mysqli_num_rows($result) > 0){
//      $row = mysqli_fetch_assoc($result);
//      echo $row["id"] ."<br>";
//      echo $row["user"] . "<br>";
//    } else {
//      echo"No user found";
//    }

   if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
         echo $row["id"] . "<br>";
         echo $row["user"] . "<br>";
         echo $row["reg_date"] . "<br>";
      }
   }



   mysqli_close($conn_var); //to close connection with MySql.

?>
