<?php
//Connection String
		$con = mysqli_connect("localhost", "root", "","newbies_db");
							//Host name, Username, Password :NO
							
		//Test connection to database
		if (!$con)
		{
			die('Could not connect: ' . mysql_error()); // If not connected
		}
		else{
			echo "<br><br>Status: Connected to phpmyadmin"; //If connected
		}
 
		// $db = mysqli_select_db("newbies_db"); //Select a specific database
		// if(!$db){
			// die('<br>No Database: ' . mysql_error()); // If not connected
		// }
		// else{
			// echo "<br>Connected to Database.";
		// }




















  
// $db = mysql_select_db("datashop", $con);
// if(!$db){
	// echo "database does not exist";
// }
// else{
	// echo "Connected to database";
// }

// $query=mysql_query("Select * from tbl_products") or die(mysql_error());

// while($row = mysql_fetch_array($query)){
	
		// echo $row['PID'];
	
// }

?>