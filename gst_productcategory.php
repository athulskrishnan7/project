<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
if(isset($_POST['hide'])&& ($_POST['hide'])=='h'){
if(isset($_POST['category'])){
		$category=$_POST['category'];
		$obj->categoryinsert($category);
	
}
else
echo "<script>alert('Product category not selected')</script>";
}
	$m=$obj->categoryview();
        $smartyObj->assign('view',$m);

$smartyObj->display('gst/adminheader.tpl');
$smartyObj->display('gst/productcategory.tpl');
$smartyObj->display('gst/adminfooter.tpl');
// $smartyObj->display('subadminheader1.tpl');

// $smartyObj->display('productsubcategory.tpl');
// $smartyObj->display('adminmainfooter.tpl');

?>

