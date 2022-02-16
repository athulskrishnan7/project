<?php /* Smarty version 2.6.26, created on 2022-01-29 10:16:28
         compiled from user/complaint.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title>Complaint</title>
</head>
<body>
	<center><h1 style="padding: 20px;color: blue; background: aqua;">Complaint</h1></center>
		<form method="POST" action="">
			<input type="hidden" name="hide" value="h">
			<table align="center">
				<tr>
					<td>Subject </td><td><input type="text" name="subject"></td>
				</tr>
				
				<tr> 
					<td>Bill Number</td><td><input type="text" name="bill_no"></td>
				</tr>

				<tr>
					<td>Complaint </td><td><textarea name="complaint" width="300px" height="400px"></textarea></td>
				</tr>
				
				<!-- <tr>
					<td>Proof(Optional) </td><td><input type="file" name="proof"></td>
				</tr> -->
				</table>
				
					<center><input type="submit" name="submit" value="Send"></center>
				
			
		</form>
</body>
</html>