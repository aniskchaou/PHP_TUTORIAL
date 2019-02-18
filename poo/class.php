<!--Defining PHP Classes
The general form for defining a new class in PHP is as follows −
-->
<?php
   class phpClass {
      var $var1;
      var $var2 = "constant string";
      
      function myfunc ($arg1, $arg2) {
         [..]
      }
      [..]
   }
?>

<!--Here is an example which defines a class of Books type -->

<?php
   class Books {
      /* Member variables */
      var $price;
      var $title;
      
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
      }
   }
?>
<!--The variable $this is a special variable and it refers to the same object ie. itself.-->