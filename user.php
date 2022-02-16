<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$smartyObj->display('user/userheader.tpl');
$smartyObj->display('user/userfooter.tpl');

?>