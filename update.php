<?php 
	include 'conn.php';
	$newname = $_POST['name'];
	$id = $_GET['id'];
	$sql = "update user set name='$newname' where id='$id'";
	if ($db->query($sql)){
		header("Location:admin-panel.php");
	}
 ?>