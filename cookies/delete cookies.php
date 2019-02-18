
<?php
//Deleting Cookie with PHP
//Officially, to delete a cookie you should call setcookie() with the name 
//argument only but this does not always work well, however, and should not 
//be relied on.

//It is safest to set the cookie with a date that has already expired −


   setcookie( "name", "", time()- 60, "/","", 0);
   setcookie( "age", "", time()- 60, "/","", 0);
?>
<html>
   
   <head>
      <title>Deleting Cookies with PHP</title>
   </head>
   
   <body>
      <?php echo "Deleted Cookies" ?>
   </body>
   
</html>