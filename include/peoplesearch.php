
<center>
<form method="POST" action="include/peoplesearch2.php">
<pre>
&nbsp;&nbsp;<h3><font><font face="Arial">Enter Name (First, Last, partial):</font></font></h3> 
<input type="text" name="person" size="30">
&nbsp;<input type="submit" value="Submit"><input type="reset">
</pre>
</form>
</center>

<?php
/* Change next two lines if using online 
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die(mysqli_error());
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
$result = mysql_query( "SELECT * FROM CTPpeople ORDER BY author ASC" )
or die("SELECT Error: ".mysqli_error());
$num_rows = mysqli_num_rows($result);
if ($myrow = mysqli_fetch_array($result)) {

echo "<center><br>A Quick View<BR><br>";
echo "<table border=1>\n";
echo "<tr><td><b>First Name:</b></td><td>Last Name:</td><td>Email:</td><td>Office Phone:</td><td>Lab Phone:</td></tr>\n";
do {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n", $myrow["first"], $myrow["last"], $myrow["email"], $myrow["ophone"], $myrow["lphone"]);
} while ($myrow = mysqli_fetch_array($result));
echo "</table>\n </center>";
} else {
echo "$ref: That record appears to be unavailable"; 
} */

?>

</body>

</html>

