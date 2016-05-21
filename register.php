<?php 
	include "conn.php";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "insert into user values(null,'$name','$email','$password')";
	if ($db->query($sql)){
		header("Location:signin.php");
	}else echo 'success';
 ?>