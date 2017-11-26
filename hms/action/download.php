<?php
session_start();
$opn=$_SESSION['opno'];
$nam=$_SESSION['nm'];
?>	
<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','hcare');
// Establish database connection.

try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}





?>

<?php 
$filename="prescription.'$opn'";
$sql = "SELECT * from pharmacy where opno='$opn'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{				

echo '  <center>
<h2>hCare</h2>
<br>
											
											
										
											<h3>PRESCRIPTION</h3>
<table border="0">
									<thead>
										
											
										
										
										<tr>
											<th>NAME</th>
											<th>'.$nam.'</th>
										</tr>
										<tr>
											
											<th>OP no</th>
											<th>'.$opn.'</th>
											
										</tr>
										<tr>
										
											<th>Dr Name</th>
											<th>'.$Gen= $result->doc.'</th>
											
										</tr>
										
										</table>
										<hr>
										<table border=0>
										<tr>
										
										<th>Rx</th>
										<th></th>
										</tr>
										<tr>
										<th>'.$Gende= $result->medicine.'</th>
											

										</tr>
									</thead>


';

		
			}
	}
?>
</table></center>
<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename."-report.doc");
header("Pragma: no-cache");
header("Expires: 0");


?>
