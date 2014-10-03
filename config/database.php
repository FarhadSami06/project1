<?php
   
   $db_link = mysql_connect('localhost', 'root', 'root') or die ('Could not connect to db'  . mysql_error());
mysql_select_db('homaira');
   if(!db_link) {
   	die("could not connect to the database: " . mysql_error());
   }
   
   
   
   
   
   
   
   
   /*$db_link = mysqli_connect('localhost','root', 'root', 'homaira');
	if (!$db_link) {
		die("Could not connect to the database: ".mysqli_error()); 
	}
    * 
    */
?>
