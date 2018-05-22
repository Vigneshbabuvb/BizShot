<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bizshot";
	
	$conn = mysqli_connect($hostname,$username,$password,$dbname);
	
	if(mysqli_connect_errno($conn)){
		echo "Mysql connect error" ;
		echo mysqli_errno($conn);
	}
	/*else{
		echo "connected successfully";
	}*/
 ?>
