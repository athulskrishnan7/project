<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['loginkey'];
$d=$obj->praveenshop_catch($key);
$smartyObj->assign('data',$d);

 if(isset($_POST['hide']) AND ($_POST['hide'])=='h'){
 	if(isset($_POST['shop_name']) AND ($_POST['shop_name'])!=null){
 			if(isset($_POST['shop_register']) AND ($_POST['shop_register'])!=null){
 					if(isset($_POST['shop_address']) AND ($_POST['shop_address'])!=null){
 							if(isset($_POST['shop_pincode']) AND ($_POST['shop_pincode'])!=null){
 									if(isset($_POST['shop_district']) AND ($_POST['shop_district'])!=null){
 											if(isset($_POST['shop_city']) AND ($_POST['shop_city'])!=null){
 													if(isset($_POST['shop_contact']) AND ($_POST['shop_contact'])!=null){
 															if(isset($_POST['shop_email']) AND ($_POST['shop_email'])!=null){
 																
 																		$name=$_POST['shop_name'];
 																		$register=$_POST['shop_register'];
 																		$address=$_POST['shop_address'];
 																		$pincode=$_POST['shop_pincode'];
 																		$district=$_POST['shop_district'];
 																		$city=$_POST['shop_city'];
 																		$contact=$_POST['shop_contact'];
 																		$email=$_POST['shop_email'];
 																	
 																		$obj->shopupdate($key,$name,$register,$address,$pincode,$district,$city,$contact,$email);

 																	
 															}
 															else
 																		echo"<script>alert('email not entered')</script>";
 													}
 													else
 																		echo"<script>alert('contact not entered')</script>";
 											}
 											else
 																		echo"<script>alert('city not entered')</script>";
 									}
 									else
 																		echo"<script>alert('district not entered')</script>";
 							}
 							else
 																		echo"<script>alert('pincode not entered')</script>";
 					}
 					else
 																		echo"<script>alert('address not entered')</script>";
 			}
 			else
 																		echo"<script>alert('register no not entered')</script>";
 	}
 	else
 																		echo"<script>alert('shop name not entered')</script>";
 }



$smartyObj->display('shop/shop_header.tpl');
$smartyObj->display('shop/praveenshop_update.tpl');
$smartyObj->display('shop/shop_footer.tpl');
?>