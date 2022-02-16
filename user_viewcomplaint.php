<?php
	
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['loginkey'];
$m=$obj->user_complaintview($key);
 $smartyObj->assign('view',$m);

$smartyObj->display('user/userheader.tpl');
$smartyObj->display('user/user_complaintview.tpl');
$smartyObj->display('user/userfooter.tpl');

?>


?>