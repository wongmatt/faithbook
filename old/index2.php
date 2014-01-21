<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
	<title>Welcome to Faithbook!</title>
</head>

<body id="everything">
	<div id="login">
		<fieldset><legend>Log-in!</legend>
			<form method="POST" action="connectivity.php">
				<div id="right">
					User: <input type="text" name="oldusername" size="20">
					Password: <input type="password" name="oldpassword" size="20">
					<input id="button1" type="submit" name="signin" value="Log-In">
				</div>
			</form>
		</fieldset>
	</div>
	</div>
	<div id="signup">
		<fieldset><legend>Sign-up!</legend>
			<table>
				<tr>
					<form method="POST" action="connectivity.php">
						<td>Name</td><td><input type="text" name="name"></td>
				</tr>
				<tr>	
					<td>Username</td><td><input type="text" name="newusername"></td>
				</tr>
				<tr>
					<td>E-mail</td><td><input type="text" name="email"></td>
				</tr>	
				<tr>	
					<td>Password</td><td><input type="password" name="newpassword"></td>
				</tr>
				<tr>	
					<td>Confirm Password</td><td><input type="password" name="confirmpassword"></td>
				</tr>
				<tr>	
					<td><input id="button2" type="submit" name="signup" value="Sign-up"></td>
				</tr>
				</form>
			</table>
		</fieldset>
	</div>
</body>

</html>