/* - download and install 'XAMPP' from apachefriends website.

- then open 'C:' drive > xampp > htdocs > create a folder.open that folder in vscode.

- create a file say 'index.php' then : go to 'edit in settings.json' and add '"php.validate.executablePath": "C:/xampp/php/php.exe"' to enable php to run.

- in vscode install extension : 1.live server , 2.PHP Intelephense , 3. PHP Server .

- add some code in 'index.php' and go to a browser to search : 'http://localhost/dashboard' to see is xampp server is working or not.

- to see present folder's output : 'http://localhost/folder_name' .

- showing php output : */
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
  </html> 
