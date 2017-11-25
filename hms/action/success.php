<?php
$x=NULL;
	session_start();

$fnm=$_SESSION['fname'];
$ag=$_SESSION['age'];
$mb=$_SESSION['mob'];
	
	include '../link.php';
	$sel=mysql_query("select * from register where fname='$fnm' and age='$ag' and mob='$mb'");
		while($row=mysql_fetch_array($sel))
	{
		$x=$row['slno'];
	}

				
?>


<html>
<body bgcolor=lightgrey>

<center><img width=300 height=150 src="../images/suc.jpg"><br>
<font color=green size=10>
<?php
echo "op code:$x";
echo '</font>';
echo '<br>';
echo '<hr width=300>';
echo '<a href="../index.html">Continue</a>';
echo '</center>';
echo '<font color=red>';
echo "*(please note down registration id for booking appoinments)";
echo '</font>';
session_unset();


?>

</body>
</html>