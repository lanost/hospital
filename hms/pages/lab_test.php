<?php
$xy=NULL;
 include '../link.php';
session_start();
error_reporting(0);
$id=$_SESSION['usrname'];
$date=date('Y-m-d');


?>
<!DOCTYPE html>
<!-- Template by freewebsitetemplates.com -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>hCare - Health Care Services</title>
		<link rel="stylesheet" href="../css/style.css" type="text/css" />
		<link rel="stylesheet" href="../css/table.css" type="text/css" />
	</head>
	<body>
		<div id="page">
			<div id="header">
				<ul id="navigation">
					
					<br><br><br>
					<li><img src="../images/logo.png" alt="logo"/></li>
					
					
				</ul>
			</div>
			<div class="content">
				<div class="navigation">
					<ul>
					<li class="selected" id="link1"><a href="pres.php">Prescription</a></li>
					<li id="link2"><a href="lab_test.php">Lab Test</a></li>
					
					</ul>
					<ul id="buttons">
						<li><a href="../contact.html">Contact Us</a></li>
						<li><a href="../logout.php">Logout</a></li>
					</ul>
				</div>
				<div>
						<br><br>
						<h2>New Prescription</h2>
						
						<form method="post">
						<label>OP NUMBER:</label>
						<input type="text" name="opno">
						<br><br>
						<h2>TESTS:</h2>
						
                        <label>GLUCOSE:</label>						
						<input type="checkbox" name="glucose" value="glucose" >
						<br><br>
						<label>CHOLESTROL:</label>						
						<input type="checkbox" name="cholesterol" value="cholesterol" >
						<br><br>
						<label>TRIGLYCRIDES:</label>						
						<input type="checkbox" name="triglycrides" value="triglycrides" >
						<br><br>
						<label>HEMOGLOBIN A1C:</label>						
						<input type="checkbox" name="hemoglobin" value="hemoglobin" >
						<br><br>
						
						<label>TSH:</label>						
						<input type="checkbox" name="tsh" value="tsh" >
						<br><br>
						<input type="submit" value="submit" name="bc2">
						</form>
						
						<br>
						<br>
						
						<?php
						
	if(isset($_POST['bc2']))
	{
		$req="requested";
	$opn=$_POST['opno'];
	$_SESSION['opno']=$opn;
	if(isset($_POST['glucose']))
	{$glu="Glucose";
	}
	if(isset($_POST['cholesterol']))
	{$cho="Cholestrol";
	}
	if(isset($_POST['triglycrides']))
	{$tri="Triglycerides";
	}
	if(isset($_POST['hemoglobin']))
	{$hem="Hemoglobin";
	}
	if(isset($_POST['tsh']))
	{$tsh="TSH";
	}
$select=mysql_query("insert into lab values('','$opn','$glu,$cho,$tri,$hem,$tsh','$req','','$id')");
if($select)
{
header("location:doctor.php");
}
else
	header("location:doctor.php?value=0");


	}	
    ?>		
						
				</div>
			</div>
			<div id="footer">
				
				<p id="footnote">&#169; Copyright &#169; 2011. Company name all rights reserved</p>
			</div>
		</div>
	</body>
</html>

