<?php 
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['loginkey'];
$m=$obj->shop_productview($key);
$smartyObj->assign('data',$m);
$smartyObj->display('shop/shop_header.tpl');
$smartyObj->display('shop/shop_productview.tpl');
$smartyObj->display('shop/shop_footer.tpl');


 ?>