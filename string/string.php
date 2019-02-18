<!--
NOTE − Built-in string functions is given in function reference PHP String Functions

Following are valid examples of string

$string_1 = "This is a string in double quotes";
$string_2 = "This is a somewhat longer, singly quoted string";
$string_39 = "This string has thirty-nine characters";
$string_0 = ""; // a string with zero characters

Singly quoted strings are treated almost literally, whereas doubly quoted strings
 replace variables with their values as well as specially interpreting certain 
 character sequences.
-->
<?php
   $variable = "name";
   $literally = 'My $variable will not print!\\n';
   
   print($literally);
   print "<br />";
   
   $literally = "My $variable will print!\\n";
   
   print($literally);
?>

<!--
String Concatenation Operator
To concatenate two string variables together, use the dot (.) operator 

-->
<?php
   $string1="Hello World";
   $string2="1234";
   
   echo $string1 . " " . $string2;
?>

<!--Using the strlen() function
The strlen() function is used to find the length of a string.

-->
<?php
   echo strlen("Hello world!");
?>



<!--
Using the strpos() function
The strpos() function is used to search for a string or character within a string.

If a match is found in the string, this function will return the position of the
 first match. If no match is found, it will return FALSE.

-->
<?php
   echo strpos("Hello world!","world");
?>

