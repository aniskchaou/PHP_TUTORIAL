
<!--Interfaces
Interfaces are defined to provide a common function names to the implementers.
 Different implementors can implement those interfaces according to their requirements.
  You can say, interfaces are skeletons which are implemented by developers.
-->
<?php
interface Mail {
   public function sendMail();
}
//Then, if another class implemented that interface, like this −

class Report implements Mail {
   // sendMail() Definition goes here
}

?>