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
$ud_awardname=$_POST['ud_awardname'];
$ud_himg1=$_POST['ud_himg1'];
$ud_himg2=$_POST['ud_himg2'];
$ud_himg3=$_POST['ud_himg3'];
$ud_tlink1=$_POST['ud_tlink1'];
$ud_tlink2=$_POST['ud_tlink2'];
$ud_tlink3=$_POST['ud_tlink3'];
$ud_ppldb=$_POST['ud_ppldb'];
$ud_year=$_POST['ud_year'];
$ud_awardeename1=$_POST['ud_awardeename1'];
$ud_awardeename2=$_POST['ud_awardeename2'];
$ud_awardee1=$_POST['ud_awardee1'];
$ud_awardee2=$_POST['ud_awardee2'];
$ud_dbcomment1=$_POST['ud_dbcomment1'];
$ud_dbcomment2=$_POST['ud_dbcomment2'];
$ud_dbcomment3=$_POST['ud_dbcomment3'];
$ud_datereceived=$_POST['ud_datereceived'];
$ud_placereceived=$_POST['ud_placereceived'];

$db="SS2011db";
$link = mysql_connect("sql.physics.tamu.edu", "iqsedb1", "Iqse4u^2");
if (! $link)
die("Couldn't connect to MySQL");
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
mysql_query("UPDATE IQSEhonors SET awardname='$ud_awardname' , himg1='$ud_himg1' , himg2='$ud_himg2' , himg3='$ud_himg3' , tlink1='$ud_tlink1' , tlink2='$ud_tlink2', tlink3='$ud_tlink3', ppldb='$ud_ppldb', year='$ud_year' , awardeename1='$ud_awardeename1' , awardeename2='$ud_awardeename2' , awardee1='$ud_awardee1' , awardee2='$ud_awardee2', dbcomment1='$ud_dbcomment1', dbcomment2='$ud_dbcomment2', dbcomment3='$ud_dbcomment3', datereceived='$ud_datereceived', placereceived='$ud_placereceived' WHERE id='$ud_id'");

echo "<br><br><center><h3> Honor or Award Information has been Updated successfully.</h3> Return to <a href=\"../IQSE-1.php\">IQSE Module</a></center>";

mysql_close($link);
?>

<br><br><br><br><br>
 <hr><center>
<p class="c2">Last update: October 15, 2012</p></center>

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
