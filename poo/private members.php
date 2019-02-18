<!--
Private members
By designating a member private, you limit its accessibility to the class in which it is declared. The private member cannot be referred to from classes that inherit the class in which it is declared and cannot be accessed from 
outside the class.

A class member can be made private by using private keyword in front of the member.
-->
<?php
class MyClass {
   private $car = "skoda";
   $driver = "SRK";
   
   function __construct($par) {
      // Statements here run every time
      // an instance of the class
      // is created.
   }
   
   function myPublicFunction() {
      return("I'm visible!");
   }
   
   private function myPrivateFunction() {
      return("I'm  not visible outside!");
   }
}

?>
<!--
When MyClass class is inherited by another class using extends,
 myPublicFunction() will be visible, as will $driver.
  The extending class will not have any awareness of or access 
  to myPrivateFunction and $car, because they are declared private.

  -->