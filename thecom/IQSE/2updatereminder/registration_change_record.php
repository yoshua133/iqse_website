<?php 
session_start(); //Allows you to use sessions 
$user = "IQSE"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username4'] == $user AND $_POST['password4'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username4'] = $_POST['username4'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/IQSE/IQSE.php">Login?</a>'); 
  } 
else 
    { 
?> 

<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>

<!-- ============================== Enter Center Content ============================  -->
<!--<?php include("include/topmenu.php"); ?>-->

<?php
//registration_change_record.php

$ud_reminder_id=$_POST['ud_reminder_id'];
$ud_reminder_date=$_POST['ud_reminder_date'];
$ud_reminder_name=$_POST['ud_reminder_name'];
$ud_reminder_desc=$_POST['ud_reminder_desc'];
$ud_dbemail=$_POST['ud_dbemail'];

$db="SS2011db";
$link = mysql_connect("sql.physics.tamu.edu", "iqsedb1", "Iqse4u^2");
if (! $link)
die("Couldn't connect to MySQL");
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
mysql_query("UPDATE IQSEreminders SET reminder_date='$ud_reminder_date' , reminder_name='$ud_reminder_name' , reminder_desc='$ud_reminder_desc' , dbemail='$ud_dbemail' WHERE reminder_id='$ud_reminder_id'");

echo "<br><br><center><h3> Reminder has been Updated successfully.</h3> Return to <a href=\"../IQSE-1.php\">IQSE Module</a></center>";

mysql_close($link);
?>

<br><br><br><br><br>
 <hr><center>
<p class="c2">Last update: October 15, 2013</p></center>

<!-- ============================== STOP Center Content Entry ============================  -->

 	
	
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<small><?php include("../include/footer-1.php"); ?></small>

<?php
}
?>
</body>
</html>
