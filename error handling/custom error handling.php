<!--
Defining Custom Error Handling Function
You can write your own function to handling any error. 
PHP provides you a framework to define error handling function.

This function must be able to handle a minimum of
 two parameters (error level and error message) but can accept up 
 to five parameters (optionally: file, line-number, and the error context) −


error_function(error_level,error_message, error_file,error_line,error_context);
	
error_level

Required - Specifies the error report level for the user-defined error. 
Must be a value number.

	
error_message

Required - Specifies the error message for the user-defined error

	
error_file

Optional - Specifies the file name in which the error occurred


error_line

Optional - Specifies the line number in which the error occurred

	
error_context

Optional - Specifies an array containing every variable and their values in use 
when the error occurred


-->
<?php
   function handleError($errno, $errstr,$error_file,$error_line) {
      echo "<b>Error:</b> [$errno] $errstr - $error_file:$error_line";
      echo "<br />";
      echo "Terminating PHP Script";
      
      die();
   }
?>
<!--
Once you define your custom error handler you need to set it using PHP 
built-in library set_error_handler function. 
-->
<?php
   error_reporting( E_ERROR );
   
   function handleError($errno, $errstr,$error_file,$error_line) {
      echo "<b>Error:</b> [$errno] $errstr - $error_file:$error_line";
      echo "<br />";
      echo "Terminating PHP Script";
      
      die();
   }
   
   //set error handler
   set_error_handler("handleError");
   
   //trigger error
   myFunction();
?>