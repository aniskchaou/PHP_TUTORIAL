<?php
//You can include the content of a PHP file into another PHP file before the server
//executes it. There are two PHP functions which can be used to included one PHP
//file into another PHP file.

//The include() Function
//The include() function takes all the text in a specified file and copies
//it into the file that uses the include function. If there is any problem
//in loading a file then the include() function generates a warning but the
//script will continue execution.
?>
<html>
   <body>
   
      <?php include("menu.php"); ?>
      <p>This is an example to show how to include PHP file!</p>
      
   </body>
</html>