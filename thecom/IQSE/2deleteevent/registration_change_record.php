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


$ud_id=$_POST['ud_id'];
$ud_speakername=$_POST['ud_speakername'];
$ud_speakeraffil=$_POST['ud_speakeraffil'];
$ud_speakertitle=$_POST['ud_speakertitle'];
$ud_speakerabstract=$_POST['ud_speakerabstract'];
$ud_talkdate=$_POST['ud_talkdate'];
$ud_talktime=$_POST['ud_talktime'];
$ud_talkloc=$_POST['ud_talkloc'];
$ud_speakerhost=$_POST['ud_speakerhost'];
$ud_hostemail=$_POST['ud_hostemail'];
$ud_dbposter=$_POST['ud_dbposter'];
$ud_talktype=$_POST['ud_talktype'];
$ud_talkbuilding=$_POST['ud_talkbuilding'];
$ud_talkyear=$_POST['ud_talkyear'];
$ud_eventDate=$_POST['ud_eventDate'];
$ud_dborder=$_POST['ud_dborder'];
$ud_dbwaddress=$_POST['ud_dbwaddress'];
$ud_dbsponsor=$_POST['ud_dbsponsor'];
$ud_dbfood=$_POST['ud_dbfood'];
$ud_dbcomment1=$_POST['ud_dbcomment1'];
$ud_dbcomment2=$_POST['ud_dbcomment2'];
$ud_dbcomment3=$_POST['ud_dbcomment3'];
$ud_dbcomment4=$_POST['ud_dbcomment4'];
$ud_dbcomment5=$_POST['ud_dbcomment5'];
$ud_dbcomment6=$_POST['ud_dbcomment6'];


$db="SS2011db";
$link = mysql_connect("sql.physics.tamu.edu", "iqsedb1", "Iqse4u^2");
if (! $link)
die("Couldn't connect to MySQL");
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
mysql_query("DELETE FROM IQSEevent WHERE id='$ud_id'");

echo "<center><h3> Event has been Deleted successfully.</h3> Return to <a href=\"../IQSE-1.php\">IQSE Module</a></center>";

mysql_close($link);
?>

<br><br><br><br><br>
 <hr><center>
<p class="c2">Last update: October 15, 2012</p></center>

<!-- ============================== STOP Center Content Entry ============================  -->

 	
	
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<?php include("../include/footer-1.php"); ?>

<?php
}
?>
</body>
</html>
