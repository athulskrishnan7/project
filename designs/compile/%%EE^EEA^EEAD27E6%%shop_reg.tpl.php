<?php /* Smarty version 2.6.26, created on 2022-01-16 06:40:54
         compiled from shop_reg.tpl */ ?>
<html>
    <head>
        <title>Shop registration</title>
    </head>
<body >
<h2>  <u> <center> Shop registration<br></center></u></h2>
<form method="POST">
    <table style="margin-left: auto; margin-right: auto;">
        <input type="hidden" name="hide" value="h">
<tr><td>Shop Name : </td><td><input type="text" name="shop_name" ></td></tr>
<tr><td>Register No: </td><td><input type="text" name="shop_register" id=""></td></tr>
<tr><td>Address: </td><td><input type="text" name="shop_address" id=""></td></tr>
<tr><td>Pincode :</td><td><input type="text" name="shop_pincode" id=""></td></tr>
<tr><td>District : </td><td><select name="shop_district">
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
<tr><td> City : </td><td><input type="text" name="shop_city" id=""></td></tr>
<tr><td>Contact No: </td><td><input type="text" name="shop_contact" id=""></td></tr>
<tr><td>Email :</td><td> <input type="text" name="shop_email" id=""></td></tr>
<tr><td>Password :</td><td> <input type="text" name="shop_password" id=""></td></tr>
<tr><td>Re Enter Password:</td><td> <input type="text" name="repassword" id=""></td></tr>
<script type="text/javascript">if($shop_password!=$repassword)alert('re-enter the password')</script>
<tr><td></td></tr>
</table>
<center><input type="submit" name="" id="" style="color: red; background: #000;"></center>
</form>
</body>

</html>