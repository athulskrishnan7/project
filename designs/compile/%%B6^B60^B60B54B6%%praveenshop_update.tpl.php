<?php /* Smarty version 2.6.26, created on 2022-02-13 06:18:05
         compiled from shop/praveenshop_update.tpl */ ?>

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
            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
            <input type="hidden" name="hide" value="h">
            
    <tr><td>Shop Name : </td><td><input type="text" name="shop_name" value ="<?php echo $this->_tpl_vars['d']['name']; ?>
 " class="form-control"></td></tr>
    <tr><td>Register No: </td><td><input type="text" name="shop_register" value ="<?php echo $this->_tpl_vars['d']['register']; ?>
 " id=""  class="form-control"></td></tr>
    <tr><td>Address: </td><td><input type="text" name="shop_address" value ="<?php echo $this->_tpl_vars['d']['address']; ?>
 " id=""  class="form-control"></td></tr>
    <tr><td>Pincode :</td><td><input type="text" name="shop_pincode" value ="<?php echo $this->_tpl_vars['d']['pincode']; ?>
 " id=""  class="form-control"></td></tr>
    <tr><td>District : </td><td><select name="shop_district" value ="<?php echo $this->_tpl_vars['d']['district']; ?>
 "  class="form-control">
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
    <tr><td> City : </td><td><input type="text" name="shop_city" value ="<?php echo $this->_tpl_vars['d']['city']; ?>
 " id=""  class="form-control"></td></tr>
    <tr><td>Contact No: </td><td><input type="text" name="shop_contact" value ="<?php echo $this->_tpl_vars['d']['contact']; ?>
 " id=""  class="form-control"></td></tr>
    <tr><td>Email :</td><td> <input type="text" name="shop_email" value ="<?php echo $this->_tpl_vars['d']['email']; ?>
 " id=""  class="form-control"></td></tr>
    <tr><td></td></tr>
    <?php endforeach; endif; unset($_from); ?>
    </table>
    <center><input type="submit" name="submit"  style="background: red;color: white; padding: 0px 20px; padding-bottom: 5px; width: 10%" class="form-control" value="Update" ></center>
    </form>
</div>
</div>
</div>
</section>