<?php
include_once('classes/userclass.php');
include_once('settings/settings.php');
$obj= new userclass();
if(isset($_POST['hide']) AND ($_POST['hide'])=='h'){
	if(isset($_POST['fullname']) AND ($_POST['fullname'])!=null){
		if(isset($_POST['address']) AND ($_POST['address'])!=null){
			if(isset($_POST['pincode']) AND ($_POST['pincode'])!=null){
				if(isset($_POST['district']) AND ($_POST['district'])!=null){
					if(isset($_POST['dob']) AND ($_POST['dob'])!=null){
						if(isset($_POST['officeaddress']) AND ($_POST['officeaddress'])!=null){
							if(isset($_POST['city']) AND ($_POST['city'])!=null){
								if(isset($_POST['contact']) AND ($_POST['contact'])!=null){
									if(isset($_POST['email']) AND ($_POST['email'])!=null){
										if(isset($_POST['password']) AND ($_POST['password'])!=null){
											if(isset($_POST['gender']) AND ($_POST['gender'])!=null){
											$name=trim($_POST['fullname']);
											$address=trim($_POST['address']);
											$pincode=trim($_POST['pincode']);
											$district=trim($_POST['district']);
											$dob=trim($_POST['dob']);
											$officeaddress=trim($_POST['officeaddress']);
											$city=trim($_POST['city']);
											$contact=trim($_POST['contact']);
											$email=trim($_POST['email']);
											$password=trim($_POST['password']);
											$gender=trim($_POST['gender']);
										 $obj->gstreg($name,$address,$pincode,$district,$dob,$officeaddress,$city,$contact,$email,$password,$gender);
										}
										else
											echo"<script>alert('Gender not entered')</script>";


								  }
								  else
								  	echo"<script>alert('Password not entered')</script>";
								}
								 else
								  	echo"<script>alert('email not entered')</script>";

							}
							 else
								  	echo"<script>alert('Contact not entered')</script>";
						}
						 else
								  	echo"<script>alert('city not entered')</script>";
					}
					 else
								  	echo"<script>alert('office address not entered')</script>";
				}
				 else
								  	echo"<script>alert('Date of Birth not entered')</script>";

			}
				 else
								  	echo"<script>alert('District not entered')</script>";
		}
		 else
								  	echo"<script>alert('Pincode not entered')</script>";


	}
	 else
								  	echo"<script>alert('Address not entered')</script>";
}
 else
								  	echo"<script>alert('Name not entered')</script>";
}



$smartyObj->display('register/reg_head.tpl');
$smartyObj->display('register/gstreg.tpl');
$smartyObj->display('register/reg_footer.tpl');

?>