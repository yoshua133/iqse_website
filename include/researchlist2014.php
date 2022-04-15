<!DOCTYPE html>
<html lang="en">
  <head>

</head>


<body>



<?php

#include "config.php";
$link = mysqli_connect($dbhost, $dbuser, $dbpass);
if (! $link)
die("Couldn't connect to MySQL");

mysqli_select_db( $link, $db )
or die("Couldn't open $db: ".mysqli_error());
?>

<table width="98%" cellpadding="5" border="0">
<tbody style="font-family:arial">
<tr valign="middle">
<tr>
<td>
<div align="center"><font size="5" color="500000"><b>Honors and Awards</b></font></div>
</td>
</tr>
<tr>
<td>
<div align="center"><font size="5" color="500000"><b>2014</b></font></div>
</td>
</tr>
</table>

<table width="96%" cellpadding="5" border="0" cellspacing="1">
<tbody style="font-family:arial">
<tr bgcolor="#500000" valign="middle">
<td><div align="center">
<font face="Arial,Impact"  color="#f5f5f5"><b>Honoree</b></font>
</div></td>
<td><div align="center">
<font face="Arial,Impact"  color="#f5f5f5"><b>Description</b></font>
</div></td>
</tr>
					 

<?php
$query=" SELECT * FROM IQSEhonors WHERE year='2014' AND dbcomment1!='yes' ORDER BY ABS(himg3) DESC";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$himg1=mysql_result($result,$i,"himg1");
$himg2=mysql_result($result,$i,"himg2");
$himg3=mysql_result($result,$i,"himg3");
$tlink1=mysql_result($result,$i,"tlink1");
$tlink2=mysql_result($result,$i,"tlink2");
$tlink3=mysql_result($result,$i,"tlink3");
$ppldb=mysql_result($result,$i,"ppldb");
$year=mysql_result($result,$i,"year");
$awardee1=mysql_result($result,$i,"awardee1");
$awardee2=mysql_result($result,$i,"awardee2");
$awardname=mysql_result($result,$i,"awardname");
$awardeename1=mysql_result($result,$i,"awardeename1");
$awardeename2=mysql_result($result,$i,"awardeename2");
$datereceived=mysql_result($result,$i,"datereceived");
$placereceived=mysql_result($result,$i,"placereceived");
$dbcomment1=mysql_result($result,$i,"dbcomment1");
$dbcomment2=mysql_result($result,$i,"dbcomment2");
$dbcomment3=mysql_result($result,$i,"dbcomment3");
?>
<center>


<tr valign="top">
<td width="40%" align="center"  nowrap>
<div align="center"><?php if($awardee2='none'){echo "<img src=\"people/images/".$awardee1.".jpg\" height=\"200\" />";}else{echo "<img src=\"people/images/".$awardee1.".jpg\" height=\"200\" />&nbsp;&nbsp;<img src=\"people/images/".$awardee2.".jpg\" height=\"200\" />"; }?>
<?php if($himg1='none'){;}else{echo "<img src=\"people/images/".$himg1.".jpg\" height=\"200\" />";}?> </div><br>
</td>
<td width="55%" valign="top">
<font face="Arial"><div align="left"><?php if($awardee2='none'){echo "<b>".$awardeename1."</b>&nbsp; receives &nbsp;<b>".$awardname."</b>&nbsp; on &nbsp;".$datereceived."&nbsp; at &nbsp;".$placereceived."";}else{echo $awardeename1."&nbsp; and &nbsp; ".$awardeename2."&nbsp;  receives &nbsp; ".$awardname."&nbsp; on &nbsp; ".$datereceived.""; }
echo "<br><br>For more information click: <br>";
?>
<?php echo "<a href=\"images/slideshow/".$tlink1.".pdf\"> IQSE Banner News Page </a><br>";
if($tlink2=='none'){;}else{echo "<a href=\"".$tlink2."\">Additional Information</a><br>";}
if($tlink3=='none'){;}else{echo "<a href=\"".$tlink3."\">Additional Information</a><br>";} ?></div>
</font></td>
</tr>
<?php
++$i;
}
?>
</table>


</body>
</html>
 