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
<div align="center"><?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?></div>


<?php $id=$_POST['id'];
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());

$query=" SELECT * FROM IQSERR WHERE id='$id'";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$reference=mysql_result($result,$i,"reference");
$title=mysql_result($result,$i,"title");
$author=mysql_result($result,$i,"author");
$lastauthor=mysql_result($result,$i,"lastauthor");
$publish=mysql_result($result,$i,"publish");
$description=mysql_result($result,$i,"description");
$location=mysql_result($result,$i,"location");
$subject=mysql_result($result,$i,"subject");
$evans=mysql_result($result,$i,"evans");
$comment1=mysql_result($result,$i,"comment1");
$comment2=mysql_result($result,$i,"comment2");
$comment3=mysql_result($result,$i,"comment3");
$donator=mysql_result($result,$i,"donator");
$donatedate=mysql_result($result,$i,"donatedate");
$missing=mysql_result($result,$i,"missing");
?>
<center>

<h3>Book to be <font color="#FF8080">Deleted</font></h3>
<table width="500" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0">
<tr align="center" valign="top">
<td align="center" colspan="1">
<form action="IQSERR_change_record.php" method="POST">
<input type="hidden" name="ud_id" value="<?php echo "$id" ?>">
ID Number: 
</td><td align="center" colspan="1">
<?php echo "$id"?><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Rference Number: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_reference" value="<?php echo "$reference"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Title: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_title" value="<?php echo "$title"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Author: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_author" value="<?php echo "$author"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Last Name of First Author?: <br>
<small>(enter yes or no (lower case only))</small>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_lastauthor" value="<?php echo "$lastauthor"?>"><br>
</td></tr>

<tr align="center" valign="top">
<td align="center" colspan="1">
Published/Created: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_publish" value="<?php echo "$publish"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Description: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_description" value="<?php echo "$description"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Location:<br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_location" value="<?php echo "$location"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">

Subject:<br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_subject" value="<?php echo "$subject"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
On Loan from Evans:<br>
<small>(yes or no [lower case only])</small> 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_evans" value="<?php echo "$evans"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 1:<br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_comment1" value="<?php echo "$comment1"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 2: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_comment2" value="<?php echo "$comment2"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 3:<br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_comment3" value="<?php echo "$comment3"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Donated By: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_donator" value="<?php echo "$donator"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Date Donated: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_donatedate" value="<?php echo "$donatedate"?>"><br>
</td></tr>
<!--<tr align="center" valign="top">
<td align="center" colspan="2">
<h3>Status Information:<h3>
</td></tr>-->
<tr align="center" valign="top">
<td align="center" colspan="1">
Missing: <br>
<small>(reported/found, date)</small><br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_missing" value="<?php echo "$missing"?>"><br>
</td></tr>

</table><br><br>
<input type="Submit" value="Delete"></form> </center><br><br>
<?php
++$i;
?>

</body>

</html>
<div align="center">
<?php include("../include/footer-1.php"); ?>
</div>
<?php
}}
?>

