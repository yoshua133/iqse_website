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
<br>
<center>	
<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>
<br>
</center>		 
<br><br>

<?php
//IQSERR_change_record.php
$ud_id=$_POST['ud_id'];
$ud_reference=$_POST['ud_reference'];
$ud_title=$_POST['ud_title'];
$ud_author=$_POST['ud_author'];
$ud_lastauthor=$_POST['ud_lastauthor'];
$ud_publish=$_POST['ud_publish'];
$ud_description=$_POST['ud_description'];
$ud_location=$_POST['ud_location'];
$ud_subject=$_POST['ud_subject'];
$ud_evans=$_POST['ud_evans'];
$ud_comment1=$_POST['ud_comment1'];
$ud_comment2=$_POST['ud_comment2'];
$ud_comment3=$_POST['ud_comment3'];
$ud_donator=$_POST['ud_donator'];
$ud_donatedate=$_POST['ud_donatedate'];
$ud_missing=$_POST['ud_missing'];


$db="SS2011db";
$link = mysql_connect("sql.physics.tamu.edu", "iqsedb1", "Iqse4u^2");
if (! $link)
die("Couldn't connect to MySQL");
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
mysql_query(" DELETE FROM IQSERR WHERE id='$ud_id'");

echo "<center><h3> Book has been Deleted successfully.</h3> Return to <a href=\"../TRR-1.php\">TRR Module</a></center>";

mysql_close($link);
?>
<br><br><br><br><br>
<div align="center">
<?php include("../include/footer-1.php"); ?>
</div>
<?php } ?>
</body>
</html>