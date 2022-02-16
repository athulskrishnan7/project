<?php
include_once('classes/userclass.php');
include_once('settings/settings.php');
$obj=new userclass();
$m=$obj->admin_shoptaxview();
$smartyObj->assign('view',$m);
$smartyObj->display('gst/adminheader.tpl');
$smartyObj->display('gst/gst_shoptaxview.tpl');
$smartyObj->display('gst/adminfooter.tpl');
?>