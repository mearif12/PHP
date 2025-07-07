# PHP 


## Table of Contents :

2. [PHP](#php)

   [2.1 Installation](#lesson-1-)

   [2.2 Data types](#lesson-2-)

   [2.3 Operators](#lesson-3-)

   [2.4 Special Variables](#lesson-4-)

   [2.5 Math Functions](#lesson-5-)

   [2.6 Control Statement](#lesson-6-)

   [2.7 Logical Operators](#lesson-7-)

   [2.8 Switch](#lesson-8-)

   [2.9 For loop](#lesson-9-)

   [2.10 While loop](#lesson-10-)

   [2.11 Array](#lesson-11-)

   [2.12 Associative array](#lesson-12-)

   [2.13 isset and empty Function](#13lesson-13-)

   [2.14 Radio Button](#14lesson-14-)

   [2.15 Checkbox](#15lesson-15-)

   [2.16 Function](#16lesson-16-)

   [2.17 String Functions](#17lesson-17-)

   [2.18 Sanitize and Validate Input](#18lesson-18-)

   [2.19 Include Function](#19lesson-19-)

   [2.20 Cookie](#20lesson-20-)

   [2.21 Session](#21lesson-21-)

   [2.22 Server](#22lesson-22-)

   [2.23 Hashing](#23lesson-23-)

   [2.24 Connecting with MySql](#24lesson-24-)

   [2.25 Insert Data into MySql](#25lesson-25-)

   [2.26 Search Data in MySql](#26lesson-26-)

   [2.27 Registration Form](#27lesson-27-)

[Back to Python](#python-documentation)   

### Lesson 1 :

- download and install 'XAMPP' from apachefriends website.

- then open 'C:' drive > xampp > htdocs > create a folder.open that folder in vscode.

- create a file say 'index.php' then : go to 'edit in settings.json' and add '"php.validate.executablePath": "C:/xampp/php/php.exe"' to enable php to run.

- in vscode install extension : 1.live server , 2.PHP Intelephense , 3. PHP Server .

- add some code in 'index.php' and go to a browser to search : 'http://localhost/dashboard' to see is xampp server is working or not.

- to see present folder's output : 'http://localhost/folder_name' .

- showing php output : 
  
  ```
  <?php
  echo"hello <br>";
  echo"This is arif";

  // php can be written with <?php tag singly .

  /* html code is allowed in php file.*/

  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
   <body>
    <?php 
    echo"<h1>I'm under the html</h1>";
    ?>
   </body>
  </html> ```

### Lesson 2 :

- PHP data-types :

   ``` <?php 
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
  ?> ```

### Lesson 3 : 

- PHP Operators :

```
<?php 
 
 //Arithmetic operators -> +, - , * , / , **, %.

 $x = 5;
 $y = 2;
 $z = null;

// $z = $x + $y;
// $z = $x - $y;
// $z = $x * $y;
// $z = $x / $y;
   $z = $x % $y;
 echo $z . "<br>";

 //Increment/decrement operators -> ++ , -- .

  $sum = 10;
  $sum++;
  echo $sum . "<br>";

  $count = 9;
  $count += 4;
  echo $count . "<br>";

 //Operator precedence -> () , ** , * / % , + - .

  $total = 1 + 2 - 3 * 4 / 5 ** 6;
  echo $total;
?> 
```

### Lesson 4 :

- special variables($_GET , $_POST) :

``` 
-------------------POST-----------------------
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

----------------------GET---------------------
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
```

### Lesson 5 :

- Math Functions :

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="index.php" method="post">
      <label for="x">x :</label>
      <input type="text" name="x"> <br><br>
      <label for="y">y :</label>
      <input type="text" name="y"> <br>
      <input type="submit" value="total">

      <br> <br> <br>
      <h3>Circle :</h3>
      <label for="radius">radius :</label>
      <input type="text" name="radius">
      <input type="submit" value="Area">
    </form>
</body>

<?php

   $x = $_POST["x"];

   $y = $_POST["y"];
   
   $total = null;

   //$total = abs($x);
   //$total = round($x);
   //$total = ceil($x);
   //$total = floor($x);
   //$total = sqrt($x);
   //$total = pow($x,$y);
   //$total = max($x,$y);
   //$total = min($x,$y);
   //$total = pi();
   //$total = rand(1,10);

   echo $total;

   $radius = $_POST["radius"];
   $area = pi() * pow($radius,2);

   echo "<br> Area of circle : {$area}";

?>
</html>
```

### Lesson 6 :

- if statement :

```
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
```

### Lesson 7 :

- Logical Operators :

```
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
```

### Lesson 8 :

- switch statement :

```
<?php

    //switch = replacement to using many elseif statements
    //               more efficient, less code to write

    $date = date("l");
    
    echo "{$date} <br>";

    switch($date){
        case "Monday":
            echo "I hate Mondays";
            break;
        case "Tuesday":
            echo "It is Taco Tuesday!";
            break;
        case "Wednesday":
            echo "The work week is half over!";
            break;
        case "Thursday":
            echo "It's almost the weekend!";
            break;
        case "Friday":
            echo "The weekend is here!";
            break;
        case "Saturday":
            echo "Time to party!";
            break;
        case "Sunday":
            echo "Time to relax";
            break;
        default:
            echo "{$date} is not a day";
    }
?>
```

### Lesson 9 :

- for loop :

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter last number to count to:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
<?php
    // for loop = repeat some code a certain # of times

    $counter = $_POST["counter"];

    for($i = 1;$i <= $counter; $i++){
        echo $i . "<br>";
    }
?>
</html>
```

### Lesson 10 :

- while loop :

```
<?php 
    //while loop = do some code infinitely,
    //             while some conditions remains true.

    $counter = 0;
    while($counter <=10 ){
       $counter++;
       echo $counter . "<br>";
    }
?>
```

### Lesson 11 :

- Array :

```
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
```

### Lesson 12 :

- Associative Array :

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="country">Country :</label>
        <input type="text" name="country">
        <input type="submit" value="submit">
    </form>
</body>
<?php
/*
    //associative array  -> an array made of key => value pairs.

    $capitals = array("USA"=>"Washington D.C","Japan"=> "Tokyo","India"=>"New Delhi");

    // echo $capitals["USA"];
    // $capitals["India"] = "Delhi";
    // $capitals["BD"] = "Dhaka";

    // array_pop($capitals);
    // array_shift($capitals);

    // $keys = array_keys($capitals);
    // $values = array_values($capitals);

    // $capitals = array_flip($capitals); //keys will be values and values will be keys.
    // $capitals = array_reverse($capitals);

    echo count($capitals)."<br>";

    foreach($capitals as $key => $value){
        echo "$key : $value <br>";
    }
*/    

    $capitals = array("USA" => "Washington D.C","Japan"=>"Tokyo","India"=>"New Delhi","Russia"=>"Moscow");

    $country = $_POST["country"];

    $capital = $capitals[$country];

    echo "The capital of {$country} is {$capital}";
?>
</html>
```

### Lesson 13 :

- isset() & empty() :

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username: </label>
        <input type="text" name="username"><br>
        <label>password: </label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in"><br>
    </form>
</body>
<?php
    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, ""
    
    foreach($_POST as $key => $value){
         echo "{$key} : {$value} <br>";
    }

    if(isset($_POST["login"])){
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo"Username is missing";
        }
        elseif(empty($password)){
            echo"Password is missing";
        }
        else{
            echo"Hello {$username}";
        }
    }
?>
</html>

```

### Lesson 14 :

- PHP radio buttons :

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
<?php

    if(isset($_POST["confirm"])){

        $credit_card = null;

        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
            echo "You selected {$credit_card}";
        } else {
            echo "Please make a selection";
        }

        // switch($credit_card){
        //     case "Visa":
        //         echo"You selected Visa";
        //         break;
        //     case "Mastercard":
        //         echo"You selected Mastercard";
        //         break;
        //     case "American Express":
        //         echo"You selected American Express";
        //         break;
        //     default:
        //         echo"Please make a selection";
        // }
    }
?>
</html>

```

### Lesson 15 :

- PHP checkboxs :

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="foods[]" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="foods[]" value="Taco">
        Taco<br>
        <input type="submit" name="submit">
    </form>
</body>
<?php
    if(isset($_POST["submit"])){

       $foods = $_POST["foods"];
       
       foreach($foods as $food){
            if(isset($food)){
                echo "You liked {$food}";
            }
       }
    }
?>
</html>

```

### Lesson 16 :

- Function :

```
<?php
    // function = write some code once,reuse when you need it,
    //            type () after function name to invoke.
    //            Ex : add() , subtract() , divide() .

   function greet($name,$num){
     echo"Hello, {$name} {$num} <br>";
   }  
   greet("Bob",34);
   greet("Andrew",45);

   function is_even($number){
     $res = $number % 2;
     return $res;
   }

   echo is_even(12); //0
?>
```

### Lesson 17 :

- String Functions :

```
<?php
    $username = "Bro Code";
    $phone = "123-456-7890";

    //$username = strtolower($username);
    //$username = strtoupper($username);
    //$username = trim($username);
    //$username = str_pad($username, 20, "0");
    //$phone = str_replace("-", "", $phone);
    //$username = strrev($username);
    //$username = str_shuffle($username);
    //$equals = strcmp($username, "Bro Code");
    //$count = strlen($phone);
    //$index = strpos($phone, "-");
    //$firstname = substr($username, 0, 3);
    //$lastname = substr($username, 4);
    
    /*
      $username = "Bro Code";
      $fullname = explode(" ", $username);  // string to array.
      foreach($fullname as $name){
        echo $name . "<br>";
      }
    */
    
    /*
       $username = array("Bro","The","Code");
       $username = implode("-", $username);  // array to string.
       echo $username;
    */

    echo $username;
?>
```

### Lesson 18 :

- Sanitize and Validate Input :

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="index.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>
<?php
    if(isset($_POST["login"])){

        $username = filter_input(INPUT_POST, "username",
                                                     FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST, "age",
                                         FILTER_SANITIZE_NUMBER_INT);

        $email = filter_input(INPUT_POST, "email",
                                            FILTER_SANITIZE_EMAIL);

        $age = filter_input(INPUT_POST, "age",
                                         FILTER_VALIDATE_INT);
        
        $email = filter_input(INPUT_POST, "email",
                                            FILTER_VALIDATE_EMAIL);
    }
?>
</html>

```

### Lesson 19 :

- include function :

```
<?php
    include("header.html");
    // include() => copies the content of a file (php/html/text),
    //               and includes it in your php file.
    //               Sections of our website become reusable,
    //               Changes only need to be made in one place.

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <!-- index.php -->
    This is the Home page<br>
    Stuff about your home page can go here<br>
</body>
</html>
<?php
    include("footer.html");
?>

<!-- header.html -->
<header>
    <h2>This is my website</h2>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="locations.php">Locations</a>
    <hr>
</header>

<!-- footer.html -->
<footer>
    <hr>
    Author: Bro Code
    <a href="mailto:BroCode@fake.com">BroCode@fake.com</a>
</footer>
```

### Lesson 20 :

- Cookie :

```
<?php 
    // cookie = Information about a user stored in a user's web-browser
    //                 targeted advertisements, browsing preferences, and
    //                other non-sensitive data.

    //Aplication > storage.

    setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
    setcookie("fav_drink", "coffee", time() + (86400 * 3), "/");
    setcookie("fav_dessert", "ice cream", time() + (86400 * 4), "/");

    //setcookie("fav_dessert", "ice cream", time() - 0, "/"); //to remove
    
    /*foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value} <br>";
    }*/

    if(isset($_COOKIE["fav_food"])){
        echo"BUY SOME {$_COOKIE["fav_food"]} !!!";
    }
    else{
        echo"I don't know your favorite food";
    }
?>
```

### Lesson 21 :

- Session :

```
-----------------------index.php-----------------------------------
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

--------------------------------home.php----------------------------------
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
```

### Lesson 22 :

- Server :

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        username:<br>
        <input type="text" name="username">
        <input type="submit">
    </form>
</body>
</html>
<?php
    
    // $_SERVER = SGB that contains headers, paths, and script locations. 
    //            The entries in this array are created by the web server.
    //            Shows nearly everything you need to know about the current web page env.

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo"HELLO";
    }
?>
```

### Lesson 23 :

- Hashing :

```
<?php
    // hashing = transforming sensitive data (password)
    //                   into letters, numbers, and/or symbols
    //                   via a mathematical process. (similar to encryption)
    //                   Hides the original data from 3rd parties.

    $password = "pizza123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo $hash . "<br>"; //hashing password

    if(password_verify("hamburger666", $hash)){
        echo"You are logged in!";
    }
    else{
        echo"Incorrect password!";
    }

?>
```

### Lesson 24 :

- Connecting with MySQL :

```
-------------------------------------db.php------------------------------------------------
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

---------------------------------index.php-----------------------------------------------
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
```

### Lesson 25 :

- Insert Data Into MySql :

```
-------------------------------------------db.php--------------------------------------------
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

------------------------------------------index.php------------------------------------------
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
```

### Lesson 26 :

- Search Data in MySql :

```
-----------------------------------------db.php----------------------------------------------
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

------------------------------------------index.php------------------------------------------
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
```

### Lesson 27 :

- Registration Form :

```
------------------------------db.php--------------------------------------
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

--------------------------------index.php---------------------------------
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
```
### [Back to PHP](#php)  
### [Back to Python](#python-documentation)  
