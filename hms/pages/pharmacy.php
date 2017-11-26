<?php
$xy=NULL;
 include '../link.php';
session_start();
error_reporting(0);
$id=$_SESSION['usrname'];

$sel=mysql_query("select * from register where slno='$id'");
		while($row=mysql_fetch_array($sel))
	{
		$xy=$row['fname'];
		
	}

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
						<li class="selected" id="link1"><a href="patient.php">home</a></li>
						<li id="link2"><a href=""></a></li>
						<li id="link3"><a href=""></a></li>
					</ul>
					<ul id="buttons">
						<li><a href="../contact.html">Contact Us</a></li>
						<li><a href="../logout.php">Logout</a></li>
					</ul>
				</div>
				<div style="padding-top:30px;">
						<br /><br />
						<h2>Pharmacy</h2>
						<br /><br />
						<form method="post">
						<input type="text" name="opno" placeholder="Enter the OP number" />
						<br><br>
						<input type="submit" value="submit" name="bb1">

						</form>
						
				
					
						
						<?php
					if(isset($_POST['bb1']))
						{
		
							$opno=$_POST['opno'];
							$_SESSION['opno']=$opno;
		
						$i=1;
						 $sel=mysql_query("select * from pharmacy where opno='$opno' ");
						 $select=mysql_query("select fname from register where slno='$opno'");
						  $sele=mysql_query("select lname from register where slno='$opno'");
						 $fetch=mysql_fetch_row($select);
						 $fetc=mysql_fetch_row($sele);
						 //echo $fetch;
						 
						 while($rel=mysql_fetch_row($sel))
						 {   
							 
							      
							     echo "NAME : ".$fetch[0]; echo "&nbsp"; echo $fetc[0] ; 
								 echo "<br>";
							     echo "OP NO : ".$rel[1]; 
								 echo "<br>";
								 echo "Dr. : ".$rel[3]; 
								 echo "<br>";
								 echo "MEDICINES : ".$rel[2];
								 echo "<br>";
						     
						 $_SESSION['nm']=$fetch[0];
							 
						 $i++;
						 }
						 
						echo '<a href="../action/download.php">[download as doc]</a>';
		
	}
						?>
						<hr />
				</div>
			</div>
			<div id="footer">
				
				<p id="footnote">&#169; Copyright &#169; 2011. Company name all rights reserved</p>
			</div>
		
		</div>
	</body>
</html>

