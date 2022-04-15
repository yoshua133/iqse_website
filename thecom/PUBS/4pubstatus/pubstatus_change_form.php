<?php 
session_start(); //Allows you to use sessions 
$user = "IQSEpubs"; //Username to protected page. 
$pass = "Letmein2"; //Password to protected page. 
if($_POST['username6'] == $user AND $_POST['password6'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username6'] = $_POST['username6'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/PUBS/PUB.php">Login?</a>'); 
  } 
else 
    { 
?>

<html>
<body>


<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>

<!-- ============================== Enter Center Content ============================  -->
<?php $uname=$_POST['uname'];
  
//registration_change_form.php
?>

<html><head><title>Update Profile Form</title>
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

$query=" SELECT * FROM IQSEpeople WHERE uname='$uname'";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$first=mysql_result($result,$i,"first");
$last=mysql_result($result,$i,"last");
$dbcomment3=mysql_result($result,$i,"dbcomment3");
$dbcomment4=mysql_result($result,$i,"dbcomment4");
$dbcomment5=mysql_result($result,$i,"dbcomment5");
$dbcomment6=mysql_result($result,$i,"dbcomment6");
?>

<center>

<?php echo "<h3>Hello,&nbsp;<font color=\"#FF0000\">". $first."</font>&nbsp;<font color=\"#FF0000\">". $last."</font>,&nbsp; Welcome to the Publication Status Update Form</h3>";?>
<table width="500" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0">
<tr align="center" valign="top">
<td align="center" colspan="1">
<form action="pubstatus_change_record.php" method="POST">
<input type="hidden" name="ud_uname" value="<?php echo "$uname" ?>">
<b>Instructions:</b>
</td><td align="center" colspan="1">
<b>Your Current Status is:</b></td></tr>
<tr align="center" valign="top">
<td align="left" colspan="1">
Enter "<font color="#FF0000">None</font>" to prohibit IQSE Pubs from automatically appearing on your IQSE people page. Enter "<font color="#FF0000">Yes</font>" to allow.
</td><td align="center" colspan="1">
 <br>
<input type="text" size="35"  name="ud_dbcomment3" value="<?php echo "$dbcomment3"?>"><br>
</td></tr>
</table><br><br>
<input type="Submit" value="Update"></form>
<?php
++$i;
}
?>

<br><br>
 <hr><center>
<p class="c2">Last update: August 23, 2013</p></center>

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

