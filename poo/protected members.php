<!--
Protected members
A protected property or method is accessible in the class in which it is declared, 
as well as in classes that extend that class. Protected members are not available
 outside of those two kinds of classes. A class member can be made protected by 
 using protected keyword in front of the member.
-->

class MyClass {
   protected $car = "skoda";
   $driver = "SRK";

   function __construct($par) {
      // Statements here run every time
      // an instance of the class
      // is created.
   }
   
   function myPublicFunction() {
      return("I'm visible!");
   }
   
   protected function myPrivateFunction() {
      return("I'm  visible in child class!");
   }
}