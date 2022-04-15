
<html>
<head>
  
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>


<table width="98%" cellpadding="5" border="0">
<tr bgcolor="500000" valign="middle">
<tr><td>
<div align="center"><font size="5" color="500000"><b>2010</b></font></div>
</td></tr>
<tr>
<td>
<div align="center"><font size="5" color="500000"><b>IQSE EVENT LIST</b></font></div>
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
<tr bgcolor="#500000" valign="middle">
<td align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Event Date</b></font></td>
<td align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Event Type</b></font></td>
<td align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Announcement</b></font></td>
</tr>
<tr bgcolor="#FFFFFFF" valign="top">				 

<?php
$query=" SELECT * FROM IQSEevent WHERE talkyear='2010' ORDER BY dbcomment1 ASC";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$talkdate=mysql_result($result,$i,"talkdate");
$talktype=mysql_result($result,$i,"talktype");
$speakername=mysql_result($result,$i,"speakername");
$id=mysql_result($result,$i,"id");

?>

<center>


</td>
<td width="25%" align="center" nowrap>
<small><?php echo "$talkdate"?></a></small>
</td>
<td width="25%" align="center" nowrap>
<small><?php echo "$talktype"?></small>
</td>
<td width="25%" align="center" nowrap>
<small><?php echo "<a href=\"event.php?id=".$id."\"> Announcement </a>";?><br>
<?php echo "Dr. $speakername"?></small>
</td></tr>

<?php
++$i;
}

?>
</table>
<br><br>

 </body>
</html>
