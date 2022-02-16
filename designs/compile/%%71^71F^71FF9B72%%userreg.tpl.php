<?php /* Smarty version 2.6.26, created on 2022-01-16 09:53:01
         compiled from userreg.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
</head>
<body>
	<center><h2>User Registration</h2></center>
	<form method="POST">
		<input type="hidden" name="hide" value="h">
		<table align="center">
			<tr>
				<td>
					Name :
				</td>
				<td>
					<input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td>Contact :</td><td><input type="text" name="contact"></td>
			</tr>
			<tr>
				<td>
					Email :
				</td>
				<td>
					<input type="email" name="email">
				</td>
			</tr>
			<tr>
				<td>
					Password:
				</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>

		</table>
		<center><input type="submit" name="submit" value="Register"></center>
	</form>

</body>
</html>