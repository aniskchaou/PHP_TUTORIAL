<!--Reading a file
Once a file is opened using fopen() function it can be read with a function 
called fread(). This function requires two arguments. These must be the file
 pointer and the length of the file expressed in bytes.

The files length can be found using the filesize() function which takes the 
file name as its argument and returns the size of the file expressed in bytes.
-->

<html>

   <head>
      <title>Reading a file using PHP</title>
   </head>
   
   <body>
      
      <?php
         $filename = "tmp.txt";
         $file = fopen( $filename, "r" );
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );
         fclose( $file );
         
         echo ( "File size : $filesize bytes" );
         echo ( "<pre>$filetext</pre>" );
      ?>
      
   </body>
</html>