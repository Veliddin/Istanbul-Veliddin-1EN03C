-*<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="IstanbulCafeStyle.css">
<title>Istanbul Cafe</title>
</head>
<body>
	<div align="center">
	 <img class="istanbul" src="istanbul.jpg">
	</div>
 
 <div id="txt" style="margin:50px;
 					margin-left:500px;
 					margin-right:500px;
 					border:1px solid black;
 					background:lightgrey;
 					padding:15px;
 					border-radius:15px;
 					opacity:0.9;">
 	<form method="POST" action="register.php" onsubmit="return func(this)">
 		<h3>Registration</h3>
 		Name: <input type="text" name="name" palceholder="enter name"><br><br>
 		Email: <input type="email" name="email" palceholder="enter email"><br><br>
 		Password: <input type="password" name="password" palceholder="enter password"><br><br>
 		<input type="submit" value="register" style="margin-left:100px;">
 	</form>
 	<a href="signin.php">Sign in</a>
</div>
  </body>
</html>
</body>

<script>
	function func(form){
		if(form.name.value == ""){
			alert("Error: Name must be filled!");
			return false;
		}
		if(form.email.value == ""){
			alert("Error: email must be filled!");
			return false;
		}
		if(form.password.value == ""){
			alert("Error: password must be filled!");
			return false;
		}return true;
	}
</script>

</html>