<?php

$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
?>

<table width="98%" cellpadding="5" border="0">
<tbody style="font-family:arial">
<tr valign="middle">
<tr>
<td>
<hr>
<font size="5" color="500000"><b>Group 10</b></font>
</td>
</tr>
</table>
<table width="96%" cellpadding="5" border="0" cellspacing="1">
<tbody style="font-family:arial">					 

<?php
$query=" SELECT * FROM PW2017travel WHERE dbgroup='10' ORDER BY name DESC";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$name=mysql_result($result,$i,"name");
$dbgroup=mysql_result($result,$i,"dbgroup");
$dbstatus=mysql_result($result,$i,"dbstatus");
$email=mysql_result($result,$i,"email");
$invitedby=mysql_result($result,$i,"invitedby");
?>



<tr valign="top" align="left">
<div align="left">
<?php echo "<td valign=\"top\">". $name. "</td><td>";
echo $email;?></div>
</td>
</tr>
<?php
++$i;
}
?>

</table>
