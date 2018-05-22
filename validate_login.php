<?php 
	session_start();
	require 'sqlconnect.php';
	
	if(isset($_POST["username"])){
		$username = $_POST["username"];
		$pwd = $_POST["password"];
		
		$sql = "SELECT id,username,password FROM user_registration WHERE username = '".$username."' AND password ='".$pwd."'";
		echo $sql;
		$res = mysqli_query($conn,$sql);
		if(mysqli_num_rows($res) > 0){
			//echo "Login succesfull";
			$row = mysqli_fetch_assoc($res);
			$_SESSION["userid"] = $row["id"];
			$_SESSION["username"] = $username;
			header('Location:BizShot_Editprofile.php');
		}
		else{
			echo "Login failed";
		}
		
	}

?>