<?php 
session_start(); //Allows you to use sessions 
$user = "TRR"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username5'] == $user AND $_POST['password5'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username5'] = $_POST['username5'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="../TRR.php">Login?</a>'); 
  } 
else 
    { 
?> 

<?php
/**
 * IQSE check-out book system
 * written by Kim Chapin April 2011
 */
?>
<html>
<body>

<div align="center">
<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>
</div>	 


<?php
//IQSERR_change_record.php

$ud_id=$_POST['ud_id'];
$ud_reference=$_POST['ud_reference'];
$ud_status=$_POST['ud_status'];
$ud_first=$_POST['ud_first'];
$ud_last=$_POST['ud_last'];
$ud_UIN=$_POST['ud_UIN'];
$ud_email=$_POST['ud_email'];
$ud_outdate=$_POST['ud_outdate'];
$ud_missing=$_POST['ud_missing'];

$db="SS2011db";
$link = mysql_connect("sql.physics.tamu.edu", "iqsedb1", "Iqse4u^2");
if (! $link)
die("Couldn't connect to MySQL");
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
mysql_query(" UPDATE IQSERR SET status='$ud_status', first='$ud_first' , last='$ud_last', UIN='$ud_UIN' , outdate='$ud_outdate', email='$ud_email', missing='$ud_missing' WHERE reference='$ud_reference'");

if($ud_status=='no'){echo "<center><br><br><br><br><h3> The book has been checked in successfully.</h3>Return to <a href=\"../TRR-1.php\">TRR Module</a></center>";
}else{
echo "<center><h3> The book has been checked out successfully.</h3> Return to <a href=\"../TRR-1.php\">TRR Module</a></center>";
}

mysql_close($link);
?>
<br><br><br><br><br><br><br>
<div align="center">
<?php include("../include/footer-1.php"); ?>
</div>
</body>
</html>

<?php } ?>