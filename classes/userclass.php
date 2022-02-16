<?php
class userclass
{
 //    function shop_registration($shop_name,$shop_register,$shop_address,$shop_pincode,$shop_district,$shop_city,$shop_contact,$shop_email,$shop_password)
 //    {
 // $qry="insert into basic()";
 //    }
	
 #Inserting shop registration details into basic table and login table
   function shopreg($name,$register,$address,$pincode,$district,$city,$contact,$email,$password)
   {
   	  $key2=uniquekey("login","loginkey");
   	  $enc=md5($password);
   		
   		$qry2="Insert into login(loginkey,email,password,user_type) values('".$key2."','".$email."','".$enc."','2')";
$exe1=mysql_query($qry2);
   	  $key=uniquekey("basic","shkey");
   	  $id=keytoid("login","loginkey",$key2);
   	  $qry="Insert into basic(shkey,name,address,pincode,district,city,contact,register,loginid) VALUES('".$key."','".$name."','".$address."','".$pincode."','".$district."','".$city."','".$contact."','".$register."','".$id."')" ;
   	  	$exe=mysql_query($qry);
   	
   	
   		if($exe&&$exe1){
   			echo"<script>alert('Successfully inserted into basic table');
         window.location.href='login.php'</script>";
   		}  
   		else{
   			echo"<script>alert('Unsuccessful');
         window.location.href='shop_reg.php'</script>";
   		}

   	}
   		

#Inserting to gst controller table

