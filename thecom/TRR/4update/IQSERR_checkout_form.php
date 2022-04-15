<html><head><title>IQSE Reading Room Book Check-out System</title>
</head>
<body>
<br>
<center>	 &nbsp&nbsp <a href="../TownesReadingRoom.html" title="Main">Main</a>
			 &nbsp&nbsp <a href="../authorsearch/IQSERR_authorsearch_form.php" title="authorsearch">Author Search</a>
			 &nbsp&nbsp <a href="../titlesearch/IQSERR_titlesearch_form.php" title="titlesearch">Title Search</a>
			 &nbsp&nbsp <a href="IQSERR_checkout_form.php" title="checkout">Check Out/In</a>
			 &nbsp&nbsp <a href="../iqserr.html" title="add">Add New Book</a>
</center>		 
<br><br><br><br>
<center>
<br>
<form method="POST" action="IQSERR_change_form.php">
<pre>
&nbsp;&nbsp;<h2>Enter Reference Number of Book to be Updated:</h2> <br>
<input type="text" name="reference" size="30">
&nbsp;<input type="submit" value="Submit"><input type="reset">
</pre>
</form>
</center>

<?php
/* Change next two lines if using online */
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
echo "<tr><td><b>Reference No.:</b></td><td>Author:</td><td>Title:</td></tr>\n";
do {
printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n", $myrow["reference"], $myrow["author"], $myrow["title"]);
} while ($myrow = mysqli_fetch_array($result));
echo "</table>\n </center>";
} else {
echo "$ref: That record appears to be unavailable"; 
} 

?>

</body>

</html>

