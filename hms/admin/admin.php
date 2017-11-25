<?php
session_start();
if($_SESSION['usertype']=="admin")
{
	include 'link.php';
	$dte=date('Y-m-d');
	$sel=mysql_query("delete from appoinment where date<'$dte'");
?>	



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" />
                    </a>
                </div>
              
                 <span class="logout-spn" >
                  <a href="action/logout.php" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 

 <li >
                        <a href="../admin.php" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                   

                   
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>View Appoinments </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
				  
				 
				  
				   

				  
              <?php
			 
	{
		
               echo '<table class="table table-striped table-bordered table-hover">';
                            echo '<thead>';
                                echo '<tr>';
                                     echo '<th>';
									echo "#";
									echo '</th>';
                                    echo '<th>';
									echo "Register no";
									echo '</th>';
                                    echo '<th>';
									echo "First name";
									echo '</th>';
									echo '<th>';
									echo "age";
									echo '</th>';
									echo '<th>';
									echo "mobile";
									echo '</th>';
									echo '<th>';
									echo "doctor";
									echo '</th>';
									echo '<th>';
									echo "department";
									echo '</th>';
									echo '<th>';
									echo "date";
									echo '</th>';
                                echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
							
							 include 'link.php';
							 $po=0;
							 $sel=mysql_query("select * from appoinment order by date");
							 while($row=mysql_fetch_array($sel))
	{
							 $po++;
                                echo '<tr>';
								echo'<td>';
								echo $po;
								echo '</td>';
                                echo'<td>';
								echo $row['regno'];
								echo '</td>';
                                echo'<td>';
								echo $row['fname'];
								echo '</td>';
								echo'<td>';
								echo $row['age'];
								echo '</td>';
								echo'<td>';
								echo $row['mob'];
								echo '</td>';
								echo'<td>';
								echo $row['doc'];
								echo '</td>';
								echo'<td>';
								echo $row['dep'];
								echo '</td>';
								echo'<td>';
								echo $row['date'];
								echo '</td>';
                                echo '</tr>';
	}
                              
                           echo '</tbody>';
                        echo '</table>'; 
	}						
						?>
						
						<hr>
						
						 <a href="action/download.php">Download whole records as doc </a>
						 
						 
						 
						  <form method="post" enctype="multipart/form-data" action="action/download1.php">
	<table border="0" style="width:100%">
	<tr>
	<td style="width:20%">
	<label for="name">Appoinment Date</label>
	</td>
	<td style="width:*%">
	
   <input type="date" name="dt">
	
	</td>
	 </tr>
	  </table>
	  <input type="submit" value="Submit" name="p1">
  </form>  
						 
						 
						 
						 
						<!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  College of engineering Attingal
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>


<?php
}
else
{
	
	  header("location:../../pages/login.php");
}
?>