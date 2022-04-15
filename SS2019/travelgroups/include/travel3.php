<?php

$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($link, DB_NAME);
?>

<hr>
<font size="5" color="500000"><b>Group 3</b></font>

<table width="96%" cellpadding="5" border="0" cellspacing="1">
<tbody style="font-family:arial">					 

<?php
$query=" SELECT * FROM SS2019travel WHERE dbgroup='3' ORDER BY name DESC";
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
<?php echo "<td width=\"30%\" valign=\"top\">". $name. "</td><td width=\"60%\">";
echo $email;?></div>
</td>
</tr>
<?php
++$i;
}
?>

</table>
