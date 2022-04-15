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
<div align="center"><font size="5" color="500000"><b>IQSE News</b></font></div>
</td>
</tr>
<tr>
<td>
<div align="center"><font size="5" color="500000"><b>2016</b></font></div>
</td>
</tr>
</table>
<hr>
<table width="96%" cellpadding="5" border="0" cellspacing="1">
<tbody style="font-family:arial">					 

<?php
$query=" SELECT * FROM IQSEhonors WHERE year='2016' and dbcomment1='yes' ORDER BY ABS(himg3) DESC";
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
<div align="left">
<?php echo "<td valign=\"top\"><font color=\"#500000\"><b>&#9733;</b></font></td><td>";
echo $dbcomment2;?>
<?php if($tlink1=='none'&& $tlink2=='none' && $tlink3=='none'){;}else{echo "&nbsp;For more information click:&nbsp;";}
if($tlink1=='none'){;}else{echo "<a href=\"images/slideshow/".$tlink1.".pdf\"> IQSE Banner News Page </a>,&nbsp;";}
if($tlink2=='none'){;}else{echo "<a href=\"".$tlink2."\">Additional Information</a>, &nbsp;";}
if($tlink3=='none'){;}else{echo "<a href=\"".$tlink3."\">Additional Information</a><br>";} ?></div>
</td>
</tr>
<?php
++$i;
}
?>
</table>


</body>
</html>
 