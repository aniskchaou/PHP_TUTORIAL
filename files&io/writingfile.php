
<!--Writing a file
A new file can be written or text can be appended to an existing
 file using the PHP fwrite() function. This function requires two arguments 
 specifying a file pointer and the string of data that is to be written. 
 

-->

<?php
   $filename = "/home/user/guest/newfile.txt";
   $file = fopen( $filename, "w" );
   
   if( $file == false ) {
      echo ( "Error in opening new file" );
      exit();
   }
   fwrite( $file, "This is  a simple test\n" );
   fclose( $file );
?>
<html>
   
   <head>
      <title>Writing a file using PHP</title>
   </head>
   
   <body>
      
      <?php
         $filename = "newfile.txt";
         $file = fopen( $filename, "r" );
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );
         
         fclose( $file );
         
         echo ( "File size : $filesize bytes" );
         echo ( "$filetext" );
         echo("file name: $filename");
      ?>
      
   </body>
</html>