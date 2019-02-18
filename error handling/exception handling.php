<!--Exceptions Handling
PHP 5 has an exception model similar to that of other programming languages.
 Exceptions are important and provides a better control over error handling.
-->

<?php
   try {
      $error = 'Always throw this error';
      throw new Exception($error);
      
      // Code following an exception is not executed.
      echo 'Never executed';
   }catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
   }
   
   // Continue execution
   echo 'Hello World';
?>

<!--In the above example $e->getMessage function is used to get error message.
 There are following functions which can be used from Exception class.

getMessage() − message of exception

getCode() − code of exception

getFile() − source filename

getLine() − source line

getTrace() − n array of the backtrace()

getTraceAsString() − formated string of trace

Creating Custom Exception Handler
You can define your own custom exception handler. Use following function to set 
a user-defined exception handler function.

string set_exception_handler ( callback $exception_handler )
Here exception_handler is the name of the function to be called when an uncaught 
exception occurs. This function must be defined before calling set_exception_handler().
-->

<?php
   function exception_handler($exception) {
      echo "Uncaught exception: " , $exception->getMessage(), "\n";
   }
	
   set_exception_handler('exception_handler');
   throw new Exception('Uncaught Exception');
   
   echo "Not Executed\n";
?>
