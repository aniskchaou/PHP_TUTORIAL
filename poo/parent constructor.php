<!--
Calling parent constructors
Instead of writing an entirely new constructor for the subclass, 
let's write it by calling the parent's constructor explicitly and 
then doing whatever is necessary in addition for instantiation of the subclass.
-->
<?php
class Name {
   var $_firstName;
   var $_lastName;
   
   function Name($first_name, $last_name) {
      $this->_firstName = $first_name;
      $this->_lastName = $last_name;
   }
   
   function toString() {
      return($this->_lastName .", " .$this->_firstName);
   }
}
class NameSub1 extends Name {
   var $_middleInitial;
   
   function NameSub1($first_name, $middle_initial, $last_name) {
      Name::Name($first_name, $last_name);
      $this->_middleInitial = $middle_initial;
   }
   
   function toString() {
      return(Name::toString() . " " . $this->_middleInitial);
   }
}
?>
<!--
In this example, we have a parent class (Name), which has a 
two-argument constructor, and a subclass (NameSub1), which has a three-argument 
constructor.

 The constructor of NameSub1 functions by calling its parent constructor 
explicitly using the :: syntax (passing two of its arguments along) and then setting
 an additional field. 
 Similarly, NameSub1 defines its non constructor toString()
  function in terms of the parent function that it overrides.

NOTE − A constructor can be defined with the same name as the name of a class.
 It is defined in above example.

 -->