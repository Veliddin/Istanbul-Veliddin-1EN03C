<?php 
	include "conn.php";
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "select * from user where email='$email' and password='$password'";
	if ($data = $db->query($sql)){

		if (mysqli_num_rows($data)>0){
			$row = $data->fetch_array();
			session_start();
			$_SESSION['id'] = $row['id'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['email'] = $row['email'];
			if($row['email']=='admin@admin' and $row['password']='admin'){
				header("Location:admin-panel.php");
			}else
			header("Location:home.php");
		}else echo 'error';
		
	}else echo 'error2';
 ?>