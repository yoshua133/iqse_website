<?php 
session_start(); //Allows you to use sessions 
$user = "IQSE"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username4'] == $user AND $_POST['password4'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username4'] = $_POST['username4'];  
echo('<meta name="c_refresh" content="0; url=page.php" />');  
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

<html><head><title>Copy Event Form</title>
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

$query=" SELECT * FROM IQSEevent WHERE id='$id'";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$speakername=mysql_result($result,$i,"speakername");
$speakeraffil=mysql_result($result,$i,"speakeraffil");
$speakertitle=mysql_result($result,$i,"speakertitle");
$speakerabstract=mysql_result($result,$i,"speakerabstract");
$talkdate=mysql_result($result,$i,"talkdate");
$talktime=mysql_result($result,$i,"talktime");
$talkloc=mysql_result($result,$i,"talkloc");
$speakerhost=mysql_result($result,$i,"speakerhost");
$hostemail=mysql_result($result,$i,"hostemail");
$dbposter=mysql_result($result,$i,"dbposter");
$talktype=mysql_result($result,$i,"talktype");
$talkbuilding=mysql_result($result,$i,"talkbuilding");
$talkyear=mysql_result($result,$i,"talkyear");
$eventDate=mysql_result($result,$i,"eventDate");
$dborder=mysql_result($result,$i,"dborder");
$dbwaddress=mysql_result($result,$i,"dbwaddress");
$dbsponsor=mysql_result($result,$i,"dbsponsor");
$dbfood=mysql_result($result,$i,"dbfood");
$dbcomment1=mysql_result($result,$i,"dbcomment1");
$dbcomment2=mysql_result($result,$i,"dbcomment2");
$dbcomment3=mysql_result($result,$i,"dbcomment3");
$dbcomment4=mysql_result($result,$i,"dbcomment4");
$dbcomment5=mysql_result($result,$i,"dbcomment5");
$dbcomment6=mysql_result($result,$i,"dbcomment6");
?>

<center>

<h3>Event Update Form</h3>
<table width="500" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0">
<tr align="center" valign="top">
<td align="center" colspan="1">
<form action="registration_add_record.php" method="POST">
<input type="hidden" name="ud_id" value="<?php echo "$id" ?>">
Type of Talk: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_talktype" value="<?php echo "$talktype"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Speaker's Title: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_speakertitle" value="<?php echo "$speakertitle"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Speaker Name: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_speakername" value="<?php echo "$speakername"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Speaker's Affiliation: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_speakeraffil" value="<?php echo "$speakeraffil"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Speaker's Abstract: 
<br>
<small>(enter TBA if unknown)</small>
</td><td align="center" colspan="1">
<textarea name="c_speakerabstract" cols=80 rows=40 wrap=virtual><?php echo "$speakerabstract"?></textarea></td></tr>
</tr></td>
<tr align="center" valign="top">
<td align="center" colspan="1">
Talk Date (as is to appear on announcement): <br>
<small>(e.g., Wednesday, October 24, 2012)</small>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_talkdate" value="<?php echo "$talkdate"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Year talk is being given <br><small>(ordering variable [yyyy], e.g., 2012)</small>: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_talkyear" value="<?php echo "$talkyear"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Month Day talk is being given <br><small>(event list ordering variable [mmdd], e.g., October 2 = 1002)</small>: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_dborder" value="<?php echo "$dborder"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Date of Event <br><small>(calendar ordering variable [mm/dd/yyyy])</small>: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_eventDate" value="<?php echo "$eventDate"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Talk Time: <br>
<small>(e.g., 2:00 p.m.)</small> 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_talktime" value="<?php echo "$talktime"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Talk Location: <br>
<small>(4 digit building code plus room number, e.g., IQSE 578)</small> 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_talkloc" value="<?php echo "$talkloc"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Building in which talk is being given: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_talkbuilding" value="<?php echo "$talkbuilding"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Event Web Address: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_dbwaddress" value="<?php echo "$dbwaddress"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Sponsor: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_dbsponsor" value="<?php echo "$dbsponsor"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Refreshment Comment: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_dbfood" value="<?php echo "$dbfood"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Speaker's Host: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_speakerhost" value="<?php echo "$speakerhost"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Host's Email Address: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_hostemail" value="<?php echo "$hostemail"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Name of person entering information (Your Name):<br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_dbposter" value="<?php echo "$dbposter"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 1: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_dbcomment1" value="<?php echo "$dbcomment1"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 2: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_dbcomment2" value="<?php echo "$dbcomment2"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 3: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_dbcomment3" value="<?php echo "$dbcomment3"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 1: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_dbcomment4" value="<?php echo "$dbcomment4"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 2: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_dbcomment5" value="<?php echo "$dbcomment5"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 3: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="c_dbcomment6" value="<?php echo "$dbcomment6"?>"><br>
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

