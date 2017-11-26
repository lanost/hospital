<?php
$xy=NULL;
 include '../link.php';
session_start();
error_reporting(0);
$id=$_SESSION['usrname'];



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
					<li class="selected" id="link1"><a href="">check requests</a></li>
					<li id="link2"><a href="upload.php">upload result</a></li>
					<li id="link3"><a href=""></a></li>
					</ul>
					<ul id="buttons">
						<li><a href="../contact.html">Contact Us</a></li>
						<li><a href="../logout.php">Logout</a></li>
					</ul>
				</div>
				<div>
						<br><br>
						<h2>Laboratory</h2>
						<form method="post">
						<input type="text" name="opno" />
						<br><br>
						<input type="submit" value="check" name="bd1">
						</form>
						<hr>
						<?php
						if(isset($_POST['bd1']))
							{
								
								$opno=$_POST['opno'];
								
							
						 $sel=mysql_query("select * from lab where opno='$opno' and status='requested'");
						 $select=mysql_query("select fname from register where slno='$opno'");
						  $sele=mysql_query("select lname from register where slno='$opno'");
						 $fetch=mysql_fetch_row($select);
						 $fetc=mysql_fetch_row($sele);
						 //echo $fetch;
						 
						 while($rel=mysql_fetch_row($sel))
						 {   
							 if($rel[3]=="requested")
							 {
							      
							     echo "NAME : ".$fetch[0]; echo "&nbsp"; echo $fetc[0] ; 
								 echo "<br>";
							     echo "OP No : ".$rel[1]; 
								 echo "<br>";
								 echo "TESTS : ".$rel[2];
								 echo "<br>";
						     
						 
							 }
							 if($rel[3]=="uploaded")
							 {
								 echo "Results already uploaded";
							 }
						 
						 }
								
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

