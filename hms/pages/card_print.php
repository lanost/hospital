<?php
	session_start();

	$opno=$_SESSION['opnm'];
	$fnam=$_SESSION['fname'];
	$lnam=$_SESSION['lname'];
	$gen=$_SESSION['gender'];
	$ag=$_SESSION['age'];
	$mb=$_SESSION['mob'];
	$ad=$_SESSION['add'];
							
	echo '<table border=0>
	<tr><td>Opno:</td><td>'.$opno.'<td></tr>
	<tr><td>Name:</td><td>'.$fnam.' '.$lnam.'<td></tr>
	<tr><td>gender:</td><td>'.$gen.'<td></tr>
	<tr><td>Age:</td><td>'.$ag.'<td></tr>
	<tr><td>Mob:</td><td>'.$mb.'<td></tr>
	<tr><td>Address:</td><td>'.$ad.'<td></tr>
	</table>
	';
	
	
?>