<!--The require() Function
The require() function takes all the text in a specified file and copies it 
into the file that uses the include function. If there is any problem in 
loading a file then the require() function generates a fatal error and halt
 the execution of the script.

So there is no difference in require() and include() except they handle error 
conditions. It is recommended to use the require() function instead of include(),
 because scripts should not continue executing if files are missing or misnamed.-->
 <html>
   <body>
       
       <?php require("xxmenu.php"); ?>
       <p>This is an example to show how to include wrong PHP file!</p>
   
   </body>
</html>
<!--
This time file execution halts and nothing is displayed.

NOTE − You may get plain warning messages or fatal error messages or
 nothing at all. This depends on your PHP Server configuration.
-->