
<html>
<head>
<style type="text/css">
#myiframe {width:90%; height:100%;} 
</style>
</head>
<body>
	<?php
		$nam7=$_GET['fle'];
		echo $nam7;	
	?>
	<iframe name="myiframe" id="myiframe" src="../action/lab_reports/<?php echo htmlspecialchars($nam7);?>"></iframe>
</body>
</html>