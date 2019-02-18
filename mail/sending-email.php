<!--
Sending plain text email
PHP makes use of mail() function to send an email. 
This function requires three mandatory arguments that specify 
the recipient's email address, the subject of the the message 
and the actual message additionally there are other two optional
 parameters.

mail( to, subject, message, headers, parameters );


1	
to

Required. Specifies the receiver / receivers of the email

2	
subject

Required. Specifies the subject of the email. This parameter cannot contain 
any newline characters

3	
message

Required. Defines the message to be sent. Each line should be separated with a 
LF (\n). Lines should not exceed 70 characters

4	
headers

Optional. Specifies additional headers, like From, Cc, and Bcc. 


5	
parameters

Optional. Specifies an additional parameter to the send mail program

As soon as the mail function is called PHP will attempt to send the email then 
it will return true if successful or false if it is failed.

Multiple recipients can be specified as the first argument to the mail() 
function in a comma separated list.
-->


<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "xyz@somedomain.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>
