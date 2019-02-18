

<!-- Integers -->
<?php 
$int_var = 12345;
$another_int = -12345 + 12345;
?>

<!-- Doubles -->

<?php
   $many = 2.2888800;
   $many_2 = 2.2111200;
   $few = $many + $many_2;
   
   print("$many + $many_2 = $few <br>");
?>

<!-- Boolean -->

<?php 
if (TRUE)
   print("This will always print<br>");

else
   print("This will never print<br>");
?>

<!--
NULL
NULL is a special type that only has one value: NULL. To give a variable the NULL value,
 simply assign it like this -->

<?php
$my_var = NULL;
//The special constant NULL is capitalized by convention, but actually it is case insensitive; you could just as well have typed −

$my_var = null;

?>

<!-- Strings  -->

<?php
   $variable = "name";
   $literally = 'My $variable will not print!';
   
   print($literally);
   print "<br>";
   
   $literally = "My $variable will print!";
   print($literally);
?>



<!--
Variable Scope
Scope can be defined as the range of availability a variable has to the 
program in which it is declared. PHP variables can be one of four scope types −

Local variables

Function parameters

Global variables

Static variables
-->
