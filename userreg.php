<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_POST['hide']) AND ($_POST['hide'])=='h'){
	if(isset($_POST['name']) AND ($_POST['name'])!=null){
		if(isset($_POST['contact']) AND ($_POST['contact'])!=null){
			if(isset($_POST['email']) AND ($_POST['email'])!=null){
				if(isset($_POST['password']) AND ($_POST['password'])!=null){
					$name=trim($_POST['name']);
					$contact=trim($_POST['contact']);
					$email=trim($_POST['email']);
					$password=trim($_POST['password']);
					$obj->ureg($name,$contact,$email,$password);


				}
				else
					echo "<script>alert('Password not entered')</script>";
			}
			else
			echo "<script>alert('email not entered')</script>";
		}
		else
		echo "<script>alert('contact not entered')</script>";
	}
	else
	echo "<script>alert('name not entered')</script>";

}



$smartyObj->display('register/reg_head.tpl');
$smartyObj->display('register/userreg.tpl');
$smartyObj->display('register/reg_footer.tpl');


?>