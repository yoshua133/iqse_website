<html>
<body>


<?php
/* Change next two lines if using online */
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die(mysqli_error());
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
$result = mysql_query( "SELECT * FROM IQSEpubs ORDER BY ABS(pubdoi) ASC" )
or die("SELECT Error: ".mysqli_error());
$num_rows = mysqli_num_rows($result);
if ($myrow = mysqli_fetch_array($result)) {

echo "<table border=1>\n";
echo "<tr><td><b>DOI</b></td><td><b>Publication</b></td><td><b>ID</b></td></tr>\n";
do {
printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n", $myrow["pubdoi"], $myrow["dbpub"], $myrow["id"]);
} while ($myrow = mysqli_fetch_array($result));
echo "</table>\n </center>";
} else {
echo "$ref: That record appears to be unavailable"; 
} 

mysql_close($link);
?>
<br><br>
 
</body>

</html>

