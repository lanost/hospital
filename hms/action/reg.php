<?php


if(isset($_POST['b1']))
{
 
session_start();

$_SESSION['fname']=$_POST['fname'];
$_SESSION['lname']=$_POST['lname'];
$_SESSION['gender']=$_POST['gender'];
$_SESSION['age']=$_POST['age'];
$_SESSION['mob']=$_POST['mob'];
$_SESSION['addr']=$_POST['addr'];
$_SESSION['pword']=$_POST['pword'];

$mm=$_SESSION['mob'];

   // $string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$string = '0123456789';
    $string_shuffled = str_shuffle($string);
    $rndno = substr($string_shuffled, 1, 7);

	//echo $rndno;
	?>
	<html>
	<body>
	<iframe src="https://control.msg91.com/api/sendotp.php?authkey=184373AwUbUsvTULNx5a108d1b&mobile=91.<?php echo htmlspecialchars($mm);?>&message=Your%20hCare%20otp%20is%20<?php echo htmlspecialchars($rndno);?>&sender=senderid&otp=<?php echo htmlspecialchars($rndno);?>"></iframe>
	</body>
	</html>
	<?php
	//header("location:https://bulksms.vsms.net/eapi/submission/send_sms/2/2.0?username=lanosvct&password=lanoslapos&message='Welcome to hcare \n otp is $rndno'&msisdn=91.'$mm'");

$_SESSION['otp']=$rndno;

header("refresh:3;url=../otp.html");
//header("location:../otp.html");

}
?>