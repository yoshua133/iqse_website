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
<?php $reminder_id=$_POST['reminder_id'];
  
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

$query=" SELECT * FROM IQSEreminders WHERE reminder_id='$reminder_id'";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$reminder_date=mysql_result($result,$i,"reminder_date");
$reminder_name=mysql_result($result,$i,"reminder_name");
$reminder_desc=mysql_result($result,$i,"reminder_desc");
$dbemail=mysql_result($result,$i,"dbemail");
?>

<center>

<h3>Reminder Update Form</h3>
<table width="500" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0">
<tr align="center" valign="top">
<td align="center" colspan="1">
<form action="registration_change_record.php" method="POST">
<input type="hidden" name="ud_reminder_id" value="<?php echo "$reminder_id" ?>">
Trigger Date: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_reminder_date" value="<?php echo "$reminder_date"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Reminder Name: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_reminder_name" value="<?php echo "$reminder_name"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Reminder Description: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_reminder_desc" value="<?php echo "$reminder_desc"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Notification Email: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbemail" value="<?php echo "$dbemail"?>"><br>
</td></tr>

</table><br><br>
<input type="Submit" value="Update"></form>
<?php
++$i;
}
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

