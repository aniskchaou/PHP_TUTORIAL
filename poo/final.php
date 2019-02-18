<!--
Final Keyword
PHP 5 introduces the final keyword, which prevents child classes from overriding 
a method by prefixing the definition with final. If the class itself is being 
defined final then it cannot be extended.
-->

<?php

   class BaseClass {
      public function test() {
         echo "BaseClass::test() called<br>";
      }
      
      final public function moreTesting() {
         echo "BaseClass::moreTesting() called<br>";
      }
   }
   
   class ChildClass extends BaseClass {
      public function moreTesting() {
         echo "ChildClass::moreTesting() called<br>";
      }
   }
?>