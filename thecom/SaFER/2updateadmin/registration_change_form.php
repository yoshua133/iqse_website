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

<html>
<body>

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<?php include("../../include/headerSaFER-1.php"); ?>
<?phpinclude("../include/topmenu.php"); ?>
<br><br>

<!--  -----------------------  Enter LEFT Content ---------------------- -->

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

$query=" SELECT * FROM SaFERpeople WHERE uname='$uname'";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$first=mysql_result($result,$i,"first");
$last=mysql_result($result,$i,"last");
$email=mysql_result($result,$i,"email");
$oloc=mysql_result($result,$i,"oloc");
$ophone=mysql_result($result,$i,"ophone");
$lloc=mysql_result($result,$i,"lloc");
$lphone=mysql_result($result,$i,"lphone");
$fphone=mysql_result($result,$i,"fphone");
$title=mysql_result($result,$i,"title");
$title2=mysql_result($result,$i,"title2");
$title3=mysql_result($result,$i,"title3");
$dept=mysql_result($result,$i,"dept");
$dept2=mysql_result($result,$i,"dept2");
$dept3=mysql_result($result,$i,"dept3");
$classification=mysql_result($result,$i,"classification");
$dbgroupmbr=mysql_result($result,$i,"dbgroupmbr");
$dbstatus=mysql_result($result,$i,"dbstatus");
$dbdatechange=mysql_result($result,$i,"dbdatechange");
$dbdateadd=mysql_result($result,$i,"dbdateadd");
$dbdateterm=mysql_result($result,$i,"dbdateterm");
$dbFYadd=mysql_result($result,$i,"dbFYadd");
$dbFYterm=mysql_result($result,$i,"dbFYterm");
$dbwaddress=mysql_result($result,$i,"dbwaddress");
$dbdescription=mysql_result($result,$i,"dbdescription");
$dbworkgroup=mysql_result($result,$i,"dbworkgroup");
$dbcomment1=mysql_result($result,$i,"dbcomment1");
$dbcomment2=mysql_result($result,$i,"dbcomment2");
$dbcomment3=mysql_result($result,$i,"dbcomment3");
?>

<center>

<h3><font face="Arial">Profile Update Form</font></h3>
<table width="500" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0"> <tbody style="font-family:arial">
<tr align="center" valign="top">
<td align="center" colspan="1">
<form action="registration_change_record.php" method="POST">
<input type="hidden" name="ud_uname" value="<?php echo "$uname" ?>">
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
Email: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_email" value="<?php echo "$email"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Office Location: <br>
<small>(4 digit building code plus room number, e.g., IQSE 562)</small> 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_oloc" value="<?php echo "$oloc"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Office Phone:
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_ophone" value="<?php echo "$ophone"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Lab Location: <br> 
<small>(4 digit building code plus room number, e.g., IQSE 562)</small> 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_lloc" value="<?php echo "$lloc"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Lab Phone: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_lphone" value="<?php echo "$lphone"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Fax Number:<br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_fphone" value="<?php echo "$fphone"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Title 1: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_title" value="<?php echo "$title"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Title 2: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_title2" value="<?php echo "$title2"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Title 3: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_title3" value="<?php echo "$title3"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Department 1: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dept" value="<?php echo "$dept"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Department 2: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dept2" value="<?php echo "$dept2"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Department 3: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dept3" value="<?php echo "$dept3"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Classification: <br>
<small>(ug, gs, researcher, staff, faculty, visitor only)</small>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_classification" value="<?php echo "$classification"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Group ID:<br>
<small>(e.g., The Scully Group id is mscully)</small> 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbgroupmbr" value="<?php echo "$dbgroupmbr"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Status: <br>
<small>(active or inactive only)</small>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbstatus" value="<?php echo "$dbstatus"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Date Updated: <br>
<small>(e.g., December 28, 2011)</small>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbdatechange" value="<?php echo "$dbdatechange"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Date Added: <br>
<small>(enter year month day, e.g., Oct 6, 2011 would be 111006 )</small>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbdateadd" value="<?php echo "$dbdateadd"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Date Terminated: <br>
<small>(enter year month day, e.g., Oct 6, 2011 would be 111006 )</small>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbdateterm" value="<?php echo "$dbdateterm"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Semester Added: <br>
<small>(e.g., 2011Fall, 2011Spring, 2011Summer)</small>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbFYadd" value="<?php echo "$dbFYadd"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Semester Terminated: <br>
<small>(e.g., 2011Fall, 2011Spring, 2011Summer)</small>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbFYterm" value="<?php echo "$dbFYterm"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Personal Web Address:
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbwaddress" value="<?php echo "$dbwaddress"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 1: CV<br>
<small>(if none, enter none)</small> 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbcomment1" value="<?php echo "$dbcomment1"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 2: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbcomment2" value="<?php echo "$dbcomment2"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 3: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbcomment3" value="<?php echo "$dbcomment3"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Work Group:</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbworkgroup" value="<?php echo "$dbworkgroup"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Description: 
<br>
<small>(enter UK if unknown)</small>
</td><td align="center" colspan="1">
<textarea name="ud_dbdescription" cols=80 rows=25 wrap=virtual><?php echo "$dbdescription"?></textarea></td></tr>
</tr></td>
</table><br><br>
<input type="Submit" value="Update"></form>
<?php
++$i;
}
?>

<br><br><br><br><br>
 <hr><center><br>
<p class="c2"><font face="Arial">Last update: June 16, 2014</font></p></center>

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

