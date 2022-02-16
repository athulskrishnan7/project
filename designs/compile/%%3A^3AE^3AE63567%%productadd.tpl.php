<?php /* Smarty version 2.6.26, created on 2022-02-05 07:46:48
         compiled from shop/productadd.tpl */ ?>

	<section class="w3l-newsletter">
		<div class="form-25-main py-5">
			<div class="container py-lg-5">
 <!-- <div class="w3l-content-1 w3l-progressblock py-5"> -->
    <div class="container py-lg-5 py-md-4 py-2">
          <div class="title-content text-center mx-0">

  <h6 class="title-subhny two mb-2"><span>Product Add</span></h6>
</div>
<br>
 	<form method="POST" action="" style="color: white">
		<input type="hidden" name="hide" value="h" >
		<table align="center" cellspacing="10px" cellpadding="10px">

			<tr>
				<td>Product name</td><td><input type="text" name="name" class="form-control"></select></td>
			</tr>
			<tr>
				<td>Product category </td><td> 
					<select name="category" style="padding: 5px 64px" class="form-control">
                  <option value="">--select--</option>
                    <?php $_from = ($this->_tpl_vars['view']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                    <option value="<?php echo $this->_tpl_vars['d']['category']; ?>
"><?php echo $this->_tpl_vars['d']['category']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>    </td>
			</tr>
			<tr>
				<td>Product subcategory </td>
				<td>
					<select name="subcategory"  style="padding: 5px 59px" class="form-control">
						<option value="">--select--</option>
	                    <?php $_from = ($this->_tpl_vars['sub']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['m']):
?>
	                    <option value="<?php echo $this->_tpl_vars['m']['subcategory']; ?>
"><?php echo $this->_tpl_vars['m']['subcategory']; ?>
</option>
	                    <?php endforeach; endif; unset($_from); ?>
	                </select></td>
			</tr>
			<tr>
				<td>Quantity </td><td><input type="text" name="quantity" class="form-control"></td>
			</tr>
			<tr>
				<td>Amount </td><td><input type="text" name="amount" class="form-control"></td>
			</tr>
			<tr>
				<td>Product details</td><td><input type="text" name="details" class="form-control"></td>
			</tr>
			
		
	</table>
	<br>
	<center><input type="submit" name="submit"  style="background: red;color: white; padding: 0px 20px; padding-bottom: 5px; width: 10%" class="form-control" ></center>
	</form>
</div>
</div>




</div>
</section>
