<?php 
	include "conn.php";
	$id = $_GET['id'];
	$sql = "delete from user where id = '$id'";
	if ($db->query($sql)){
		header("Location:admin-panel.php");
	}
 ?>