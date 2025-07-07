// -------------------POST-----------------------
<!-- /*
   $_GET , $_POST = special variables used to collect data from an HTML form,
   data is sent to the file in the action attribute of <form> or 
   <form action="some_file.php" method="get">
 */

 /**
  * $_GET = data is append to the url,not secure,char limit,bookmark is possible with 
  *  values,GET request can be cached,better for a search page.
  * $_POST = data is packaged inside the body of the HTTP request,more secure,no data limit,
  *  can't bookmark,POST request are not cached,Better for submitting credentials.
  */ 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username"><br>
        <label for="password">Password</label>
        <input type="password" name="password"><br>
        <button type="submit">Log In</button>
    </form>
    <?php
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";

    //   just change method="get" and $_GET for 'get' method.
    ?>
</body>
</html>

<!-- ----------------------GET--------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="numbers">quantity</label><br>
        <input type="text" name="quantity">
        <button type="submit">total</button>
    </form>
    <?php
      $item = 'burger';
      $price = 9.99;
      $quantity = $_GET["quantity"];
      $total = null;

      $total = $quantity * $price;

      echo"You have order {$item} , {$price} <br>";
      echo"Your total is {$total}";
    ?>
</body>
</html>
