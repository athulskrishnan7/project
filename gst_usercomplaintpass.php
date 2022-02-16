<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$id=$_GET['id'];
$obj->gst_usercomplaintpass($id);

?>