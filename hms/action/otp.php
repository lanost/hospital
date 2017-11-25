<?php

if(isset($_POST['b2']))
{
	session_start();

$fnm=$_SESSION['fname'];
$lnm=$_SESSION['lname'];
$gen=$_SESSION['gender'];
$ag=$_SESSION['age'];
$mb=$_SESSION['mob'];
$ad=$_SESSION['addr'];
$pwd=$_SESSION['pword'];
$typ="patient";
	$ootp=$_SESSION['otp'];
	$gotp=$_POST['otp'];
	
if($gotp==$ootp)
{
	
	include '../link.php';
	$ins=mysql_query("insert into register values('','$fnm','$lnm','$gen','$ag','$mb','$ad') ");
	$sel=mysql_query("select slno from register where fname='$fnm' and age='$ag' and mob='$mb'");
		while($row=mysql_fetch_array($sel))
	{
		$x=$row['slno'];
	}

	$insc=mysql_query("insert into user values('','$x','$pwd','$typ') ");
	header("location:success.php");
	
}
	else
	{
		
		header("location:error.php");
		
	}	
		
	
}
?>