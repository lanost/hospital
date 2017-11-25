<?php


if(isset($_POST['b3']))
{
	
$rgn=$_POST['regno'];
$dt=$_POST['date'];
$dpt=$_POST['dept'];
$dc=$_POST['doc'];

session_start();

$_SESSION['date']=$dt;

	include '../link.php';
	$sel=mysql_query("select * from register where slno='$rgn'");
		while($row=mysql_fetch_array($sel))
			{
				$a=$row['fname'];
				$b=$row['lname'];
				$c=$row['gender'];
				$d=$row['age'];
				$e=$row['mob'];
				$f=$row['address'];
		
			}

$ins=mysql_query("insert into appoinment values('','$rgn','$a','$b','$d','$e','$dc','$dpt','$dt') ");
	
	header("location:cal.php");
}
?>