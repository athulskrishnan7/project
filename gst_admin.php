<?php
include_once'settings/settings.php';
include_once'classes/userclass.php';
$obj=new userclass();


// $smartyObj->display('subadmin.tpl');
$smartyObj->display('gst/adminheader.tpl');

$smartyObj->display('gst/adminfooter.tpl');

?>