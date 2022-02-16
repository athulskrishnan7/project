<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();


$key=$_COOKIE['loginkey'];

if(isset($_POST['hide']) and ($_POST['hide'])=='h'){
	if(isset($_POST['tax']) ){
			
			// $fn=$_FILES['tax']['name'];
			// $tmp=$_FILES['tax']['tmp_name'];
			//  $tax="project/tax/".$fn;
			// move_uploaded_file($tmp,$tax);
			// $obj->shop_taxupload($fn);

			$tax1=$_POST['tax'];
			 $obj->shop_taxupload($tax1,$key);

}
else
	echo "<script>alert('Tax report not selected')</script>";
}





$smartyObj->display('shop/shop_header.tpl');
$smartyObj->display('shop/taxrecord.tpl');
$smartyObj->display('shop/shop_footer.tpl');
?>