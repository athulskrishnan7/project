<html>
    <head>
        <title>Gst Controller Updation</title>
    </head>
<body >
<h2>  <u> <center> Gst Controller Updation<br></center></u></h2>
<form method="POST">
        <input type="hidden" name="hide" value="h">

    <table style="margin-left: auto; margin-right: auto;">
        {foreach from=$data item="d"}

<tr><td>Full Name : </td><td><input type="text" name="fullname"placeholder="{$d.name} "  ></td></tr>
<tr><td>Address: </td><td><textarea name="address" placeholder="{$d.address} " ></textarea></td></tr>
<tr><td>Pincode :</td><td><input type="text" name="pincode" placeholder="{$d.pincode} "  id=""></td></tr>
<tr><td>District : </td><td><select name="district" placeholder="{$d.district} " >
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
    <!-- placeholder="{$d.gender} " -->
    <td>Gender :</td><td><input type="radio" name="gender"   value="male">Male <input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
    <td>Date of Birth:</td><td><input type="date" name="dob"  placeholder="{$d.dob} "></td>
</tr>
<tr>
    <td>Office Address :</td><td><textarea name="officeaddress"  placeholder="{$d.officeaddress}" ></textarea></td>
</tr>

<tr><td> City : </td><td><input type="text" name="city"  placeholder="{$d.city} " id=""></td></tr>
<tr><td>Contact No: </td><td><input type="text" name="contact" placeholder="{$d.contact} " id=""></td></tr>
<tr><td>Email :</td><td> <input type="text" name="email"  placeholder="{$d.email} " id=""></td></tr>

<!-- <script type="text/javascript">if($shop_password!=$repassword)alert('re-enter the password')</script>
 --><tr><td></td></tr>
 {/foreach}
</table>
<center><input type="submit" name="" value="Update" id="" style="color: red; background: yellow;"></center>
</form>
</body>

</html>