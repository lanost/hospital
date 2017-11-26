<?php
 include '../link.php';
session_start();
$st="uploaded";
$sep="_";
$opn=$_POST['opno'];
$opno=$opn."lab_result";
 if(isset($_POST['bc1']))
	{
echo "button";

   if(isset($_FILES['image'])){
	   echo "working";
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
	  $new_name="$opn.$file_ext";
      
      $expensions= array("pdf","doc",);
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
                  move_uploaded_file($file_tmp,"lab_reports/".$new_name);
				  
				  $query2=mysql_query("update lab set status='$st',report='$new_name' where opno='$opn'");
         echo "Success";
		  header("location:../pages/lab.php");
      }else{
         print_r($errors);
      }
   }
 
 
   }
   
   ?>