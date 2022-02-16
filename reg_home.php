<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$smartyObj->display('register/reg_head.tpl');
$smartyObj->display('register/reg_home.tpl');
$smartyObj->display('register/reg_footer.tpl');

?>