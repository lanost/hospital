
<html>
<body>

<center><img width=300 height=150 src="../images/err.jpg"><center>

</body>
</html>




<?php 
session_start();
session_unset();
//session_destroy();
 header("refresh:3;url=../index.html");

?>
