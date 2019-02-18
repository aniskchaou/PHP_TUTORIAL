<!--Function Overriding
Function definitions in child classes override definitions with the same name in
 parent classes. In a child class, we can modify the definition of a function
  inherited from parent class.

In the following example getPrice and getTitle functions are overridden to return
 some values.
-->
function getPrice() {
   echo $this->price . "<br/>";
   return $this->price;
}
   
function getTitle(){
   echo $this->title . "<br/>";
   return $this->title;
}