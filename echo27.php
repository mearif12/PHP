// ------------------------------db.php--------------------------------------
<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "testdb";

    try{
        $conn_var = mysqli_connect($db_server, 
                               $db_user, 
                               $db_pass, 
                               $db_name);
        echo"You are connected";                       
    }
    catch(mysqli_sql_exception $th){
        echo"Could not connect! <br>";
    }
?>

<!-- --------------------------------index.php--------------------------------- -->
<?php 
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
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
       <h2>Welcome to Registration</h2>
       <label for="username">Username :</label>
       <input type="text" name="username"> <br>
       <label for="password"> Password :</label> <br>
       <input type="password" name="password"> <br> <br>
       <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>

<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)){
            echo"please enter an username";
        } elseif(empty($password)){
            echo"please enter a password";
        } else {
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(user,password) 
                    VALUES('$username','$hash')";
            try {
                mysqli_query($conn_var,$sql);
                echo"You are now registered";
            } catch(mysqli_sql_exception $th){
                echo "The username was taken" . $th;
            }       
        }
    }
?>
