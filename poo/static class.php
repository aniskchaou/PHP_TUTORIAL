<!--Static Keyword
Declaring class members or methods as static makes them accessible without needing 
an instantiation of the class. A member declared as static can not be accessed with
 an instantiated class object (though a static method can).
-->

<?php
   class Foo {
      public static $my_static = 'foo';
      
      public function staticValue() {
         return self::$my_static;
      }
   }
	
   print Foo::$my_static . "\n";
   $foo = new Foo();
   
   print $foo->staticValue() . "\n";
?>	