<?php
include_once('classes/userclass.php');
include_once('settings/settings.php');
$obj=new userclass();
$s=$obj->userfetch();
$smartyObj->assign('data',$s);
$smartyObj->display('admin/adminmainheader.tpl');
$smartyObj->display('admin/admin_userview.tpl');
$smartyObj->display('admin/adminmainfooter.tpl');
?>