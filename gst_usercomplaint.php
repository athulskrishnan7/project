<?php
include_once'settings/settings.php';
include_once'classes/userclass.php';
$obj=new userclass();

$m=$obj->gst_usercomplaint();
$smartyObj->assign('view',$m);

$smartyObj->display('gst/adminheader.tpl');
$smartyObj->display('gst/usercomplaint.tpl');
$smartyObj->display('gst/adminfooter.tpl');

?>