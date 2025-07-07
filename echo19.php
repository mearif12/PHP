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