 	function gstreg($name,$address,$pincode,$district,$dob,$officeaddress,$city,$contact,$email,$password,$gender){

         $key2=uniquekey("login","loginkey");
   	  	 $enc=md5($password);
   		
   		 $qry2="Insert into login(loginkey,email,password,user_type) values('".$key2."','".$email."','".$enc."','1')";
         $exe1=mysql_query($qry2);



 		$key=uniquekey("gstcontroller","gstkey");
 		 $id=keytoid("login","loginkey",$key2);
 		$qry="insert into gstcontroller(gstkey,name,address,pincode,district,gender,dob,officeaddress,city,contact,loginid)values('".$key."','".$name."','".$address."','".$pincode."','".$district."','".$gender."','".$dob."','".$officeaddress."','".$city."','".$contact."','".$id."')";
 		$exe=mysql_query($qry);
 		if($exe&&$exe1){
 			echo"<script>alert('Successfully Registered');
       window.location.href='login.php'</script>";

 		}
 		else{
 			echo"<script>alert('Not Registered');
       window.location.href='gstreg.php'</script>";
 		}

 	}


#Registering user details
 	function ureg($name,$contact,$email,$password)
 	{
 		$key2=uniquekey("login","loginkey");
 		$enc=md5($password);
 		$qry2="insert into login(loginkey,email,password,user_type)values('".$key2."','".$email."','".$enc."','3')";
 		$exe1=mysql_query($qry2);

 		$key=uniquekey("user","ukey");
 		$id=keytoid("login","loginkey",$key2);
 		$qry="insert into user(ukey,name,contact,loginid)values('".$key."','".$name."','".$contact."','".$id."')";
 		$exe=mysql_query($qry);
 		if($exe&&$exe1){
 			echo"<script>alert('registered Successfully');
      window.location.href='login.php'</script>";


 		}
 		else{
 			echo"<script>alert('not registered');
       window.location.href='userreg.php' </script>";
 			 		}

 	}

#Checking usertype and logging into appropriate page
 	function login($email,$password)
 	{
 		$enc=md5($password);
 		$qry="select loginkey,status,user_type from login where email='".$email."'and password='".$enc."'";
 // echo $qry;exit();
 		$exe=mysql_query($qry);
      $key=NULL;
      $c=0;
      while ($rr=mysql_fetch_array($exe))
      {
         $key=$rr['loginkey'];
         $s=$rr['status'];
         $u=$rr['user_type'];
         $c=$c+1;

      }
      if($c>0){
         // echo "<script>alert('Login Successfully')</script>";
         setcookie("loginkey",$key);
         setcookie("logined",1);
         if ($s==1) {
            if ($u==0) {
               header("location:admin_gstcontrollerview.php");
            }
            elseif($u==1){
               header("location:gst_productcategory.php");
            }
            elseif($u==2){
               header("location:shop_productadd.php");
            }
             elseif($u==3)
            {
               header("location:user_complaint.php");
            }

            # code...
         }

         else
         {
            echo "<script>alert('Waiting for admin approval ..')</script>";
         }
        
      }
 
 			// if($exe){
 			// 	echo "<script>alert('Login Successfully');
 			// 	window.location.href='userreg.php';
 			// 	</script>";
 				
 			// }
 			else{
 				echo"<script>alert('Invalid user')</script>";
             // header("location:login.php");
 			}

 	}





#fetches the gst controller info
   function gstfetch(){
      $qry="select * from gstcontroller inner join login on login.id=gstcontroller.loginid";
      $exe=mysql_query($qry);
      $arr=array();
      while($rr=mysql_fetch_array($exe)){
         $arr[]=$rr;
      }
      return $arr;
   }



#fetches shop registration info
   function shopfetch()
   {
      $qry="select * from basic inner join login on login.id=basic.loginid";
      $exe=mysql_query($qry);
      $arr=array();
      while($rr=mysql_fetch_array($exe))
      {
         $arr[]=$rr;
      }
      return $arr;

   }




#fetches user registration details
function userfetch()
{
   $qry="select * from user inner join login on login.id=user.loginid";
   // echo "$qry";exit();
      $exe=mysql_query($qry);
      $arr=array();
      while($rr=mysql_fetch_array($exe))
      {
         $arr[]=$rr;
      }
      return $arr;


}



# Gst controller approving
function approve1($key){
   $id=keytoid("login","loginkey",$key);
   $query="update login set status='1' where id='".$id."'";
   $exe=mysql_query($query);
   if($exe){
      echo "<script>alert('Gst controller approved');
      window.location.href='admin_gstcontrollerview.php'</script>";
   }
   else
   echo"<script>alert('gst controller not approved');
window.location.href='admin_gstcontrollerview.php'</script>";
}

#gst controller rejecting
function reject1($key){
   $id=keytoid("login","loginkey",$key);
   $query="update login set status='2' where id='".$id."'";
   $exe=mysql_query($query);
   if($exe){
      echo "<script>alert('rejected Successfully');
      window.location.href='admin_gstcontrollerview.php'</script>";
   }
   else
   echo"<script>alert( 'not rejected')</script>";
}




#user approving
function approve2($key){
   $id=keytoid("login","loginkey",$key);
   $qry="update login set status='1' where id='".$id."'";
   $exe=mysql_query($qry);
   if($exe){
      echo "<script>alert('User appoved');
      window.location.href='admin_userview.php'</script>";
   }
   else{
      echo"<script>alert('User not approved');
      window.location.href='admin_userview.php'</sccript>";
   }
}

#user rejecting
function reject2($key){
   $id=keytoid("login","loginkey",$key);
   $query="update login set status='2' where id='".$id."'";
   $exe=mysql_query($query);
   if($exe){
      echo "<script>alert('rejected Successfully');
      window.location.href='admin_userview.php'</script>";
   }
   else
   echo"<script>alert( 'not rejected');
window.location.href='admin_userview.php'</script>";
}




#Shop approve
function approve3($key)
{
   $id=keytoid("login","loginkey",$key);
   $qry="update login set status='1' where id='".$id."'";
   $exe=mysql_query($qry);
   if($exe){
      echo "<script>alert('Shop appoved');
      window.location.href='admin_shopview.php'</script>";
   }
   else{
      echo"<script>alert('shop not approved');
      window.location.href='admin_shopview.php'</sccript>";
   }
}


#shop reject
function reject3($key){
   $id=keytoid("login","loginkey",$key);
   $query="update login set status='2' where id='".$id."'";
   $exe=mysql_query($query);
   if($exe){
      echo "<script>alert(' shop rejected Successfully');
      window.location.href='admin_shopview.php'</script>";
   }
   else
   echo"<script>alert( 'shop not rejected');
window.location.href='admin_shopview.php'</script>";
}




#product sub-category insert
// function categoryinsert($category)
// {
//    $key=uniquekey("login","loginkey");
//       $qry="Insert into productcategory(category,pckey) values('".$key."','".$category."')";
//    $exe=mysql_query($qry);


//    if($exe)
//       echo"<script>alert('product category added Successfully');
//       windows.location.href='productcategory.php'</script>";
//    else
//       echo"<script>alert('product category not added');
//       windows.location.href='productcategory.php'</script>";

//       $qry2="Select * from productsubcategory";
//       $exe2=mysql_query($qry2);
//     $arr[]=array();
//     while($rr=mysql_fetch_array($exe2)){
//      $arr[]=$rr;
//     }
//     return $arr;


// }



#gst admin product category insert into  productcategory table
function categoryinsert($category)
{
   $key=uniquekey("login","loginkey");
      $qry="Insert into productcategory(category,catkey) values('".$category."','".$key."')";
   $exe=mysql_query($qry);


   if($exe)
      echo"<script>alert('product category added Successfully');
      window.location.href='gst_productcategory.php'</script>";
   else
      echo"<script>alert('product category not added');
      window.location.href='gst_productcategory.php'</script>";
}
     
#gst admin product category view
function categoryview()
{
$qry2="Select * from productcategory";
// echo "$qry2";exit();
      $exe2=mysql_query($qry2);
    $arr[]=array();
    while($rr=mysql_fetch_array($exe2)){
     $arr[]=$rr;
    }
    return $arr;
}


#gst admin product sub category insert

function sub_categoryinsert($category,$sub){
   $key=uniquekey("subcategory","subkey");
   $qry="Insert into subcategory(subkey,categoryid,subcategory) values('".$key."','".$category."','".$sub."')";
   $exe=mysql_query($qry);
   if($exe)
      echo"<script>alert('product category added Successfully');
      window.location.href='gst_productsubcategory.php'</script>";
   else
      echo"<script>alert('product category not added');
      window.location.href='gst_productsubcategory.php'</script>";


}

#gst admin product sub category view
function sub_categoryview()
{
   $qry="Select * from subcategory ";
   // echo"$qry";exit();
   $exe=mysql_query($qry);
   
   $arr[]=array();
    while($rr=mysql_fetch_array($exe))
    {
     $arr[]=$rr;
    }
    return $arr;
   
}




#Deleting product category from gst-admin page

function gst_catdel($key)
{
 $id=keytoid("productcategory","catkey",$key);
 $q="delete from productcategory where id='".$id."'" ;
 $exe=mysql_query($q);
   if($exe){
      echo"<script>alert('Category Successfully deleted');
      window.location.href='gst_productcategory.php'</script>";
   }
   else{
      echo"<script>alert('Category not deleted');
        window.location.href='gst_productcategory.php'</script>";  
   }

}
      
#Deleting product sub-category from gst-admin page
function gst_subdel($key)
{
 $id=keytoid("productsubcategory","catkey",$key);
 $q="delete from subcategory where id='".$id."'" ;
 $exe=mysql_query($q);
   if($exe){
      echo"<script>alert('Category Successfully deleted');
      window.location.href='gst_productsubcategory.php'</script>";
   }
   else{
      echo"<script>alert('Category not deleted');
        window.location.href='gst_productsubcategory.php'</script>";  
   }

}
  


#User Complaint Entering to complaint table
function usercomplaint($subject,$bill_no,$complaint,$key)
{
   $id=keytoid("login","loginkey",$key);
   $date=date('Y-m-d');
   $key1=uniquekey("usercomplaint","complaintkey");
   $q="Insert into usercomplaint(complaintkey,subject,billno,complaint,loginid,currentdate) values('".$key."','".$subject."','".$bill_no."','".$complaint."','".$id."','".$date."')";
   // echo"$q";exit();
   $exe=mysql_query($q);

   if($q){
      echo "<script>alert('Complaint Registered Successfully');
      window.location.href='user_complaint.php'</script>";
   }
   else{
      echo "<script>alert('Complaint Not Registered');
      window.location.href='user_complaint.php'</script>";
   }
}

#displaying user complaint in gst-admin page
function gst_usercomplaint(){
   $q="Select * from usercomplaint ";
    // echo"$q";exit();
   $exe=mysql_query($q);

   $arr=array();
      while($rr=mysql_fetch_array($exe)){
         $arr[]=$rr;
      }
      return $arr;

}


#displaying admin complaint in admin page
function admin_usercomplaint(){
   $q="Select * from usercomplaint where status='1' ";
    // echo"$q";exit();
   $exe=mysql_query($q);

   $arr=array();
      while($rr=mysql_fetch_array($exe)){
         $arr[]=$rr;
      }
      return $arr;

}




#shop product inserting to shopcategory table
function shopproductadd($name,$category,$subcategory,$quantity,$amount,$detail,$key)
{
  $id=keytoid("login","loginkey",$key);
   $key1=uniquekey("shop_category","prokey");
   $q="Insert into shop_category(prokey,category,subcategory,name,quantity,amount,details,loginid) values('".$key1."','".$category."','".$subcategory."','".$name."','".$quantity."','".$amount."','".$detail."','".$id."')";
   // echo"$q";exit();
   $exe=mysql_query($q);
   if($exe){
      echo"<script>alert('product successfully added');
      window.location.href='shop_productadd.php'</script>";
   }
   else{
      echo"<script>alert('Product not added');
        window.location.href='shop_productadd.php'</script>";  
   }


}


#inner joining of product category and subcategory to show product sub category according to selected product category 
function shop_categoryview()
{
    $qry="Select * from productcategory INNER JOIN subcategory where productcategory.id=subcategory.categoryid ";
 // echo"$qry";exit();
   $exe=mysql_query($qry);
   
   $arr[]=array();
    while($rr=mysql_fetch_array($exe))
    {
     $arr[]=$rr;
    }
    return $arr;
}



#tax report upload from the shop page
function shop_taxupload($tax,$key){
  $id=keytoid("login","loginkey",$key);
   $key1=uniquekey("tax","tkey");
   $date=date('Y-m-d');
   $year=date('Y');
   $q="Insert into tax(tkey,taxreport,currentdate,currentyear,loginid) values('".$key1."','".$tax."','".$date."','".$year."','".$id."')";
   // echo "$q";exit();
   $exe=mysql_query($q);
   if($exe){  
      echo"<script>alert('Tax report successfully uploaded');
      window.location.href='shop_productadd.php'</script>";
   }
   else{
      echo"<script>alert(Tax report not uploaded');
        window.location.href='shop_productadd.php'</script>";  
   }
}


#shop tax report view from the admin and gst admin page
function admin_shoptaxview()
{
  $qry2="Select * from tax";
// echo "$qry2";exit();
      $exe2=mysql_query($qry2);
    $arr[]=array();
    while($rr=mysql_fetch_array($exe2)){
     $arr[]=$rr;
    }
    return $arr;
}



function user_complaintview($key){
 $id=keytoid("login","loginkey",$key);
  $qry2="Select  subject,billno,complaint,loginid,complaintkey from usercomplaint where loginid='".$id."'";
   // $qry2="Select * from usercomplaint where id='".$id."'";

// echo "$qry2";exit();
      $exe2=mysql_query($qry2);
    $arr[]=array();
    while($rr=mysql_fetch_array($exe2)){
     $arr[]=$rr;
    }
    return $arr;

}

function user_complaintdel($key)
{
 $id=keytoid("usercomplaint","complaintkey",$key);
 $q="delete from usercomplaint where id='".$id."'" ;
 $exe=mysql_query($q);
   if($exe){
      echo"<script>alert('Complaint Successfully deleted');
      window.location.href='user_viewcomplaint.php'</script>";
   }
   else{
      echo"<script>alert('Complaint not deleted');
        window.location.href='user_viewcomplaint.php'</script>";  
   }

}

