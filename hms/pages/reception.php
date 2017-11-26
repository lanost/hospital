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
		<title>hCare</title>
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
					<li class="selected" id="link1"><a href="reception.php">Registration</a></li>
					<li id="link2"><a href="../book.html">Appointments</a></li>
					<li id="link3"><a href="card.php">Card Issue</a></li>
					</ul>
					<ul id="buttons">
						<li><a href="../contact.html">Contact Us</a></li>
						
					</ul>
				</div>
				<div>
                    <h2>REGISTER HERE</h2>
					
					<p><b>Fill Up Form</b></p>
					
					<form action="reg.php" method="post">
						<table cellspacing="10">
							<tbody>
								<tr><td><label>Name</label></td><td><input type="text" name="fname" class="txtfield" /></td></tr>
								<tr><td><label>SurName</label></td><td><input type="text" name="lname" class="txtfield" /></td></tr>
								<tr><td><label>Gender</label></td><td>
								<select name="gender" class="txtfield" required>
								<option value="male">male</option>
								<option value="female">female</option>
								<option value="others">others</option>
								</select>
								</td></tr>
								
								<tr><td><label>Mobile no <font color=red>*</font></label></td><td><input type="text" name="mob" class="txtfield" required></td></tr>
								<tr><td><label>Age</label></td><td><input type="number" name="age" class="txtfield" /></td></tr>
								<tr><td><label>Blood Group</label></td><td>
								<select name="bldgrp" class="txtfield" required>
								<option value="O+ve">O+ve</option>
								<option value="O-ve">O-ve</option>
								<option value="A+ve">A+ve</option>
								<option value="A-ve">A-ve</option>
								<option value="B+ve">B+ve</option>
								<option value="B-ve">B-ve</option>
								<option value="AB+ve">AB+ve</option>
								<option value="AB-ve">AB-ve</option>
								</select>
								</td></tr>
								
								<tr><td class="concern"><label>Address</label></td><td><textarea name="addr"></textarea></td></tr>
								
								
								</tbody>
								</table>
								<tr><td colspan="2" align="right"><input type="submit" name="b1" value="Submit" class="button" /></td></tr>
							
						
					</form>
						
						
				</div>
			</div>
			<div id="footer">
				
				<p id="footnote">&#169; Copyright &#169; 2011. Company name all rights reserved</p>
			</div>
		</div>
	</body>
</html>

