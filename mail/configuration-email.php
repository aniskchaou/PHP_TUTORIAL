<!--PHP must be configured correctly in the php.ini file with the 
details of how your system sends email. 

Open php.ini file available in /etc/ directory and find the section 
headed [mail function].

Windows users should ensure that two directives are supplied.
 The first is called SMTP that defines your email server address. 
 The second is called sendmail_from which defines your own email address.

The configuration for Windows should look something like this −

[mail function]
; For Win32 only.
SMTP = smtp.secureserver.net

; For win32 only
sendmail_from = webmaster@tutorialspoint.com
Linux users simply need to let PHP know the location of their sendmail application. The path and any desired switches should be specified to the sendmail_path directive.

The configuration for Linux should look something like this −

[mail function]
; For Win32 only.
SMTP = 

; For win32 only
sendmail_from = 

; For Unix only
sendmail_path = /usr/sbin/sendmail -t -i
Now you are ready to go −

