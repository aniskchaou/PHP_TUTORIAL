<!--
The POST Method
The POST method transfers information via HTTP headers. 
The information is encoded as described in case of GET method and put into a header 
called QUERY_STRING.


The data sent by POST method goes through HTTP header so security depends on HTTP 
protocol. By using Secure HTTP you can make sure that your information is secure.

The PHP provides $_POST associative array to access all the sent information using POST
 method.
-->

<?php
   if( $_POST["name"] || $_POST["age"] ) {
      if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
         die ("invalid name and name should be alpha");
      }
      echo "Welcome ". $_POST['name']. "<br />";
      echo "You are ". $_POST['age']. " years old.";
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
   
   </body>
</html>