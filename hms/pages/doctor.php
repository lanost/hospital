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
					<li class="selected" id="link1"><a href="doctor.php">Home</a></li>
					<li id="link2"><a href="pres.php">prescription</a></li>
					<li id="link3"><a href="lab_test.php">Lab Test</a></li>
					
					</ul>
					<ul id="buttons">
						<li><a href="../contact.html">Contact Us</a></li>
						<li><a href="../logout.php">Logout</a></li>
					</ul>
				</div>
				<div>
						<br><br>
						<h2>History</h2>
						
						<form method="post">
						<input type="text" name="opno">
						<br><br>
						<input type="submit" value="history" name="bc2">
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
	
	
	$query1=mysql_query("select * from `$opn` order by date");
	while($row=mysql_fetch_array($query1))
	{
	$x=$row['doctor'];
	$aa=$row['treatment'];	
	$aaa=$row['prescription'];
	}
    ?>
	<table border=0>
	<tr>
	    <th>NAME:</th>
		<th><?php echo $xy; echo "&nbsp"; echo $xyz?> </th>
		
	</tr>
	
	<tr>
	    <th>AGE:</th>
		<th><?php echo $ag;?> </th>
		
	</tr>	
	<tr>
	    <th>GENDER:</th>
		<th><?php echo $sx;?> </th>
		
	</tr>	
	<tr>
	    <th>CONSULTED DOCTOR:</th>
		<th><?php echo $x;?> </th>
		
	</tr>	
	<tr>
	    <th>DISEASE:</th>
		<th><?php echo $aa;?> </th>
		
	</tr>	
	<tr>
	    <th>PREVIOUS MEDICINES:</th>
		<th><?php echo $aaa;?> </th>
		
	</tr>
	</table>
	<?php
	}
						?>
						
						
			<hr>
<h2>notifications</h2>	
<?php
$st=uploaded;
$sel1=mysql_query("select * from lab where status='$st' and doctor='$id'");		
while($row=mysql_fetch_array($sel1))
	{
		$xyz=$row['report'];
		?>
		
		<a id="a_link" target="_blank" href="view_pdf.php?fle=<?php echo $xyz; ?>"><?php echo $xyz; ?></a>
		<?php
		
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

