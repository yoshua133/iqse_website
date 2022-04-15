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
<div align="center"><font size="5" color="500000"><b>2010</b></font></div>
</td>
</tr>
<tr>
<td>
<div align="center"><font size="5" color="500000"><b>Honors and Awards</b></font></div>
</td>
</tr>
</table>

<table width="96%" cellpadding="5" border="0" cellspacing="1">
<tbody style="font-family:arial">
<tr bgcolor="#500000" valign="middle">
<td><div align="center">
<font color="#f5f5f5"><b>Honoree</b></font>
</div></td>
<td align="center"><font color="#f5f5f5"><b>Related Links</b></font></td>

</tr>
<tr bgcolor="#FFFFFF" valign="middle">
<div align="center">


<?php
$query=" SELECT * FROM IQSEhonors WHERE year='2010'";
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

?>



<td width="40%" align="center" nowrap>
<center><?php echo "<img src=\"people/images/".$himg1.".jpg\" height=\"160\" />";?> </center><br><br>
</td>
<td width="55%" align="center" nowrap>

<small><font size="5"><font color="#500000"><?php echo "<a href=\"images/slideshow/".$tlink1.".pdf\"> IQSE Banner News Page </a>";?></font></font></small><br>
<small><font size="5"><font color="#500000"><?php echo "<a href=\"$tlink2\"> $tlink3 </a>"; ?></font></font></small>
</td></tr>




<?php


++$i;
}

?>



<!--<i><?php echo "$emphasis"?><br></i></h3>-->



</table>
</div>

	
	

</body>

</html>
