<?php
session_start();
if($_SESSION['usertype']=="admin")
{
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
<table border="1">
									<thead>
										<tr>
										<th>#</th>
											<th>Reg No</th>
											<th>First name</th>
											<th>Age</th>
											<th>mobile</th>
											<th>doctor</th>
											<th>Department</th>
											<th>Date</th>
											
										</tr>
									</thead>

<?php 
$filename="Appoinment list";
$sql = "SELECT * from  appoinment order by date";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				

echo '  
<tr>  
<td>'.$cnt.'</td> 
<td>'.$complainNumber= $result->regno.'</td> 
<td>'.	$MobileNumber= $result->fname.'</td> 
<td>'.$EmailId= $result->age.'</td> 
<td>'.$Gender= $result->mob.'</td> 	
<td>'.$Gen= $result->doc.'</td> 
<td>'.$Gende= $result->dep.'</td> 
<td>'.$Gend= $result->date.'</td> 	
</tr>  
';

			$cnt++;
			}
	}
?>
</table>
<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename."-report.doc");
header("Pragma: no-cache");
header("Expires: 0");


?>

<?php
}
else
{
	
	  header("location:../../pages/login.php");
}
?>