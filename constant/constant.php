<!--
A constant is a name or an identifier for a simple value.
 A constant value cannot change during the execution of the script. 
 By default, a constant is case-sensitive. 
 

To define a constant you have to use define() function and to retrieve the 
value of a constant, you have to simply specifying its name. 

Unlike with variables, you do not need to have a constant with a $. 
You can also use the function constant() to read a constant's value 
if you wish to obtain the constant's name dynamically.


-->
constant() example
<?php
   define("MINSIZE", 50);
   
   echo MINSIZE;
   echo constant("MINSIZE"); // same thing as the previous line
?>

<!-- 
PHP Magic constants
PHP provides a large number of predefined constants to any script which it runs.

There are five magical constants that change depending on where they are used. 
For example, the value of __LINE__ depends on the line that it's used on in your 
script. 

	
__LINE__

The current line number of the file.

	
__FILE__

The full path and filename of the file. If used inside an include,the name of the 
included file is returned. Since PHP 4.0.2, __FILE__ always contains an absolute
 path whereas in older versions it contained relative path under some circumstances.

	
__FUNCTION__

The function name. (Added in PHP 4.3.0) As of PHP 5 this constant returns the 
function name as it was declared (case-sensitive). 
In PHP 4 its value is always lowercased.

	
__CLASS__

The class name. (Added in PHP 4.3.0) As of PHP 5 this constant returns the 
class name as it was declared (case-sensitive). 
In PHP 4 its value is always lowercased.

	
__METHOD__

The class method name. (Added in PHP 5.0.0) The method name is returned as it was 
declared (case-sensitive).

-->