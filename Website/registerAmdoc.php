<!DOCTYPE html>
<html>
<head>
  <title>Register - Amdocs</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body style="background-color:#FFFFC2;">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<div style=" text-align: center; background: #FFF380;height: 80px;">
		 <h1><a href="https://www.amdocs.com/"><img style="height:80px;" src="th.jfif" /></a></h1>
	</div>
	<div class="header">
		<h2>Register</h2>
	</div>
	<form method="post" action = "register.php" class="reg_form">
		<div class="Reg">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="Reg">
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<div class="Reg">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="Reg">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>
		<div class="Reg">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<div>
			Already a member? <a href="loginAmdoc.php">Sign in</a>
		</div>
	</form>
	<div class="foot">
		<center>
		  	<fieldset style="width: 200px;">
			  	<legend> Contact Me: </legend>
			  	<a href="http://www.facebook.com/niweshgupta" class="fa fa-facebook" style="padding: 10px;"></a>
			  	<a href="http://www.twitter.com/niweshgupta" class="fa fa-twitter" style="padding: 10px;"></a>
			  	<a href="http://www.instagram.com/niweshgupta" class="fa fa-instagram" style="padding: 10px;"></a>
		  	</fieldset>
		</center>
  	</div>
</body>
</html>