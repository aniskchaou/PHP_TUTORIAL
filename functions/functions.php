<!--Creating PHP Function

Its very easy to create your own PHP function. 
Suppose you want to create a PHP function which will simply write a simple message
 on your browser when you will call it. Following example creates a function called
  writeMessage() and then calls it just after creating it.


-->
<html>
   
   <head>
      <title>Writing PHP Function</title>
   </head>
   
   <body>
      
      <?php
         /* Defining a PHP Function */
         function writeMessage() {
            echo "You are really a nice person, Have a nice time!";
         }
         
         /* Calling a PHP Function */
         writeMessage();
      ?>
      
   </body>
</html>

<!--PHP Functions with Parameters
PHP gives you option to pass your parameters inside a function. 
You can pass as many as parameters your like. 
-->
 
<html>
   
   <head>
      <title>Writing PHP Function with Parameters</title>
   </head>
   
   <body>
   
      <?php
         function addFunction($num1, $num2) {
            $sum = $num1 + $num2;
            echo "Sum of the two numbers is : $sum";
         }
         
         addFunction(10, 20);
      ?>
      
   </body>
</html>
<!--This will display following result −
Sum of the two numbers is : 30


-->

<!--
Passing Arguments by Reference
It is possible to pass arguments to functions by reference. This means that a reference
 to the variable is manipulated by the function rather than a copy of the variable's
  value.

Any changes made to an argument in these cases will change the value of the original
 variable. You can pass an argument by reference by adding an ampersand to the
  variable name in either the function call or the function definition.

-->
<html>
   
   <head>
      <title>Passing Argument by Reference</title>
   </head>
   
   <body>
      
      <?php
         function addFive($num) {
            $num += 5;
         }
         
         function addSix(&$num) {
            $num += 6;
         }
         
         $orignum = 10;
         addFive( $orignum );
         
         echo "Original Value is $orignum<br />";
         
         addSix( $orignum );
         echo "Original Value is $orignum<br />";
      ?>
      
   </body>
</html>
<!--
This will display following result −

Original Value is 10
Original Value is 16 

-->