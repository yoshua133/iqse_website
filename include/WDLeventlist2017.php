
<html>
<head>
  
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>


<table width="98%" cellpadding="5" border="0">

<tbody style="font-family:arial">
<tr bgcolor="500000" valign="middle">
<tr><td>
<div align="center"><font size="5" color="500000"><b>2017 Distinguished Lecturers</b></font></div>
</td>
</tr>
</table>
<?php

$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
?>


<table width="96%" cellpadding="5" border="0" cellspacing="0">
<tbody style="font-family:arial">
<tr bgcolor="#500000" valign="middle">
<td align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Distinguished Lecturer</b></font></td>
<td align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Lecture Date and Time</b></font></td>
<td align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Lecture Location</b></font></td>
<td align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Event Website</b></font></td>
</tr>
<tr bgcolor="#FFFFFF" valign="top">				 

<?php
$query=" SELECT * FROM IQSEevent WHERE talkyear='2017' AND talktype LIKE '%Chancellor%' ORDER BY ABS(dborder) ASC";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$talkdate=mysql_result($result,$i,"talkdate");
$talktype=mysql_result($result,$i,"talktype");
$speakername=mysql_result($result,$i,"speakername");
$id=mysql_result($result,$i,"id");
$talkloc=mysql_result($result,$i,"talkloc");
$talkbuilding=mysql_result($result,$i,"talkbuilding");
$talktime=mysql_result($result,$i,"talktime");
$dbwaddress=mysql_result($result,$i,"dbwaddress");
$speakerhost=mysql_result($result,$i,"speakerhost");
$speakername=mysql_result($result,$i,"speakername");
$speakeraffil=mysql_result($result,$i,"speakeraffil");
$hostemail=mysql_result($result,$i,"hostemail");
?>

<center>


</td>
<td width="22%" align="center" nowrap>
<small><?php echo "<b>$speakername </b><br> $speakeraffil"?></a></small>
</td>
<td width="22%" align="center" nowrap>
<small><?php echo "<b>$talkdate</b>"?></small><br>
<small><?php echo "$talktime"?></small>
</td>
<td width="22%" align="center" nowrap>
<small><?php echo "<b>$talkbuilding</b>"?></small><br>
<small><?php echo "$talkloc"?></small>
</td>
<td width="22%" align="center" nowrap>
<small><?php echo "<a href=\"WDLS/2017/WDLS.php?id=".$id."\"> Event Website </a>";?><br>
</td>
</tr>
<?php
++$i;
}

?>
</table>
<br><br>

 </body>
</html>
