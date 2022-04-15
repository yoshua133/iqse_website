

<html>
<body>

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<table bgcolor="#000000">
<tr><td style="vertical-align: top; padding-left: 2px; width: 9%;" columnspan="2">
<a href="http://www.tamu.edu/" title="TexasA&amp;M University Home"><img src="../images/primaryMark.gif" width="135" height="45" align="top" alt="Texas A&amp;M University primary mark" title="TAMULogo" border="0" /></a>           
</td>
<td>
<center><a href="http://ctp.tamu.edu" title="Center Home"><img src="../images/CTPText.jpg" width="510" height="85" align="middle" alt="CTP Banner" title="CTP Home" border="0" /></a></center>
</td></tr>
</table>


<!--  -----------------------  Enter LEFT Content ---------------------- -->
<br>
<center>	 &nbsp&nbsp <a href="http://art.tamu.edu" title="Center Home" target="_blank">CTP Home</a>
			 &nbsp&nbsp <a href="../ART-1.php" title="Main">ART Main Module</a>
			 &nbsp&nbsp <a href="../../COM-1.php" title="Main">the COM</a>
			 &nbsp&nbsp	<a href="../logout.php">Logout</a> &nbsp;&nbsp<br><br>
</center>		 
<br>
<!-- ============================== Enter Center Content ============================  -->
<?php $id=$_POST['id'];
  
//registration_change_form.php
?>

<html><head><title>Update Event Form</title>
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
$dbcomment1=mysql_result($result,$i,"dbcomment1");
$dbcomment2=mysql_result($result,$i,"dbcomment2");
$dbcomment3=mysql_result($result,$i,"dbcomment3");
?>

<center>

<h3>Event Update Form</h3>
<table width="500" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0">
<tr align="center" valign="top">
<td align="center" colspan="1">
<form action="registration_change_record2.php" method="POST">
<input type="hidden" name="ud_id" value="<?php echo "$id" ?>">
Speaker Name: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_speakername" value="<?php echo "$speakername"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Speaker's Affiliation: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_speakeraffil" value="<?php echo "$speakeraffil"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Speaker's Title: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_speakertitle" value="<?php echo "$speakertitle"?>"><br>
</td></tr>

<tr align="center" valign="top">
<td align="center" colspan="1">
Speaker's Abstract: 
<br>
<small>(enter TBA if unknown)</small>
</td><td align="center" colspan="1">
<textarea name="ud_speakerabstract" cols=80 rows=40 wrap=virtual><?php echo "$speakerabstract"?></textarea></td></tr>
</tr></td>

<tr align="center" valign="top">
<td align="center" colspan="1">
Talk Date (as to appear on announcement): <br>
<small>(e.g., Wednesday, October 24, 2012)</small>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_talkdate" value="<?php echo "$talkdate"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Talk Time: <br>
<small>(e.g., 2:00 p.m.)</small>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_talktime" value="<?php echo "$talktime"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Talk Location: <br>
<small>(4 digit building code plus room number, e.g., IQSE 578)</small> 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_talkloc" value="<?php echo "$talkloc"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Speaker's Host: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_speakerhost" value="<?php echo "$speakerhost"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Host's Email Address: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_hostemail" value="<?php echo "$hostemail"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Name of person entering information (Your Name):<br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbposter" value="<?php echo "$dbposter"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Type of Talk: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_talktype" value="<?php echo "$talktype"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Building in which talk is being given: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_talkbuilding" value="<?php echo "$talkbuilding"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Date of Event <br><small>(calendar ordering variable [mm/dd/yyyy])</small>: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_eventDate" value="<?php echo "$eventDate"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Year talk is being given <br><small>(ordering variable [yyyy], e.g., 2012)</small>: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_talkyear" value="<?php echo "$talkyear"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Month Day talk is being given <br><small>(event list ordering variable [mmdd], e.g., October 2 = 1002)</small>: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dborder" value="<?php echo "$dborder"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 1: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbcomment1" value="<?php echo "$dbcomment1"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 2: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbcomment2" value="<?php echo "$dbcomment2"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 3: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbcomment3" value="<?php echo "$dbcomment3"?>"><br>
</td></tr>

</table><br><br>
<input type="Submit" value="Update"></form>
<?php
++$i;
}
?>

<br><br><br><br><br>
 <hr><center><br>
<p class="c2">Last update: November 1, 2012</p></center>

<!-- ============================== STOP Center Content Entry ============================  -->
<hr><center><br>
 	
	
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->
<table bgcolor=#332C2C>
<tr><td style="vertical-align: top; padding-left: 2px; width: 9%;" columnspan="2">
<center>

  		 <br>
         <a title="Texas A&amp;M University"
		 href="http://www.tamu.edu"
		 target="_blank" style="color: white">Texas A&amp;M University</a> 
<font color="#FFFFFF">-</font>
	      <a title="College of Science"
		 href="http://www.science.tamu.edu"
		 target="_blank" style="color: white">College of Science</a> <br/>

	      <a title="Accessibility"
		 href="http://itaccessibility.tamu.edu/"
		 target="_blank" style="color: white">Accessibility</a>
<font color="#FFFFFF">-</font>
	      <a title="Privacy &amp; Security"
		 href="../privacy/privacy.html" style="color: white">Privacy &amp; Security</a>
<font color="#FFFFFF">-</font>
	      <a title="Webmaster"
		 href="mailto:tctp@tamu.edu"
		 target="_blank" style="color: white">Webmaster</a><br/><br/>
	

		 
	<hr style="width: 50%"/>

   <FONT COLOR="#FFFFFF"> 
   Copyright &copy; 2011, Texas A&amp;M University, Agri-photonics Research and Teaching Program, All Rights Reserved.<br/>
College Station, TX 77843-4242 | (979) 458-7941 | Fax (979) 458-7939 <br><br/>
	</center></td></tr></table>

</body>
</html>

