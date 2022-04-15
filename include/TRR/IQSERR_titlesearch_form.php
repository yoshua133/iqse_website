<html><head><title>IQSE Reading Room Title Search</title>
</head>
<body>
<br>
<font face="Arial"><font size="+1">Enter Title (or Word in the Title)</font></font>
<br>
<form method="POST" action="include/TRR/IQSERR_titlesearch2_form.php">
<pre>

<input type="text" name="title" size="30">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit"><input type="reset">
</pre>
</form>


<?php
/* Change next two lines if using online 
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die(mysqli_error());
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
$result = mysql_query( "SELECT * FROM IQSERR ORDER BY author ASC" )
or die("SELECT Error: ".mysqli_error());
$num_rows = mysqli_num_rows($result);
if ($myrow = mysqli_fetch_array($result)) {

echo "<center><br>A Quick View<BR><br>";
echo "<table border=1>\n";
echo "<tr><td><b>Author:</b></td><td>Reference No.:</td><td>Title:</td></tr>\n";
do {
printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n", $myrow["author"], $myrow["reference"], $myrow["title"]);
} while ($myrow = mysqli_fetch_array($result));
echo "</table>\n </center>";
} else {
echo "$ref: That record appears to be unavailable"; 
} */

?>

</body>

</html>

