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


<?php
//registration_new_record.php

$c_speakername=$_POST['c_speakername'];
$c_speakeraffil=$_POST['c_speakeraffil'];
$c_speakertitle=$_POST['c_speakertitle'];
$c_speakerabstract=$_POST['c_speakerabstract'];
$c_talkdate=$_POST['c_talkdate'];
$c_talktime=$_POST['c_talktime'];
$c_talkloc=$_POST['c_talkloc'];
$c_speakerhost=$_POST['c_speakerhost'];
$c_hostemail=$_POST['c_hostemail'];
$c_dbposter=$_POST['c_dbposter'];
$c_talktype=$_POST['c_talktype'];
$c_talkbuilding=$_POST['c_talkbuilding'];
$c_talkyear=$_POST['c_talkyear'];
$c_eventDate=$_POST['c_eventDate'];
$c_dborder=$_POST['c_dborder'];
$c_dbwaddress=$_POST['c_dbwaddress'];
$c_dbsponsor=$_POST['c_dbsponsor'];
$c_dbfood=$_POST['c_dbfood'];
$c_dbcomment1=$_POST['c_dbcomment1'];
$c_dbcomment2=$_POST['c_dbcomment2'];
$c_dbcomment3=$_POST['c_dbcomment3'];
$c_dbcomment4=$_POST['c_dbcomment4'];
$c_dbcomment5=$_POST['c_dbcomment5'];
$c_dbcomment6=$_POST['c_dbcomment6'];


$db="SS2011db";
$link = mysql_connect("sql.physics.tamu.edu", "iqsedb1", "Iqse4u^2");
if (! $link)
die("Couldn't connect to MySQL");
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
mysql_query("INSERT IQSEevent SET talktype='$c_talktype', speakertitle='$c_speakertitle' , speakername='$c_speakername' , speakeraffil='$c_speakeraffil' , speakerabstract='$c_speakerabstract' , talkdate='$c_talkdate' , talktime='$c_talktime', talkloc='$c_talkloc', speakerhost='$c_speakerhost', hostemail='$c_hostemail', dbposter='$c_dbposter' ,  talkbuilding='$c_talkbuilding', talkyear='$c_talkyear', eventDate='$c_eventDate', dborder='$c_dborder', dbwaddress='$c_dbwaddress', dbsponsor='$c_dbsponsor', dbfood='$c_dbfood', dbcomment1='$c_dbcomment1', dbcomment2='$c_dbcomment2', dbcomment3='$c_dbcomment3', dbcomment4='$c_dbcomment4', dbcomment5='$c_dbcomment5', dbcomment6='$c_dbcomment6'");

echo "<br><br><center><h3> Event has been Added successfully.</h3> Return to <a href=\"../IQSE-1.php\">IQSE Module</a></center>";

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
