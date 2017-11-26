
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Form </title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="Smart Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all">
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900iSlabo+27px&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//online-fonts -->
<body>
  
<!--header-->
<div class="agileheader">
	<br><br><br>
</div>
<!--//header-->

<!--main-->
<div class="main-w3l">
<div class="w3layouts-main">
	<h2>User Login</h2>
        <form method="post" >
			<input value="username" name="uname" type="text" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-Mail';}"/>
			<input value="PASSWORD" name="pword" type="password" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
			
			
				<div class="clear"></div>
				<input type="submit" value="login" name="b1">
		</form>
		
		
</div>
<a href="../index.php"><h2>back</h2></a>
</div>

<!--//main-->

<!--footer-->
<div class="footer-w3l">
	
</div>
<!--//footer-->
</body>
</html>


 <?php
 include 'link.php';
 
   session_start();
 if(isset($_POST['b1']))
	{						   
	$usrnm=$_POST["uname"];
	$pass=$_POST["pword"];	
	
	$sel=mysql_query("select * from user where uname='$usrnm' and pword='$pass'");	
	if(mysql_num_rows($sel)>0)
{
    $r=mysql_fetch_row($sel);

						   
if($r[3]=="patient")
{
    $_SESSION['usertype']="patient";
	$_SESSION['usrname']=$usrnm;
	
    header("location:pages/patient.php");
    
}

if($r[3]=="doctor")
{
    $_SESSION['usertype']="doctor";
	$_SESSION['usrname']=$usrnm;
	
    header("location:pages/doctor.php");
}

if($r[3]=="reception")
{
    $_SESSION['usertype']="reception";
	$_SESSION['usrname']=$usrnm;
	
    header("location:pages/reception.php");
}
if($r[3]=="pharmacy")
{
    $_SESSION['usertype']="pharmacy";
	$_SESSION['usrname']=$usrnm;
	
    header("location:pages/pharmacy.php");
}

if($r[3]=="lab")
{
    $_SESSION['usertype']="lab";
	$_SESSION['usrname']=$usrnm;
	
    header("location:pages/lab.php");
}

    

}
else
{
	//header("location:../pages/login.html");
    echo"invalid username or password";
}
	}
                                    ?>