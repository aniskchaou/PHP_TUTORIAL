<!--Starting a PHP Session
A PHP session is easily started by making a call to the session_start() function.
This function first checks if a session is already started and if none is started
 then it starts one. It is recommended to put the call to session_start() at the
  beginning of the page.

Session variables are stored in associative array called $_SESSION[]. 
These variables can be accessed during lifetime of a session.

The following example starts a session then register a variable called counter 
that is incremented each time the page is visited during the session.

Make use of isset() function to check if session variable is already set or not.


-->
<?php
   session_start();
   
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";
?>

<html>
   
   <head>
      <title>Setting up a PHP session</title>
   </head>
   
   <body>
      <?php  echo ( $msg ); ?>
   </body>
   
</html>