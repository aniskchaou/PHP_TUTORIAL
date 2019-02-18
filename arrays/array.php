<!--
There are three different kind of arrays and each array value is accessed using 
an ID c which is called array index.

Numeric array − An array with a numeric index. Values are stored and 
accessed in linear fashion.

Associative array − An array with strings as index. This stores element values in 
association with key values rather than in a strict linear index order.

Multidimensional array − An array containing one or more arrays and values are 
accessed using multiple indices


Numeric Array
These arrays can store numbers, strings and any object but their index will be represented by numbers. By default array index starts from zero.
-->
 Live Demo
<html>
   <body>
   
      <?php
         /* First method to create array. */
         $numbers = array( 1, 2, 3, 4, 5);
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }
         
         /* Second method to create array. */
         $numbers[0] = "one";
         $numbers[1] = "two";
         $numbers[2] = "three";
         $numbers[3] = "four";
         $numbers[4] = "five";
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }
      ?>
      
   </body>
</html>
<!--
This will produce the following result −

Value is 1 
Value is 2 
Value is 3 
Value is 4 
Value is 5 
Value is one 
Value is two 
Value is three 
Value is four 
Value is five 

-->