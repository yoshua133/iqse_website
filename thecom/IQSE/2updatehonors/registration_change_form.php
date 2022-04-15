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

<html>
<body>

<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>

<!-- ============================== Enter Center Content ============================  -->
<?php $id=$_POST['id'];
  
//registration_change_form.php
?>

<html><head><title>Update Honors Form</title>
<style type="text/css">
td {font-family: tahoma, arial, verdana; font-size: 10pt }
</style>



</head>
<body>
<?php

$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());

$query=" SELECT * FROM IQSEhonors WHERE id='$id'";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$awardname=mysql_result($result,$i,"awardname");
$himg1=mysql_result($result,$i,"himg1");
$himg2=mysql_result($result,$i,"himg2");
$himg3=mysql_result($result,$i,"himg3");
$tlink1=mysql_result($result,$i,"tlink1");
$tlink2=mysql_result($result,$i,"tlink2");
$tlink3=mysql_result($result,$i,"tlink3");
$ppldb=mysql_result($result,$i,"ppldb");
$year=mysql_result($result,$i,"year");
$awardeename1=mysql_result($result,$i,"awardeename1");
$awardeename2=mysql_result($result,$i,"awardeename2");
$awardee1=mysql_result($result,$i,"awardee1");
$awardee2=mysql_result($result,$i,"awardee2");
$dbcomment1=mysql_result($result,$i,"dbcomment1");
$dbcomment2=mysql_result($result,$i,"dbcomment2");
$dbcomment3=mysql_result($result,$i,"dbcomment3");
$datereceived=mysql_result($result,$i,"datereceived");
$placereceived=mysql_result($result,$i,"placereceived");
?>

<center>

<h3>Award Update Form</h3>
<table width="500" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0">
<tr align="center" valign="top">
<td align="center" colspan="1">
<form action="registration_change_record.php" method="POST">
<input type="hidden" name="ud_id" value="<?php echo "$id" ?>">
Award Name: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_awardname" value="<?php echo "$awardname"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Awardee Name: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_awardeename1" value="<?php echo "$awardeename1"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Awardee Name 2: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_awardeename2" value="<?php echo "$awardeename2"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Award Presentation Photo File Name: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_himg1" value="<?php echo "$himg1"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Award Winner 1's IQSE assigned Uname: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_awardee1" value="<?php echo "$awardee1"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
AwardWinner 2's IQSE assigned Uname: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_awardee2" value="<?php echo "$awardee2"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
IQSE Banner Filename:
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_tlink1" value="<?php echo "$tlink1"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Weblink to News Article: <br> 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_tlink2" value="<?php echo "$tlink2"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Weblink to News Article: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_tlink3" value="<?php echo "$tlink3"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Year Award Received: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_year" value="<?php echo "$year"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Award Receive Date:<br> <small>mm/dd/yyyy</small> <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_datereceived" value="<?php echo "$datereceived"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Month Date (mmdd):<br><small>(to order list)</small>: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_himg3" value="<?php echo "$himg3"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Place Award Received: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_placereceived" value="<?php echo "$placereceived"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Name of user posting:<br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_ppldb" value="<?php echo "$ppldb"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 1: Is this a News Item?<br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbcomment1" value="<?php echo "$dbcomment1"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 2: Enter News Item Description to be posted. <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbcomment2" value="<?php echo "$dbcomment2"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 3: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbcomment3" value="<?php echo "$dbcomment3"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 4: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_himg2" value="<?php echo "$himg2"?>"><br>
</td></tr>

</table><br><br>
<input type="Submit" value="Update"></form>
<?php
++$i;
}
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

