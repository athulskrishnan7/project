<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$smartyObj->display('shop/shop_header.tpl');
$smartyObj->display('shop/shop_footer.tpl');
?>