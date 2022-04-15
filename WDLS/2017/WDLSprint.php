<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="created" content="Wed, 17 Nov 2010 21:05:45 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SWDLS</title>

  

<style>
div2 {
    float: right;
    width: 300px;
    margin: 0 0 15px 15px;
    padding: 5px;
    border: 0px solid black;
    text-align: center;
}
</style> 

</head>


<body>

<table width="96%" cellpadding="5" border="0" cellspacing="1">
<tbody style="font-family:arial">
<tr valign="top" colspan="2">

<td colspan="2">
<center><h1><font color="#500000">The Chancellor Sharp Distinguished Lecture Series</font></h1>
</center>

</td>
</tr>
</table>

<br><br>

<?php 
$id = $_GET['id'];
?> 
<div align="center">
<table cellpadding="5" border="0" cellspacing="1">
<tbody style="font-family:arial">
<tr valign="top">
					 

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
$talkbuilding=mysql_result($result,$i,"talkbuilding");
$dbsponsor=mysql_result($result,$i,"dbsponsor");
$dbfood=mysql_result($result,$i,"dbfood");
$dbcomment1=mysql_result($result,$i,"dbcomment1");
$dbcomment2=mysql_result($result,$i,"dbcomment2");
$dbcomment3=mysql_result($result,$i,"dbcomment3");
$dbcomment4=mysql_result($result,$i,"dbcomment4");
$dbcomment5=mysql_result($result,$i,"dbcomment5");
?>

<?php
++$i;
}

?>

<td style="width:70%" align="center">
<font size="6"><font color="#500000"><?php echo "\"<b>$speakertitle</b>\""?></font></font><br>
<br><br>

<font size="5"><font color="#500000"><?php echo "<b>$speakername</b>"?></font></font><br>
<font size="3"><font color="#500000"><?php echo "<i>$speakeraffil</i>"?></font></font><br><br>
<font size="4"><font color="#500000"><?php echo "<b>$talktime, $talkdate</b>"?></font></font><br>
<font size="4"><font color="#500000"><?php echo "<b>$talkloc</b>"?></font></font><br>
<font size="4"><font color="#500000"><?php echo "<b>$talkbuilding</b>"?></font></font><br>
<?phpif($dbcomment3=='none'){echo "";}else{echo "<a href=\"".$dbcomment3."\">$talkbuilding Event Information</a>";}?>
<br><br>
</td>
<td style="width:25%">
<div2>
<?php echo "<br><img src=\"images/".$dbcomment5.".jpg\"  width=\"200\" alt=\"\" title=\"\">";?> <br>
<b><font color="#500000"><?php echo "<b>$speakername</b>"?><font size="+1">
</font></font></b><br></div2>
</td>
</tr>
<tr><td align="left" colspan="2">
<div align="center"><font size="4"><font color="#500000"><b>ABSTRACT</b></font></font>&nbsp;<br><br></div>
<?php echo "<font size=\"3\"><font color=\"#500000\">$speakerabstract</font></font><hr>"?>
</td>
</tr>
<tr valign="top">
<td colspan="2" style="vertical-align: top; padding-left: 10px; width: 90%;">
<?php if($dbcomment4=='none'){echo "";}else{ ?>


<font color="#500000">
<div align="center"><h3>RECEPTION</h3></div>

A reception will be held following the Distinguished Lecture. Please RSVP in order ensure enough goodies will 
be available. </font>

<br><br>
<?php echo "<a href=\"dinnerRSVP2.php?id=".$id."\">Reception RSVP Attendance Only</a>";?><br>
<?php echo "<a href=\"mailto:iqse@tamu.edu?subject=WDLS Regrets-".$speakername."\">Reception RSVP Regrets Only</a>";?><br>
<?php echo "<a href=\"RSVPList2.php?id=".$id."\">Current Dinner RSVP Attendance List</a>";?>
<br><br>

</td>
</tr>
</table> 
<tr>
<br><td style="vertical-align: top; padding-left: 10px; width: 90%;">

<?php}?>
 
<table style="margin-left: auto; margin-right: auto; width: 90%;">
<tbody style="font-family:arial">
<tr valign="top">
<td style="vertical-align: top; padding-left: 10px; width: 90%;">
<br><br>
<center> <b> Contact <a href="mailto:iqse@tamu.edu?subject=2016 System-Wide Distinguished Lecture Series">iqse@tamu.edu</a> for more information </b></center>
</td></tr>

</table> 




</body>

</html>