
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
<div align="center"><font size="5" color="500000"><b>2012</b></font></div>
</td></tr>
<tr>
<td>
<div align="center"><font size="5" color="500000"><b>IQSE EVENT LIST</b></font></div>
</td>
</tr>
</table>
<?php

#include "config.php";
$link = mysqli_connect($dbhost, $dbuser, $dbpass);
if (! $link)
die("Couldn't connect to MySQL");

mysqli_select_db( $link, $db )
or die("Couldn't open $db: ".mysqli_error());
?>


<table width="96%" cellpadding="5" border="0" cellspacing="0">
<tbody style="font-family:arial">
<tr bgcolor="#500000" valign="middle">
<td align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Event Type</b></font></td>
<td align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Speaker Name</b></font></td>
<td align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Affiliation</b></font></td>
<td align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Title</b></font></td>
<td align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Event Date</b></font></td>
</tr>
<tr bgcolor="#FFFFFF" valign="top">				 

<?php
$query=" SELECT * FROM IQSEevent WHERE talkyear='2012' AND dbcomment6 LIKE '%no%' ORDER BY ABS(dborder) ASC";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$talkdate=mysql_result($result,$i,"talkdate");
$talktype=mysql_result($result,$i,"talktype");
$speakername=mysql_result($result,$i,"speakername");
$id=mysql_result($result,$i,"id");
$dbwaddress=mysql_result($result,$i,"dbwaddress");
$speakertitle=mysql_result($result,$i,"speakertitle");
$speakeraffil=mysql_result($result,$i,"speakeraffil");

?>

<center>


</td>

<td width="10%" align="center">
<small><?php echo "$talktype"?></small>
</td>
<td width="25%" align="center">
<small><?php echo "$speakername"?></small>
</td>
<td width="25%" align="center">
<small><?php echo "$speakeraffil"?></small>
</td>
<td width="25%" align="center">
<small><?php echo "\"$speakertitle\""?></small>
</td>
<td width="10%" align="center">
<small><?php echo "$talkdate"?></a></small>
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
