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
					
					<form method="post">
						<table cellspacing="10">
							<tbody>
								<tr><td><label>Name</label></td><td><input type="text" name="opno" class="txtfield" /></td></tr>
								
								
							</tbody>
								</table>
								<tr><td colspan="2" align="right"><input type="submit" name="be1" value="Submit" class="button" /></td></tr>
							
						
					</form>
						<?php
						if(isset($_POST['be1']))
						{
							include '../link.php';
							session_start();
							error_reporting(0);
							
							$opno=$_POST['opno'];
							
							$sel=mysql_query("select * from register where slno='$opno'");
								while($row=mysql_fetch_array($sel))
									{
										$aa=$row['slno'];
										$ab=$row['fname'];
										$ac=$row['lname'];
										$ad=$row['gender'];
										$ae=$row['age'];
										$af=$row['mob'];
										$ag=$row['address'];
										
										echo "working select";
										
										
									}
							
							$_SESSION['opnm']=$aa;
							$_SESSION['fname']=$ab;
							$_SESSION['lname']=$ac;
							$_SESSION['gender']=$ad;
							$_SESSION['age']=$ae;
							$_SESSION['mob']=$af;
							$_SESSION['add']=$ag;
							
							echo $aa;
							
							$sel=mysql_query("CREATE TABLE IF NOT EXISTS `$aa` (slno int(11) NOT NULL AUTO_INCREMENT,date date NOT NULL,treatment text NOT NULL,prescription varchar(300) NOT NULL,doctor varchar(30) NOT NULL,PRIMARY KEY (slno)) ");
	
							
							?>
							
							<a id="a_link" target="_blank" href="card_print.php">A</a>

							
							<?php
							
							
						header("refresh:3;url=reception.php");
						}
						?>
				</div>
			</div>
			<div id="footer">
				
				<p id="footnote">&#169; Copyright &#169; 2011. Company name all rights reserved</p>
			</div>
		</div>
	<script type='text/javascript'>
document.getElementById('a_link').click();

</script>
	</body>
</html>

<?php


?>