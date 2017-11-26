<?php
$xy=NULL;
 include '../link.php';
session_start();
error_reporting(0);

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
					<li class="selected" id="link1"><a href="lab.php">home</a></li>
					<li id="link2"><a href=""></a></li>
					<li id="link3"><a href=""></a></li>
					</ul>
					<ul id="buttons">
						<li><a href="../contact.html">Contact Us</a></li>
						<li><a href="../logout.php">Logout</a></li>
					</ul>
				</div>
				<div>
				     
					    <br><br>
						<table>
						<form method="post" action="../action/upload_file.php" enctype="multipart/form-data">
						<tr><td><label>Opno : </label> <input type="text" name="opno" class="txtfield" /></td></tr>
						
						<br>
						 <tr><td><input type="file" name="image" id="filetoupload"></td></tr>
						<br><br>
						<tr> <td><input type="submit" value="upload" name="bc1"></td></tr>
						</form>
						</table> 
						 
						
						
				</div>
			</div>
			<div id="footer">
				
				<p id="footnote">&#169; Copyright &#169; 2011. Company name all rights reserved</p>
			</div>
		</div>
	</body>
</html>

