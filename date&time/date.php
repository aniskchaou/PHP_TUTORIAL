<!--
Getting the Time Stamp with time()
PHP's time() function gives you all the information that you need about the 
current date and time. It requires no arguments but returns an integer.

The integer returned by time() represents the number of seconds elapsed since 
midnight GMT on January 1, 1970. This moment is known as the UNIX epoch, 
and the number of seconds that have elapsed since then is referred to as a time stamp.

-->
<?php
   print time();
?>


<!--
Converting a Time Stamp with getdate()
The function getdate() optionally accepts a time stamp and returns an associative 
array containing information about the date. If you omit the time stamp, 
it works with the current time stamp as returned by time().

-->
<?php
   $date_array = getdate();
   
   foreach ( $date_array as $key => $val ){
      print "$key = $val<br />";
   }
	
   $formated_date  = "Today's date: ";
   $formated_date .= $date_array['mday'] . "/";
   $formated_date .= $date_array['mon'] . "/";
   $formated_date .= $date_array['year'];
   
   print $formated_date;
?>
<!--
Converting a Time Stamp with date()
The date() function returns a formatted string representing a date. 
You can exercise an enormous amount of control over the format that date() 
returns with a string argument that you must pass to it.

date(format,timestamp)
The date() optionally accepts a time stamp if omitted then current date and 
time will be used. Any other data you include in the format string passed to date()
 will be included in the return value.

-->
<?php
   print date("m/d/y G.i:s<br>", time());
   print "Today is ";
   print date("j of F Y, \a\\t g.i a", time());
?>
