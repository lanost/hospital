<?php

session_start();

$_SESSION['fname']=$_POST['fname'];
$_SESSION['lname']=$_POST['lname'];
$_SESSION['gender']=$_POST['gender'];
$_SESSION['age']=$_POST['age'];
$_SESSION['mob']=$_POST['mob'];
$_SESSION['addr']=$_POST['addr'];



if(isset($_POST['b1']))
{
	
$a="12345";
$fnm=$_SESSION['fname'];
$lnm=$_SESSION['lname'];
$gen=$_SESSION['gender'];
$ag=$_SESSION['age'];
$mb=$_SESSION['mob'];
$ad=$_SESSION['addr'];
$pwd="123";
$typ="patient";

	

	
	include '../link.php';
	$ins=mysql_query("insert into register values('','$fnm','$lnm','$gen','$ag','$mb','$ad') ");
	$sel=mysql_query("select slno from register where fname='$fnm' and age='$ag' and mob='$mb'");
		while($row=mysql_fetch_array($sel))
	{
		$x=$row['slno'];
	}

	$insc=mysql_query("insert into user values('','$x','$pwd','$typ') ");
	//$sel=mysql_query("create table '$x' as select slno,date,treatment,prescription,doctor from $a");
	//$sel=mysql_query("CREATE TABLE IF NOT EXISTS `$x` (slno int(11) NOT NULL AUTO_INCREMENT,date date NOT NULL,treatment text NOT NULL,prescription varchar(300) NOT NULL,doctor varchar(30) NOT NULL,PRIMARY KEY (slno)) ");
	
	if($insc)
	{
	header("location:reception.php");
	}
	else
		header("location:reception.php?value=0");
	


	

}
?>