<?php 
session_start(); //Allows you to use sessions 
$user = "SaFER"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username7'] == $user AND $_POST['password7'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username7'] = $_POST['username7'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/SaFER/SaFER.php">Login?</a>'); 
  } 
else 
    { 
?> 

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<?php include("../../include/headerSaFER-1.php"); ?>
<?phpinclude("../include/topmenu.php"); ?>
<br><br>

<!--  -----------------------  Enter LEFT Content ---------------------- -->

	
<!-- ============================== Enter Center Content ============================  -->
<!--<?php include("include/topmenu.php"); ?>-->

<?php
//registration_change_record.php


$ud_dbname=$_POST['ud_dbname'];
$ud_birdcolor1=$_POST['ud_birdcolor1'];
$ud_birdcolor2=$_POST['ud_birdcolor2'];
$ud_birdcolor3=$_POST['ud_birdcolor3'];
$ud_birdtype=$_POST['ud_birdtype'];
$ud_birdsize=$_POST['ud_birdsize'];
$ud_sciname=$_POST['ud_sciname'];
$ud_commonname=$_POST['ud_commonname'];
$ud_familyname=$_POST['ud_familyname'];
$ud_dbphoto1=$_POST['ud_dbphoto1'];
$ud_dbphoto2=$_POST['ud_dbphoto2'];
$ud_dbphoto3=$_POST['ud_dbphoto3'];
$ud_birdlink=$_POST['ud_birdlink'];
$ud_dbdescription=$_POST['ud_dbdescription'];

$db="SS2011db";
$link = mysql_connect("sql.physics.tamu.edu", "iqsedb1", "Iqse4u^2");
if (! $link)
die("Couldn't connect to MySQL");
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
mysql_query("UPDATE SaFERbirds SET birdcolor1='$ud_birdcolor1' , birdcolor2='$ud_birdcolor2' , birdcolor3='$ud_birdcolor3' , birdtype='$ud_birdtype' , birdsize='$ud_birdsize' , sciname='$ud_sciname', commonname='$ud_commonname', familyname='$ud_familyname', birdlink='$ud_birdlink' , dbphoto1='$ud_dbphoto1', dbphoto2='$ud_dbphoto2', dbphoto3='$ud_dbphoto3', dbdescription='$ud_dbdescription' WHERE dbname='$ud_dbname'");


echo "<center><h3> <font face=\"Arial\">Profile has been Updated successfully.</h3> Return to <a href=\"../SaFER-1.php\">SaFER Module</a></font></center>";

mysql_close($link);
?>

<br><br><br><br><br>
 <hr><center><br>
<p class="c2">Last update: December 17, 2011</p></center>

<!-- ============================== STOP Center Content Entry ============================  -->
<hr><center><br>
 	
	
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->
<?php include("../../include/footer.php"); ?>
<?php
}
?>
</body>
</html>
