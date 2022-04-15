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

<html>
<head>
<title>IQSERR Book Check-Out System </title>

</head>
<body>

<div align="center">
<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>
</div>


<?php $reference=$_POST['reference'];
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());

$query=" SELECT * FROM IQSERR WHERE reference='$reference'";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$id=mysql_result($result,$i,"id");
$title=mysql_result($result,$i,"title");
$author=mysql_result($result,$i,"author");
$outdate=mysql_result($result,$i,"outdate");
$status=mysql_result($result,$i,"status");
$first=mysql_result($result,$i,"first");
$last=mysql_result($result,$i,"last");
$UIN=mysql_result($result,$i,"UIN");
$email=mysql_result($result,$i,"email");
$missing=mysql_result($result,$i,"missing");?>
<center>

<h3>IQSERR Book Check-Out System</h3>
<table width="500" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0">
<tr align="center" valign="top">
<td align="center" colspan="1">
<form action="IQSERR_change_record.php" method="POST">
<input type="hidden" name="ud_reference" value="<?php echo "$reference" ?>">
Reference No.: 
</td><td align="center" colspan="1">
<?php echo "$reference"?><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Title: 
</td><td align="center" colspan="1">
<?php echo "$title"?><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Author: 
</td><td align="center" colspan="1">
<?php echo "$author"?><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Missing: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_missing" value="<?php echo "no"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Checked Out?: <br>
<small>(enter yes or no)</small>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_status" value="<?php echo "$status" ?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Date Checked Out?: <br>
<small>(mm/dd/yyyy)</small>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_outdate" value="<?php echo "$outdate"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
First Name: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_first" value="<?php echo "$first"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Last Name: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_last" value="<?php echo "$last"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
UIN:<br>
<small>(poster, talk, or n/a only)</small> 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_UIN" value="<?php echo "$UIN"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Email Address: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_email" value="<?php echo "$email"?>"><br>
</td></tr>

</table><br><br>
<input type="Submit" value="Update"></form> </center>
<?php
++$i;
?>
<br><br>
<div align="center">
<?php include("../include/footer-1.php"); ?>
</div>
</body>

</html>
<?php
}}
?>

