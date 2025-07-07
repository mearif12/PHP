// -----------------------index.php-----------------------------------
<?php
    // session => SGB used to store information on a user,
    //            to be used across multiple pages.
    //            A user is assigned a session id.
    //            Ex : login credentials.

    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <!-- This is the login page.<br>
    <a href="home.php">Home page</a> -->
    <form action="index.php" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username"><br>
        <label for="password">Password :</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="log in">
    </form>
</body>
</html>
<?php
   /*$_SESSION["username"] = "BroCode";
   $_SESSION["password"] = "12345";

   echo $_SESSION["username"];
   echo $_SESSION["password"];*/

   if(isset($_POST["login"])){
      if(!empty($_POST["username"]) && !empty($_POST["password"])){

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        // echo $_SESSION["username"] . "<br>";
        // echo $_SESSION["password"] . "<br>";

        header("Location: home.php"); //directed to home page
      } else {
        echo "Missing username or password.";
      }
   }
?>

<!-- --------------------------------home.php---------------------------------- -->
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    This is the home page.<br>
    <a href="index.php">login page</a>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Log Out">
    </form>
</body>
</html>
<?php
     echo $_SESSION["username"] . "<br>";
     echo $_SESSION["password"] . "<br>";

     if(isset($_POST["logout"])){
        session_destroy(); //destroying session to log out.
        header("Location: index.php");
     }
?>
