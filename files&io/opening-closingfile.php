<!--Opening and Closing Files
The PHP fopen() function is used to open a file. It requires two arguments stating
 first the file name and then mode in which to operate.

Files modes can be specified as one of the six options in this table.


	
r

Opens the file for reading only.
Places the file pointer at the beginning of the file.

	
r+

Opens the file for reading and writing.
Places the file pointer at the beginning of the file.


w

Opens the file for writing only.
Places the file pointer at the beginning of the file.
and truncates the file to zero length. If files does not
exist then it attempts to create a file.

	
w+

Opens the file for reading and writing only.

Places the file pointer at the beginning of the file.

and truncates the file to zero length. If files does not

exist then it attempts to create a file.


a

Opens the file for writing only.

Places the file pointer at the end of the file.

If files does not exist then it attempts to create a file.


a+

Opens the file for reading and writing only.

Places the file pointer at the end of the file.

If files does not exist then it attempts to create a file.




If an attempt to open a file fails then fopen returns a value of false otherwise
 it returns a file pointer which is used for further reading or writing to that
  file.

After making a changes to the opened file it is important to close it with the 
fclose() function. The fclose() function requires a file pointer as its 
argument and then returns true when the closure succeeds or false if it fails.









-->