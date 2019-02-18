<!--
Error handling is the process of catching errors raised by your program and then 
taking appropriate action. If you would handle errors properly then it may lead 
to many unforeseen consequences.

Its very simple in PHP to handle an errors.

Using die() function
While writing your PHP program you should check all possible error condition before
 going ahead and take appropriate action when required.

Try following example without having /tmp/test.xt file and with this file.
-->
<?php
   if(!file_exists("/tmp/test.txt")) {
      die("File not found");
   }else {
      $file = fopen("/tmp/test.txt","r");
      print "Opend file sucessfully";
   }
   // Test of the code here.
?>
