<?php

 include '../link.php';
session_start();
error_reporting(0);

$opno=$_POST['opno'];
$date=$_POST['date'];
$name=$_POST['name'];
$doc=$_POST['doctor'];
$age=$_POST['age'];
$disease=$_POST['disease'];
$pres=$_POST['prescription'];

$sel=mysql_query("insert into pharmacy values('','$opno','$name','$pres','')");
if($sel)
{
header("location:doctor.php");
}
else
	header("location:doctor.php?value=0");

?>