
    <section class="w3l-newsletter">
        <div class="form-25-main py-5">
            <div class="container py-lg-5">
 <!-- <div class="w3l-content-1 w3l-progressblock py-5"> -->
    <div class="container py-lg-5 py-md-4 py-2">
          <div class="title-content text-center mx-0">

  <h6 class="title-subhny two mb-2"><span>Profile Update</span></h6>
</div>
<br>
                <form method="POST" action="" style="color: white">

        <table style="margin-left: auto; margin-right: auto; " cellspacing="5px" cellpadding="7px" >
            {foreach from=$data item="d"}
            <input type="hidden" name="hide" value="h">
            
    <tr><td>Shop Name : </td><td><input type="text" name="shop_name" value ="{$d.name} " class="form-control"></td></tr>
    <tr><td>Register No: </td><td><input type="text" name="shop_register" value ="{$d.register} " id=""  class="form-control"></td></tr>
    <tr><td>Address: </td><td><input type="text" name="shop_address" value ="{$d.address} " id=""  class="form-control"></td></tr>
    <tr><td>Pincode :</td><td><input type="text" name="shop_pincode" value ="{$d.pincode} " id=""  class="form-control"></td></tr>
    <tr><td>District : </td><td><select name="shop_district" value ="{$d.district} "  class="form-control">
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
    <tr><td> City : </td><td><input type="text" name="shop_city" value ="{$d.city} " id=""  class="form-control"></td></tr>
    <tr><td>Contact No: </td><td><input type="text" name="shop_contact" value ="{$d.contact} " id=""  class="form-control"></td></tr>
    <tr><td>Email :</td><td> <input type="text" name="shop_email" value ="{$d.email} " id=""  class="form-control"></td></tr>
    <tr><td></td></tr>
    {/foreach}
    </table>
    <center><input type="submit" name="submit"  style="background: red;color: white; padding: 0px 20px; padding-bottom: 5px; width: 10%" class="form-control" value="Update" ></center>
    </form>
</div>
</div>
</div>
</section>
