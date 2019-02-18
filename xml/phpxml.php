<!--
Parsing an XML Document
PHP 5's new SimpleXML module makes parsing an XML document, well, simple.
 It turns an XML document into an object that provides structured access to the XML.

To create a SimpleXML object from an XML document stored in a string, pass the string
 to simplexml_load_string( ). It returns a SimpleXML object.

-->
<html>
   <body>
      
      <?php
         $note=<<<XML
         
         <note>
            <to>Gopal K Verma</to>
            <from>Sairamkrishna</from>
            <heading>Project submission</heading>
            <body>Please see clearly </body>
         </note>
         
         XML;
         $xml=simplexml_load_string($note);
         print_r($xml);
      ?>
		
   </body>
</html>




<!--
Parsing XML
NOTE − You can use function simplexml_load_file( filename) if you have XML content 
in a file.


Generating an XML Document
SimpleXML is good for parsing existing XML documents, but you can't use it to create a
 new one from scratch.

The easiest way to generate an XML document is to build a PHP array whose structure 
mirrors that of the XML document and then to iterate through the array, printing each
 element with appropriate formatting.

-->

<?php
   $channel = array('title' => "What's For Dinner",
      'link' => 'http://menu.example.com/',
      'description' => 'Choose what to eat tonight.');
   
   print "<channel>\n";
   
   foreach ($channel as $element => $content) {
      print " <$element>";
      print htmlentities($content);
      print "</$element>\n";
   }
   
   print "</channel>";
?>