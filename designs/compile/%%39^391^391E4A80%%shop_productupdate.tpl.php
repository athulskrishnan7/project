<?php /* Smarty version 2.6.26, created on 2022-02-13 06:55:00
         compiled from shop/shop_productupdate.tpl */ ?>

	<section class="w3l-newsletter">
		<div class="form-25-main py-5">
			<div class="container py-lg-5">
 <!-- <div class="w3l-content-1 w3l-progressblock py-5"> -->
    <div class="container py-lg-5 py-md-4 py-2">
          <div class="title-content text-center mx-0">

  <h6 class="title-subhny two mb-2"><span>Product Update</span></h6>
</div>
<br>
 	<form method="POST" action="" style="color: white">
		
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
		<input type="hidden" name="hide" value="h" >
		<table align="center" cellspacing="10px" cellpadding="10px">

			<tr>
				<td>Product name</td><td><input type="text" name="name" class="form-control" value="<?php echo $this->_tpl_vars['d']['name']; ?>
"></select></td>
			</tr>
			<tr>
				<td>Product category </td><td> 
					<select name="category" style="padding: 5px 64px" class="form-control" >
                  <option value="">--select--</option>
                  
                    <option value="<?php echo $this->_tpl_vars['d']['category']; ?>
"><?php echo $this->_tpl_vars['d']['category']; ?>
</option>
                              </select>    </td>
			</tr>
			<tr>
				<td>Product subcategory </td>
				<td>
					<select name="subcategory"  style="padding: 5px 59px" class="form-control" >
						<option value="">--select--</option>
	                  
	                    <option value="<?php echo $this->_tpl_vars['d']['subcategory']; ?>
"><?php echo $this->_tpl_vars['d']['subcategory']; ?>
</option>
	                 
	                </select></td>
			</tr>
			<tr>
				<td>Quantity </td><td><input type="text" name="quantity" class="form-control" value="<?php echo $this->_tpl_vars['d']['quantity']; ?>
"></td>
			</tr>
			<tr>
				<td>Amount </td><td><input type="text" name="amount" class="form-control" value="<?php echo $this->_tpl_vars['d']['amount']; ?>
"></td>
			</tr>
			<tr>
				<td>Product details</td><td><input type="text" name="details" class="form-control"value="<?php echo $this->_tpl_vars['d']['details']; ?>
"></td>
			</tr>
			
		
	</table>
	<?php endforeach; endif; unset($_from); ?>
	<br>
	<center><input type="submit" name="submit"  style="background: red;color: white; padding: 0px 20px; padding-bottom: 5px; width: 10%" class="form-control" value="Update" ></center>
	</form>
</div>
</div>




</div>
</section>
