<?php
require ("create-tables.php");
	#connect to a database 
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, '');
	#Check the connection
if(mysqli_connect_errno()){
		#Connection Failed
	echo 'Connection Failed!';
}
//check the existence of the db
$db = mysqli_select_db($conn, DB_NAME);
if(empty($db)){
	$dbcreate = "CREATE DATABASE dbcampbc";
	$check = mysqli_query($conn, $dbcreate);
	if(!($check)){
		echo "Database Create ERROR";
	}else{
		$message = "Database is Created";
        echo "<script type='text/javascript'>alert('$message');</script>"; 
		fn_create_tables($conn);
		$message = "Tables are Created";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
}else{
	
	fn_create_tables($conn);
}
?>