<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fingerprint";
	$conn = new mysqli($servername, $username, $password, $dbname) or die('Can not connected to the db');

	$id=$_POST['id'];
	$sql="INSERT INTO theGeneral (ID) values($id)";
	if ($conn->query($sql) === TRUE) {
		echo "ID $id is added"; 	
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();   
?>