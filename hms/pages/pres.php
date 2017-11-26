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
					<li id="link3"><a href=""></a></li>
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
						<input type="submit" value="submit" name="bc2">
						</form>
						
						<hr>
						<br>
						
						<?php
						
	if(isset($_POST['bc2']))
	{
	$opn=$_POST['opno'];
	$_SESSION['opno']=$opn;
	
	
	$sel=mysql_query("select * from register where slno='$opn'");
		while($row=mysql_fetch_array($sel))
	{
		$xy=$row['fname'];
		$xyz=$row['lname'];
		
		$ag=$row['age'];
		$sx=$row['gender'];
		
	} 
	}	
    ?>
						
			<form method="post" action="pres_write.php">
			<label>DATE:</label>
			<input type="date" name="date" value="<?php echo htmlspecialchars($date); ?>" >
			<br><br>
			<label>DOCTOR:</label>
			<input type="text" name="doctor" value="<?php echo htmlspecialchars($id); ?>" >
			<br><br>
			<label>NAME:</label>
			<input type="text" name="name" value="<?php echo htmlspecialchars($xy); echo " "; echo htmlspecialchars($xyz);  ?>" >
			<br><br>
			<label>AGE:</label>
			<input type="text" name="age" value="<?php echo htmlspecialchars($ag); ?>" >
			<br><br>
			<label>DISEASE:</label>
			<input type="text" name="disease" />
			<br><br>
			<label>PRESCRIPTION: </label>
			<input type="textarea" name="Prescription" />
			<br><br>
			<input type="hidden" name="opno" value="<?php echo htmlspecialchars($opn); ?>"/>
			
			<input type="submit" value="submit" name="bc3">
			</form>		
						
           
						
					
						
				</div>
			</div>
			<div id="footer">
				
				<p id="footnote">&#169; Copyright &#169; 2011. Company name all rights reserved</p>
			</div>
		</div>
	</body>
</html>

