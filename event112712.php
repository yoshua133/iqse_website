<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="created" content="Wed, 17 Nov 2010 21:05:45 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IQSE Event Announcement</title>

<LINK REL=StyleSheet HREF="person.css" TITLE="basic-1"/>
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" /> 

     
</head>


<body>
<div id="outer">
	<div id="left" class="divtest">
<br><br><br><br>
<!--  -----------------------  Enter LEFT Content ---------------------- -->

<br><br>
<?php include("include/leftmenu.php"); ?>
			
	</div>
<!--  -----------------------  Begin Center Content ---------------------- -->
	<div id="centrecontent">

<!--&nbsp&nbsp Quick Links: &nbsp&nbsp 		   		
		   		<a href="people.html#faculty">Faculty</a>&nbsp&nbsp 
				<a href="people.html#staff">Staff</a>&nbsp&nbsp
				<a href="people.html#researchers">Researchers</a>&nbsp&nbsp
				<a href="people.html#gs">Graduate Students</a>&nbsp&nbsp 
				<a href="people.html#visitors">Visitors</a>&nbsp&nbsp	<br><br/> -->
		
<div style=" text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table width="98%" border="0" cellpadding="2" cellspacing="2" style="border-width: 0px; background-color: #ffffff;">
<tr valign="top"> 
</tr></table>

<!-- ============================== Enter Center Content ============================  -->
<table width="96%" cellpadding="5" border="0" cellspacing="1">
<tr valign="top">
					 
<?php 
$id = $_GET['id'];
?> 
<?php

$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
?>

<?php
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
$hostemail=mysql_result($result,$i,"hostemail");
$speakerhost=mysql_result($result,$i,"speakerhost");
$dbposter=mysql_result($result,$i,"dbposter");
$talktype=mysql_result($result,$i,"talktype");
$dbcomment1=mysql_result($result,$i,"dbcomment1");
$dbcomment2=mysql_result($result,$i,"dbcomment2");
?>

<?php
++$i;
}

?>

<td align="center"><br />
<font size="7"><font color="#500000"><?php echo "<b>$talktype</b>" ?></font></font><br>
<br><br>
<font size="6"><font color="#500000"><?php echo "\"<b>$speakertitle</b>\""?></font></font><br>
<br><br>
<font size="6"><font color="#500000"><?php echo "<b>Dr. $speakername</b>"?></font></font><br>
<font size="4"><font color="#500000"><?php echo "<i>$speakeraffil</i>"?></font></font><br><br>

<font size="5"><font color="#500000"><b>ABSTRACT</b></font></font>&nbsp;<br><br>
</td>
</tr>
<tr><td align="left">
<?php echo "<font size=\"4\"><font color=\"#500000\"><b>$speakerabstract</b></font></font>"?><br>
<br><br>
</td>
</tr>
<tr valign="top">
<td align="center">
<font size="6"><font color="#500000"><?php echo "<b>$talkdate</b>"?></font></font><br>
<font size="6"><font color="#500000"><?php echo "<b>$talkloc, $talktime</b>"?></font></font><br>
<font size="6"><font color="#500000"><?php echo "<b>$talkbuilding</b>"?></font></font><br><br> <br><br>
<font size="3"><font color="#500000"><?php echo "<b>(Refreshments to be served 15 minutes prior to start time)</b>"?></font></font><br>
<br><br><br><br>
<font size="3"><font color="#500000">Host: <a href="mailto:<?php echo "$hostemail" ?>"><?php echo "Dr. $speakerhost"?> </a></font></font>
</td>
</tr></table>
</div>

	
		<br><br>
		
		

<!-- ============================== STOP Center Content Entry ============================  -->

 	</div>
	<div id="clearfooter"></div>
	<!-- to clear footer -->
</div>
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<div id="footer">
  
  		 <br>
         <a title="Texas A&amp;M University"
		 href="http://www.tamu.edu"
		 target="_blank" style="color: white">Texas A&amp;M University</a> 
-
	      <a title="College of Science"
		 href="http://www.science.tamu.edu"
		 target="_blank" style="color: white">College of Science</a> <br/>

	      <a title="Accessibility"
		 href="http://itaccessibility.tamu.edu/"
		 target="_blank" style="color: white">Accessibility</a>
-
	      <a title="Privacy &amp; Security"
		 href="../privacy/privacy.html" style="color: white">Privacy &amp; Security</a>
-
	      <a title="Webmaster"
		 href="mailto:tctp@tamu.edu"
		 target="_blank" style="color: white">Webmaster</a><br/><br/>
	
	
		 
	<hr style="width: 50%"/>

   <FONT COLOR="#FFFFFF"> 
   Copyright &copy; 2011, Texas A&amp;M University, The Agri-photonics Research and Teaching Program, All Rights Reserved.<br/>
College Station, TX 77843-4242  |  (979) 458-7942  |  Fax (979) 458-7931 <br><br/>
	
</div>

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<div id="header">
<table>
<tr><td style="vertical-align: top; padding-left: 2px; width: 9%;" columnspan="2">
<a href="http://www.tamu.edu/" title="TexasA&amp;M University Home"><img src="images/primaryMark.gif" width="130" height="42" align="top" alt="Texas A&amp;M University primary mark" title="TAMULogo" border="0" /></a>           
</td>
<td>
<center><a href="http://iqse.tamu.edu" title="IQSE Home"><img src="images/iqseText.jpg" width="500" height="82" align="middle" alt="IQSE Banner" title="IQSE Home" border="0" /></a></center>
</td></tr>
</table>
 
</div>

</body>

</html>

