<!--Destroying a PHP Session
A PHP session can be destroyed by session_destroy() function. 
This function does not need any argument and a single call can destroy all 
the session variables. 

If you want to destroy a single session variable then you can use unset() function
 to unset a session variable.
-->
<?php
   unset($_SESSION['counter']);
?>
Here is the call which will destroy all the session variables −

<?php
   session_destroy();
?>