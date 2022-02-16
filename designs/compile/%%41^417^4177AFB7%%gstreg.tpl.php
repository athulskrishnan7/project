<?php /* Smarty version 2.6.26, created on 2022-01-16 07:36:56
         compiled from gstreg.tpl */ ?>
<html>
    <head>
        <title>Gst Controller Registration</title>
    </head>
<body >
<h2>  <u> <center> Gst registration<br></center></u></h2>
<form method="POST">
    <table style="margin-left: auto; margin-right: auto;">
        <input type="hidden" name="hide" value="h">
<tr><td>Full Name : </td><td><input type="text" name="fullname" ></td></tr>
<tr><td>Address: </td><td><textarea name="address"></textarea></td></tr>
<tr><td>Pincode :</td><td><input type="text" name="pincode" id=""></td></tr>
<tr><td>District : </td><td><select name="district">
        <option value="0">--Select--</option>
        <option value="Thiruvanthapuram">Thiruvanthapuram</option>
        <option value="Kollam<">Kollam</option>
        <option value="Pathanamthitta">Pathanamthitta</option>
        <option value="Alapuzha">Alapuzha</option>
        <option value="Kottayam">Kottayam</option>
        <option value="Idduki">Idduki</option>
        <option value="Ernakulam">Ernakulam</option>
        <option value="Thrissur">Thrissur</option>
        <option value="Palakkad">Palakkad</option>
        <option value="Malapuram">Malapuram</option>
        <option value="Kozhikode">Kozhikode</option>
        <option value="Wayanad">Wayanad</option>
        <option value="Kannur">Kannur</option>
        <option value="Kasargod">Kasargod</option>
</select></td></tr>
<tr>
    <td>Gender :</td><td><input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
    <td>Date of Birth:</td><td><input type="date" name="dob"></td>
</tr>
<tr>
    <td>Office Address :</td><td><textarea name="officeaddress"></textarea></td>
</tr>

<tr><td> City : </td><td><input type="text" name="city" id=""></td></tr>
<tr><td>Contact No: </td><td><input type="text" name="contact" id=""></td></tr>
<tr><td>Email :</td><td> <input type="text" name="email" id=""></td></tr>
<tr><td>Password :</td><td> <input type="text" name="password" id=""></td></tr>
<tr><td>Re Enter Password:</td><td> <input type="text" name="repassword" id=""></td></tr>
<!-- <script type="text/javascript">if($shop_password!=$repassword)alert('re-enter the password')</script>
 --><tr><td></td></tr>
</table>
<center><input type="submit" name="" id="" style="color: red; background: #000;"></center>
</form>
</body>

</html>