<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_POST['hide']) AND ($_POST['hide'])=='h'){
	if(isset($_POST['email'])AND ($_POST['email'])!=null){
		if(isset($_POST['password'])AND ($_POST['password'])!=null){
				$email=trim($_POST['email']);
				$password=trim($_POST['password']);
				$obj->login($email,$password);

		}
		else
			echo"<script>alert('password not entered')</script >";
	}
	else
		echo"<script>alert('Email not entered')</script>";

}

$smartyObj->display('login.tpl');
?>