<?php
include_once('classes/userclass.php');
include_once('settings/settings.php');
$obj=new userclass();
$s=$obj->shopfetch();
$smartyObj->assign('data',$s);
$smartyObj->display('admin/adminmainheader.tpl');
$smartyObj->display('admin/admin_shopview.tpl');
$smartyObj->display('admin/adminmainfooter.tpl');
?>