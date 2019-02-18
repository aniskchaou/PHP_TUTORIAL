<!--
Multidimensional Arrays
A multi-dimensional array each element in the main array can also be an array.
 And each element in the sub-array can be an array, and so on. Values in the 
 multi-dimensional array are accessed using multiple index.


-->
<html>
   <body>
      
      <?php
         $marks = array( 
            "mohammad" => array (
               "physics" => 35,
               "maths" => 30, 
               "chemistry" => 39
            ),
            
            "qadir" => array (
               "physics" => 30,
               "maths" => 32,
               "chemistry" => 29
            ),
            
            "zara" => array (
               "physics" => 31,
               "maths" => 22,
               "chemistry" => 39
            )
         );
         
         /* Accessing multi-dimensional array values */
         echo "Marks for mohammad in physics : " ;
         echo $marks['mohammad']['physics'] . "<br />"; 
         
         echo "Marks for qadir in maths : ";
         echo $marks['qadir']['maths'] . "<br />"; 
         
         echo "Marks for zara in chemistry : " ;
         echo $marks['zara']['chemistry'] . "<br />"; 
      ?>
   
   </body>
</html>
<!--This will produce the following result −

Marks for mohammad in physics : 35
Marks for qadir in maths : 32
Marks for zara in chemistry : 39
-->