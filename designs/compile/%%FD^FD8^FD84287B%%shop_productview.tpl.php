<?php /* Smarty version 2.6.26, created on 2022-02-13 07:15:46
         compiled from shop/shop_productview.tpl */ ?>
<section class="w3l-newsletter">
		<div class="form-25-main py-5">
			<div class="container py-lg-5">
 <!-- <div class="w3l-content-1 w3l-progressblock py-5"> -->
    <div class="container py-lg-5 py-md-4 py-2">
          <div class="title-content text-center mx-0">

  <h6 class="title-subhny two mb-2"><span>Product View</span></h6>
</div>
<br>
<!-- style="border-collapse:collapse ;     background: black; border: chocolate 
	 style="color: chartreuse""
	  border="1"  cellpadding="10px"  -->
	<center><h2>Product View</h2>
	<table  class="table table-striped table-dark table-hover"">
		<thead >
			<tr>
			<th  scope="col">Product Name</th>
			<th  scope="col">Product Category</th>
			<th  scope="col">Product Sub-category</th>
			<th  scope="col">Quantity</th>
			<th  scope="col">Amount</th>
			<th  scope="col">Product Details</th>
			<th  scope="col">Update</th>
			<th  scope="col">Delete</th>

		</tr>
		</thead>
		<tbody style="color: white">
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['d']['name']; ?>
</td>
				<td><?php echo $this->_tpl_vars['d']['category']; ?>
</td>
				<td><?php echo $this->_tpl_vars['d']['subcategory']; ?>
</td>
				<td><?php echo $this->_tpl_vars['d']['quantity']; ?>
</td>
				<td><?php echo $this->_tpl_vars['d']['amount']; ?>
</td>
				<td><?php echo $this->_tpl_vars['d']['details']; ?>
</td>
				<td><a href="shop_productupdate.php?key=<?php echo $this->_tpl_vars['d']['prokey']; ?>
"><button style="background: green;color: white" class="from-control">Update</button></a></td>
				<td><a href="shop_productdel.php?key=<?php echo $this->_tpl_vars['d']['prokey']; ?>
"><button style="background: green;color: white" class="from-control">Delete</button></a></td>

			</tr>
			<?php endforeach; endif; unset($_from); ?>
		</tbody>

	</table>
	</center>
</div>
</div>
</div>
</section>