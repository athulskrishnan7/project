<?php
include_once('classes/userclass.php');
include_once('settings/settings.php');
$obj=new userclass();
$m=$obj->admin_shoptaxview();
$smartyObj->assign('view',$m);
$smartyObj->display('admin/adminmainheader.tpl');
$smartyObj->display('admin/admin_shoptaxview.tpl');
$smartyObj->display('admin/adminmainfooter.tpl');
?>