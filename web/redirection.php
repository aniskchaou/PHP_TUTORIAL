<!--
Browser Redirection
The PHP header() function supplies raw HTTP headers to the browser and can be 
used to redirect it to another location. The redirection script should be at the
 very top of the page to prevent any other part of the page from loading.

The target is specified by the Location: header as the argument to the header() 
function. After calling this function the exit() function can be used to halt
 parsing of rest of the code.

-->
<?php
   if( $_POST["location"] ) {
      $location = $_POST["location"];
      header( "Location:$location" );
      
      exit();
   }
?>
<html>
   <body>
   
      <p>Choose a site to visit :</p>
      
      <form action = "<?php $_SERVER['PHP_SELF'] ?>" method ="POST">
         <select name = "location">.
         
            <option value = "http://www.tutorialspoint.com">
               Tutorialspoint.com
            </option>
         
            <option value = "http://www.google.com">
               Google Search Page
            </option>
         
         </select>
         <input type = "submit" />
      </form>
      
   </body>
</html>