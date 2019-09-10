<?php
session_start(); 
$conn = mysqli_connect('localhost','root','','smtpserver');
$success = isset($_POST['uploadFile']);
if ($success) {
	if($conn) {
		$open = fopen($_POST['uploadFile'],'r');
		if(!$open) {
			echo "Error opening file...";
		}
		else {
			while (!feof($open)) {
				$getTextLine = fgets($open);
				$explodeLine = explode(":",$getTextLine);
	
				list($server_ip,$server_port,$email,$password) = $explodeLine;
				echo "$server_ip $server_port $email $password <br>";
				#$qry = "INSERT into smtplists (server_ip,server_port,email,password) values('".$server_ip."','".$server_port."','".$email."','".$password."')";
				#mysqli_query($conn,$qry);
				#if (!$qry) {
			#		echo "Error inserting entries into the database...";
			#	}
			}
			fclose($open);
		}
	}
	else {	
		echo "Cannot connect to database...";
		die(mysqli_error());
	}
}
?>
