<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj=new userclass();
// session_start();
$key=$_COOKIE['loginkey'];
// $key=$_GET['key'];
$m=$obj->usercatch($key);
$smartyObj->assign('data',$m);



if(isset($_POST['hide'])AND ($_POST['hide'])!=null){
	if(isset($_POST['name'])AND($_POST['name'])!=null){
			if(isset($_POST['contact'])AND($_POST['contact'])!=null){
				if(isset($_POST['email'])AND ($_POST['email'])!=null){
					$name=$_POST['name'];				
					$contact=$_POST['contact'];
					$email=$_POST['email'];
					$obj->user_update($key,$name,$contact,$email);
					
				

				}
				else
					echo"<script>alert('Email not entered')</script>";
			}
			else
					echo"<script>alert('Contact not entered')</script>";

	}
	else
		echo"<script>alert('Name not entered')</script>";
}



$smartyObj->display('user/userheader.tpl');
$smartyObj->display('user/user_update.tpl');
$smartyObj->display('user/userfooter.tpl');

?>