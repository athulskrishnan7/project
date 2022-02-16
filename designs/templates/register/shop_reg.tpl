<html>
    <head>
        <title>Shop registration</title>
    </head>
<body >
<center><h2><b><u>Shop / Institution Registration</u></b></h2></center><br>
<form method="POST">
    <table style="margin-left: auto; margin-right: auto;" cellspacing="6px" cellpadding="10px">
        <input type="hidden" name="hide" value="h">
<tr><td>Shop Name : </td><td><input type="text" name="shop_name"  style="border: solid black 1px;" class="form-control"></td></tr>
<tr><td>Register No: </td><td><input type="text" name="shop_register" id=""  style="border: solid black 1px;" class="form-control"></td></tr>
<tr><td>Address: </td><td><input type="text" name="shop_address" id=""  style="border: solid black 1px;" class="form-control"></td></tr>
<tr><td>Pincode :</td><td><input type="text" name="shop_pincode" id=""  style="border: solid black 1px;" class="form-control"></td></tr>
<tr><td>District : </td><td><select name="shop_district"  style="border: solid black 1px;" class="form-control">
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
<tr><td> City : </td><td><input type="text" name="shop_city" id=""  style="border: solid black 1px;" class="form-control"></td></tr>
<tr><td>Contact No: </td><td><input type="text" name="shop_contact" id=""  style="border: solid black 1px;" class="form-control"></td></tr>
<tr><td>Email :</td><td> <input type="text" name="shop_email" id=""  style="border: solid black 1px;" class="form-control"></td></tr>
<tr><td>Password :</td><td> <input type="text" name="shop_password" id=""  style="border: solid black 1px;" class="form-control"></td></tr>
<tr><td>Re Enter Password:</td><td> <input type="text" name="repassword" id=""  style="border: solid black 1px;" class="form-control"></td></tr>
<!-- <script type="text/javascript">if($shop_password!=$repassword)alert('re-enter the password')</script>
 --><tr><td></td></tr>
</table>
<center><input type="submit" name="" id=""  value="Register" style="color: white; background: red; width: 90px" class="form-control"></center>
</form>
<br><br>
</body>

</html>