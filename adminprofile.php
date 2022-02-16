<?php
include_once('classes/userclass.php');
include_once('settings/settings.php');

$Obj=new userclass();

$smartyObj->display('admin/adminmainheader.tpl');
$smartyObj->display('admin/adminprofile.tpl');
$smartyObj->display('admin/adminmainfooter.tpl');


?>