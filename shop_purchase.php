<?php
include "settings/settings.php";
include "classes/userclass.php";
$obj=new userclass();

$m=$obj->categoryview();
  $smartyObj->assign('view',$m);


  $key=$_COOKIE['loginkey'];
$n=$obj->shop_categoryview();
 $smartyObj->assign('sub',$n);



if(isset($_POST['hide'])&&($_POST['hide'])=='h'){
	if(isset($_POST['name'])&&($_POST['name'])!=NULL){
		if(isset($_POST['category'])&&($_POST['category'])!=NULL){
			if(isset($_POST['subcategory'])&&($_POST['subcategory'])!=NULL){
				if(isset($_POST['quantity'])&&($_POST['quantity'])!=NULL){
					if(isset($_POST['amount'])&&($_POST['amount'])!=NULL){
						
							$name=$_POST['name'];
							$category=$_POST['category'];
							$subcategory=$_POST['subcategory'];
							$quantity=$_POST['quantity'];
							$amount=$_POST['amount'];
							
							$obj->shop_productpurchase($name,$category,$subcategory,$quantity,$amount,$key);

						
					}
					else
							echo"<script>alert('Product amount not entered')</script>";
				}
				else
							echo"<script>alert('Product quantity not entered')</script>";
			}
			else
							echo"<script>alert('Product sub-category not entered')</script>";
		}
		else
							echo"<script>alert('Product category not entered')</script>";

	}
	else
							echo"<script>alert('Product name not entered')</script>";

}



$smartyObj->display('shop/shop_header.tpl');
$smartyObj->display('shop/shop_purchase.tpl');
$smartyObj->display('shop/shop_footer.tpl');


?>
