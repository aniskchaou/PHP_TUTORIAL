<!--
The GET Method
The GET method sends the encoded user information appended to the page request. 
The page and the encoded information are separated by the ? character.
The data sent by GET method can be accessed using QUERY_STRING environment variable.
The PHP provides $_GET associative array to access all the sent information using GET
 method.

-->

<?php
   if( $_GET["name"] || $_GET["age"] ) {
      echo "Welcome ". $_GET['name']. "<br />";
      echo "You are ". $_GET['age']. " years old.";
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
      
   </body>
</html>