      function user_update($key,$name,$contact,$email){

        $id=keytoid("login", "loginkey",$key);
          $q="Update user set name='".$name."', contact='".$contact."' where loginid='".$id."' ";
          $q2="Update login set email='".$email."' where id='".$id."'" ;
       // echo$q;exit();   
        $exe=mysql_query($q);
        $exe2=mysql_query($q2);
          if($exe&&$exe2){
              echo "<script>alert('Updated');
               window.location.href='user_update.php'</script>";
          }
          else
          {
              echo"<script>alert('not updated');
               window.location.href='user_update.php'</script>";
          }

      }

    function usercatch($key){
        $id=keytoid("login","loginkey",$key);
        $q="select * from user inner join login on login.id=user.loginid where loginid='".$id."'";
    // echo$q;exit();
        $exe=mysql_query($q);
        $arr=array();
        while($rr=mysql_fetch_array($exe))
        {
            $arr[]=$rr;
        }
        return $arr;
    }



function gst_usercomplaintpass($id)
{
  $q="Update usercomplaint set status='1' where id='".$id."'";
  $exe=mysql_query($q);
   if($exe){
      echo"<script>alert('Complaint Successfully passed to admin');
      window.location.href='gst_usercomplaint.php'</script>";
   }
   else{
      echo"<script>alert('Complaint not sent to admin');
        window.location.href='gst_usercomplaint.php'</script>";  
   }

}



function shop_productview($key)
{
  $id=keytoid("login","loginkey",$key);
  $q="Select * from shop_category where loginid='".$id."'";
  // echo $q;exit();
  $exe=mysql_query($q);
   $arr=array();
   while($rr=mysql_fetch_array($exe))
        {
            $arr[]=$rr;
        }
        return $arr;
}

// 

function shop_productcatch($key)
{
 $id=keytoid("shop_category","prokey",$key);
        $q="select * from shop_category where id='".$id."'";
    // echo$q;exit();
        $exe=mysql_query($q);
        $arr=array();
        while($rr=mysql_fetch_array($exe))
        {
            $arr[]=$rr;
        }
        return $arr;
}




function shop_productupdate($name,$category,$subcategory,$quantity,$amount,$details,$key)
{
  $id=keytoid("shop_category","prokey",$key);
  $q="Update shop_category set name='".$name."', category='".$category."',subcategory='".$subcategory."',quantity='".$quantity."',amount='".$amount."',details='".$details."' where id='".$id."'";
  //echo "$q";exit();
  $exe=mysql_query($q);
   if($exe){
      echo"<script>alert('Product Successfully Updated');
      window.location.href='shop_productview.php?key=$key'</script>";
   }
   else{
      echo"<script>alert('Product not updated');
        window.location.href='shop_productupdate.php'</script>";  
   }

}
function shopproduct_del($key)
{
 $id=keytoid("shop_category","prokey",$key);
 $q="delete from shop_category where id='".$id."'" ;
 $exe=mysql_query($q);
   if($exe){
      echo"<script>alert('Product Successfully deleted');
      window.location.href='shop_productview.php?key={$key}'</script>";
   }
   else{
      echo"<script>alert('product not deleted');
        window.location.href='shop_productview.php?key={$key}'</script>";  
   }

}


function praveenshop_catch($key){
        $id=keytoid("login","loginkey",$key);
        $q="select * from basic inner join login on login.id=basic.loginid where loginid='".$id."'";
    // echo$q;exit();
        $exe=mysql_query($q);
        $arr=array();
        while($rr=mysql_fetch_array($exe))
        {
            $arr[]=$rr;
        }
        return $arr;
    }
     function shopupdate($key,$name,$register,$address,$pincode,$district,$city,$contact,$email){

        $id=keytoid("login", "loginkey",$key);
          $q="Update basic set name='".$name."', register='".$register."',address='".$address."',pincode='".$pincode."',district='".$district."',city='".$city."',contact='".$contact."' where loginid='".$id."' ";
          $q2="Update login set email='".$email."' where id='".$id."'" ;
       // echo$q;exit();   
        $exe=mysql_query($q);
        $exe2=mysql_query($q2);
          if($exe&&$exe2){
              echo "<script>alert('Details Updated');
               window.location.href='shop_taxrecord.php'</script>";
          }
          else
          {
              echo"<script>alert('details not updated');
               window.location.href='shop_taxrecord.php'</script>";
          }

      }
       function praveengst_catch($key){
        $id=keytoid("login","loginkey",$key);
        $q="select * from gstcontroller inner join login on login.id=gstcontroller.loginid where loginid='".$id."'";
//echo$q;exit();
        $exe=mysql_query($q);
        $arr=array();
        while($rr=mysql_fetch_array($exe))
        {
            $arr[]=$rr;
        }
        return $arr;
    }
     function gstupdate($key,$name,$address,$pincode,$district,$dob,$officeaddress,$city,$contact,$email,$gender){

        $id=keytoid("login", "loginkey",$key);
          $q="Update gstcontroller set name='".$name."', address='".$address."',pincode='".$pincode."',district='".$district."',dob='".$dob."',officeaddress='".$officeaddress."',city='".$city."',contact='".$contact."',gender='".$gender."' where loginid='".$id."' ";
          $q2="Update login set email='".$email."' where id='".$id."'" ;
        // echo$q;exit();   
        $exe=mysql_query($q);
        $exe2=mysql_query($q2);
          if($exe&&$exe2){
              echo "<script>alert('Details Updated');
               window.location.href='gst_update.php'</script>";
          }
          else
          {
              echo"<script>alert('details not updated');
               window.location.href='gst_update.php'</script>";
          }

      }




#function to add shop product purchase details
      function shop_productpurchase($name,$category,$subcategory,$quantity,$amount,$key)
      {
        $id=keytoid("login","loginkey",$key);
   $key1=uniquekey("shop_purchase","purchase_key");
   $bill=rand(9999,99999);
   $q="Insert into shop_purchase(purchase_key,billno,category,subcategory,name,quantity,amount,loginid) values('".$key1."','".$bill."' ,'".$category."','".$subcategory."','".$name."','".$quantity."','".$amount."','".$id."')";
   // echo"$q";exit();
   $exe=mysql_query($q);
   if($exe){
      echo"<script>alert('product purchase successfully added');
      window.location.href='shop_purchase.php'</script>";
   }
   else{
      echo"<script>alert('Product purchase not added');
        window.location.href='shop_purchase.php'</script>";  
   }



      }



}
?>