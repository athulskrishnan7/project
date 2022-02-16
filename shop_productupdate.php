<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

$key=$_GET['key'];
$m=$obj->shop_productcatch($key);
$smartyObj->assign('data',$m);


if(isset($_POST['hide'])&&($_POST['hide'])=='h'){
	if(isset($_POST['name'])&&($_POST['name'])!=NULL){
		if(isset($_POST['category'])&&($_POST['category'])!=NULL){
			if(isset($_POST['subcategory'])&&($_POST['subcategory'])!=NULL){
				if(isset($_POST['quantity'])&&($_POST['quantity'])!=NULL){
					if(isset($_POST['amount'])&&($_POST['amount'])!=NULL){
						if(isset($_POST['details'])&&($_POST['details'])!=NULL){
							$name=$_POST['name'];
							$category=$_POST['category'];
							$subcategory=$_POST['subcategory'];
							$quantity=$_POST['quantity'];
							$amount=$_POST['amount'];
							$details=$_POST['details'];
							$obj->shop_productupdate($name,$category,$subcategory,$quantity,$amount,$details,$key);

						}
						else
							echo"<script>alert('Product details not entered')</script>";
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
$smartyObj->display('shop/shop_productupdate.tpl');
$smartyObj->display('shop/shop_footer.tpl');


?>