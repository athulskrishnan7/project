<?php /* Smarty version 2.6.26, created on 2022-01-10 10:47:14
         compiled from student.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action=" ">
		<table align="center">
			<input type="hidden" name="hide" value="h">
			<tr><td>Student Name</td><td><input type="text" name="student_name" class="form-control"></td></tr>
			<tr><td>Address</td><td><textarea name="addr" class="form-control"></textarea></td></tr>
			<tr><td>Pincode</td><td><input type="text" name="pincode" class="form-control"></td></tr>
			<tr><td>District</td><td><select name="district" class="form-control">
				<option>---Select---</option>
				<option>Trivandrum</option>
				<option>Kollam</option>
				<option>Pathanamthitta</option>
				<option>Alapuzha</option>
				<option>Kottayam</option>
				<option>Idukki</option>
				<option>Ernakulam</option>
				<option>Thrissur</option>
				<option>Palakkad</option>
				<option>Malappuram</option>
				<option>Kozhikode</option>
				<option>Wayanad</option>
				<option>Kannur</option>
				<option>Kasargod</option></select></td></tr>
				<tr><td>Gender</td><td><input type="radio" name="gender" value="male">
					Male
				<input type="radio" name="gender" value="female">
				    Female</td></tr>
				    <tr><td>Date of Birth</td><td><input type="date" name="date_of_birth" class="form-control"></td></tr>
				    <tr><td>Institution Name</td><td><input type="text" name="institution" class="form-control"></td></tr>
				    <tr><td>Course/Section</td><td><input type="text" name="course" class="form-control"></td></tr>
				    <tr><td>Semester/Class</td><td><input type="text" name="semester" class="form-control"></td></tr>
				    <tr><td>Contact No</td><td><input type="text" name="contact_no" class="form-control"></td></tr>
				    <tr><td>Email</td><td><input type="email" name="email" class="form-control"></td></tr>
				    <tr><td>Password</td><td><input type="password" name="password" class="form-control"></td></tr>
				    <tr><td>Confirm Password</td><td><input type="password" name="confirm_password" class="form-control"></td></tr>
				    <tr><td></td><td><input type="submit" value="Register" class="btn btn-success"></td></tr>
				</table>
			</form>
</body>
</html>