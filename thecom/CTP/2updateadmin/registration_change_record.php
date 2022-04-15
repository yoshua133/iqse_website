<?php 
session_start(); //Allows you to use sessions 
$user = "CTP"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username3'] == $user AND $_POST['password3'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username3'] = $_POST['username3'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000"><font face="Arial">You are not logged in!</font></font> </h2><br> <a href="http://iqse.tamu.edu/thecom/CTP/CTP.php">Login?</a>'); 
  } 
else 
    { 
?> 

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<html><body>
<?php include("../../include/headerCTP-1.php"); ?>
<?phpinclude("../include/topmenu.php"); ?>
<br><br>
<!--  -----------------------  Enter LEFT Content ---------------------- -->


<!-- ============================== Enter Center Content ============================  -->
<!--<?php include("include/topmenu.php"); ?>-->

<?php
//registration_change_record.php


$ud_uname=$_POST['ud_uname'];
$ud_first=$_POST['ud_first'];
$ud_last=$_POST['ud_last'];
$ud_email=$_POST['ud_email'];
$ud_oloc=$_POST['ud_oloc'];
$ud_ophone=$_POST['ud_ophone'];
$ud_lloc=$_POST['ud_lloc'];
$ud_lphone=$_POST['ud_lphone'];
$ud_fphone=$_POST['ud_fphone'];
$ud_title=$_POST['ud_title'];
$ud_title2=$_POST['ud_title2'];
$ud_title3=$_POST['ud_title3'];
$ud_dept=$_POST['ud_dept'];
$ud_dept2=$_POST['ud_dept2'];
$ud_dept3=$_POST['ud_dept3'];
$ud_classification=$_POST['ud_classification'];
$ud_dbgroupmbr=$_POST['ud_dbgroupmbr'];
$ud_dbstatus=$_POST['ud_dbstatus'];
$ud_dbdatechange=$_POST['ud_dbdatechange'];
$ud_dbdateadd=$_POST['ud_dbdateadd'];
$ud_dbdateterm=$_POST['ud_dbdateterm'];
$ud_dbFYadd=$_POST['ud_dbFYadd'];
$ud_dbFYterm=$_POST['ud_dbFYterm'];
$ud_dbworkgroup=$_POST['ud_dbworkgroup'];
$ud_dbcomment1=$_POST['ud_dbcomment1'];
$ud_dbcomment2=$_POST['ud_dbcomment2'];
$ud_dbcomment3=$_POST['ud_dbcomment3'];
$ud_dbwaddress=$_POST['ud_dbwaddress'];
$ud_dbdescription=$_POST['ud_dbdescription'];

$db="SS2011db";
$link = mysql_connect("sql.physics.tamu.edu", "iqsedb1", "Iqse4u^2");
if (! $link)
die("Couldn't connect to MySQL");
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
mysql_query("UPDATE CTPpeople SET first='$ud_first' , last='$ud_last' , email='$ud_email' , oloc='$ud_oloc' , ophone='$ud_ophone' , lloc='$ud_lloc', lphone='$ud_lphone', fphone='$ud_fphone', title='$ud_title' , title2='$ud_title2' , title3='$ud_title3', dept='$ud_dept', dept2='$ud_dept2', dept3='$ud_dept3', classification='$ud_classification', dbgroupmbr='$ud_dbgroupmbr', dbstatus='$ud_dbstatus', dbdatechange='$ud_dbdatechange', dbdateadd='$ud_dbdateadd', dbdateterm='$ud_dbdateterm', dbFYadd='$ud_dbFYadd', dbFYterm='$ud_dbFYterm', dbworkgroup='$ud_dbworkgroup', dbcomment1='$ud_dbcomment1', dbcomment2='$ud_dbcomment2', dbcomment3='$ud_dbcomment3', dbwaddress='$ud_dbwaddress', dbdescription='$ud_dbdescription' WHERE uname='$ud_uname'");


echo "<font face=\"Arial\"><center><h3> Profile has been Updated successfully.</h3> Return to <a href=\"../CTP-1.php\">CTP Module</a></center></font>";

mysql_close($link);
?>

<br><br><br><br><br>
 <hr><center><br>
<p class="c2"><font face="Arial">Last update: December 17, 2011</font></p></center>

<!-- ============================== STOP Center Content Entry ============================  -->
<hr><center><br>
 	
	
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->
<?php include("../include/footer.php"); ?>
<?php
}
?>
</body>
</html>