<!--Accessing Cookies with PHP
PHP provides many ways to access cookies. Simplest way is to use either 
$_COOKIE or $HTTP_COOKIE_VARS variables. 
-->
<html>
   
   <head>
      <title>Accessing Cookies with PHP</title>
   </head>
   
   <body>
      
      <?php
         echo $_COOKIE["name"]. "<br />";
         
         /* is equivalent to */
         echo $HTTP_COOKIE_VARS["name"]. "<br />";
         
         echo $_COOKIE["age"] . "<br />";
         
         /* is equivalent to */
         echo $HTTP_COOKIE_VARS["age"] . "<br />";
      ?>
      
   </body>
</html>
<!--You can use isset() function to check if a cookie is set or not.-->

<html>
   
   <head>
      <title>Accessing Cookies with PHP</title>
   </head>
   
   <body>
      
      <?php
         if( isset($_COOKIE["name"]))
            echo "Welcome " . $_COOKIE["name"] . "<br />";
         
         else
            echo "Sorry... Not recognized" . "<br />";
      ?>
      
   </body>
</html>