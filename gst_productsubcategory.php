<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

$m=$obj->categoryview();
 $smartyObj->assign('view',$m);

$n=$obj->shop_categoryview();
$smartyObj->assign('data',$n);


if(isset($_POST['hide'])&& ($_POST['hide'])=='h'){
if(isset($_POST['category'])AND $_POST['category']!=null){
    if(isset($_POST['sub'])AND $_POST['sub']!=null){
		$category=$_POST['category'];
		$sub=$_POST['sub'];
		$obj->sub_categoryinsert($category,$sub);
    }
    else
    echo "<script>alert('Product sub category not selected')</script>";

	
}
else
echo "<script>alert('Product category not selected')</script>";
}
	

$smartyObj->display('gst/adminheader.tpl');
$smartyObj->display('gst/productsubcategory.tpl');
$smartyObj->display('gst/adminfooter.tpl');
// $smartyObj->display('subadminheader1.tpl');

// $smartyObj->display('productsubcategory.tpl');
// $smartyObj->display('adminmainfooter.tpl');

?>

