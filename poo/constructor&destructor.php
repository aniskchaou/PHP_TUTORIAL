<!--Constructor Functions
Constructor Functions are special type of functions which are called automatically
 whenever an object is created. So we take full advantage of this behaviour, 
 by initializing many things through constructor functions.

PHP provides a special function called __construct() to define a constructor. 
You can pass as many as arguments you like into the constructor function.
-->
<?php
function __construct( $par1, $par2 ) {
   $this->title = $par1;
   $this->price = $par2;
}
?>
<!--
Now we don't need to call set function separately to set price and title. 
We can initialize these two member variables at the time of object creation only. 
-->

<?php
$physics = new Books( "Physics for High School", 10 );
$maths = new Books ( "Advanced Chemistry", 15 );
$chemistry = new Books ("Algebra", 7 );

/* Get those set values */
$physics->getTitle();
$chemistry->getTitle();
$maths->getTitle();

$physics->getPrice();
$chemistry->getPrice();
$maths->getPrice();
?>
<!--
Destructor
Like a constructor function you can define a destructor function using 
function __destruct(). You can release all the resources with-in a destructor.	
-->