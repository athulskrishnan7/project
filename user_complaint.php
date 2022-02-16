<?php
include_once'settings/settings.php';
include_once'classes/userclass.php';
$obj=new userclass();
$key=$_COOKIE['loginkey'];
if(isset($_POST['hide']) AND ($_POST['hide'])=='h'){
	if(isset($_POST['subject']) AND ($_POST['subject'])!=null){
		if(isset($_POST['bill_no']) AND ($_POST['bill_no'])!=null){
			if(isset($_POST['complaint']) AND ($_POST['complaint'])!=null){
				$subject=$_POST['subject'];
				$bill_no=$_POST['bill_no'];
				$complaint=$_POST['complaint'];
				$obj->usercomplaint($subject,$bill_no,$complaint,$key);
			}
			else
				echo "<script>alert('Complaint not entered')</script>";
		}
		else
			echo "<script>alert('Bill no not entered')</script>";
	}
	else
		echo "<script>alert('Subject not entered')</script>";

}

$smartyObj->display('user/userheader.tpl');
$smartyObj->display('user/usercomplaint.tpl');
$smartyObj->display('user/userfooter.tpl');
?>