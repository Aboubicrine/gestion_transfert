<?php 

	/*connexion a la base de donnee*/
	 $DB_SERVER = "localhost"; 
	 $DB_USER = "root"; 
	 $DB_PASS = ""; 
	 $DB_DATABASE = "gestion_transfert"; 

/******************************************************************/
 
	 try { 
	 $connect =  new PDO("mysql:host=$DB_SERVER; dbname=$DB_DATABASE", $DB_USER,$DB_PASS); 
	 } 
 
	 catch (PDOException $e) { 

	 	if (empty($DB_DATABASE)) {
	 		die("<strong>Database Error..! </strong><a href='install'>Start installation</a>") ;
	 	} else {
	 		die("<strong>Database Error..! </strong>") ;
	 	}
	 	 
	 } 
 
	  
	 	
 
?>