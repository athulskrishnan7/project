<?php /* Smarty version 2.6.26, created on 2022-02-15 18:00:20
         compiled from register/userreg.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
</head>
<body>
	<center><h2><b><u>User Registration</u></b></h2></center><br>
	<form method="POST">
		<input type="hidden" name="hide" value="h">
		<table align="center" cellpadding="10px" cellspacing="10px">
			<tr>
				<td>
					Name :
				</td>
				<td>
					<input type="text" name="name" style="border: solid black 1px;" class="form-control">
				</td>
			</tr>
			<tr>
				<td>Contact :</td><td><input type="text" name="contact"  style="border: solid black 1px;"  class="form-control"></td>
			</tr>
			<tr>
				<td>
					Email :
				</td>
				<td>
					<input type="email" name="email"  style="border: solid black 1px;"  class="form-control">
				</td>
			</tr>
			<tr>
				<td>
					Password:
				</td>
				<td>
					<input type="password" name="password"  style="border: solid black 1px;"  class="form-control">
				</td>
			</tr>
<tr></tr>
		</table>
		<br>
		<center><input type="submit" name="submit" value="Register" class="form-control" style=" width: 90px; background: red;color: white" ></center>
	</form>
<br>
<br>
</body>
</html>