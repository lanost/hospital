
<?php

session_start();

$dt=$_SESSION['date'];
$dte=date("Ymd",strtotime($dt));
//header("location:http://www.google.com/calendar/event?action=TEMPLATE&text=Doctors%20Appoinment&dates=$dteT010000Z/$dteT020000Z&details=Doctors%20Appoinment&location=hcare%20centre");
?>
<html>
<head>

</head>
<body background="../images/bg3.jpg">
<br><br><br>
<center>
<a id="a_link" target="_blank" href="http://www.google.com/calendar/event?action=TEMPLATE&text=Doctors%20Appoinment&dates=<?php echo htmlspecialchars($dte);?>T010000Z/<?php echo htmlspecialchars($dte);?>T020000Z&details=Doctors%20Appoinment&location=hcare%20centre">ADD TO GOOGLE CALENDER</a>
<br><br><br><br><br><br>
<a href="../index.html">GO TO HOME</a>
</center>

<script type='text/javascript'>
document.getElementById('a_link').click();

</script>
</body>
</html>
<?php

header("refresh:3;url=../index.html");
?>