<?php
include_once'classes/userclass.php';
include_once'settings/settings.php';
$obj=new userclass();

$smartyObj->display('gst/adminheader.tpl');
$smartyObj->display('gst/adminfooter.tpl');
?>