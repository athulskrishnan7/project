<?php /* Smarty version 2.6.26, created on 2022-02-13 15:04:17
         compiled from user/user_update.tpl */ ?>

<center>

<div class="section padding_layout_1 checkout_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="checkout-form">
          <<form>
       <div class="form-row">
         
            	<input type="hidden" name="hide" value="h">
            <div class="row">
                    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
               <div class="form-group col-md-6">
                  <label>Name</label>
                  <input type="text" name="name" value=<?php echo $this->_tpl_vars['d']['name']; ?>
>
                </div>
              
             
             
             
              <div class="form-group col-md-6">
                  <label>Phone <span class="red">*</span></label>
                 <input type="text" name="contact" value=<?php echo $this->_tpl_vars['d']['contact']; ?>
 >
                </div>
              <br>
               <div class="form-group">
                  <label>Email address <span class="red">*</span></label>
                 <input type="email" name="email" value=<?php echo $this->_tpl_vars['d']['email']; ?>
>
                </div>
              </div>
                
                <!-- <button value="<?php echo $this->_tpl_vars['d']['key']; ?>
">Update</button> --> 
         
<?php endforeach; endif; unset($_from); ?>
<div class="col-md-12">
                <div class="form-field">
           
  <input type="submit" name="" value="Update"> 

<!-- <center>

<form style="margin-left: auto;margin-right: auto;">
  <input type="hidden" name="hide" value="h">
  <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>

   <div class="form-group col-md-6">
      <label for="inputPassword4">Name</label>
      <input type="text" class="form-control" id="inputPassword4"  name="name" value=<?php echo $this->_tpl_vars['d']['name']; ?>
>
    </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">contact</label>
      <input type="text" class="form-control" id="inputEmail4"name="contact" value=<?php echo $this->_tpl_vars['d']['contact']; ?>
 >
    </div>
   
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputAddress">Email</label>
    <input type="email" class="form-control" id="inputAddress" name="email" value=<?php echo $this->_tpl_vars['d']['email']; ?>
>
  </div>
</div>
 <div class="form-group col-md-6">
 </div>

<div class="col-md-12">
                <div class="form-field">
                <input type="submit" name="" value="Update"> 
              </div>
            </div>
             <?php endforeach; endif; unset($_from); ?>
          </form>

</center> -->
    </div>
        </div>
              <!-- <div class="col-md-6">
                <div class="form-field">
                  <input name="ck" type="checkbox">
                  <span class="crte-ac">Create an account?</span> </div>
              </div> -->
            </div>
            
         
        </div>
      </div>
  </div>
</div>
</div>

  </center>   
      
</div>
</div>