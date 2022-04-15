<html><head><title>IQSE Reading Room Book Check-out System</title>
</head>
<body>

<font size="+1"><font face="Arial">Enter Author's Name (first, last, or partial)</font></font>
<br>
<form method="POST" action="include/TRR/IQSERR_authorsearch2_form.php">
<pre>

<input type="text" name="author" size="30">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit"><input type="reset">
</pre>
</form>


<?php
// Change next two lines if using online 
#include "../../config.php";
// $link = mysqli_connect($dbhost, $dbuser, $dbpass);
// if (! $link)
// die("Couldn't connect to MySQL");

// mysqli_select_db( $link, $db )
// or die("Couldn't open $db: ".mysqli_error());


// $result = mysqli_query( $link, "SELECT * FROM IQSERR ORDER BY author ASC" )
// or die("SELECT Error: ".mysqli_error());
// $num_rows = mysqli_num_rows($result);
// if ($myrow = mysqli_fetch_array($result)) {

// echo "<center><br>A Quick View<BR><br>";
// echo "<table border=1>\n";
// echo "<tr><td><b>Author:</b></td><td>Reference No.:</td><td>Title:</td></tr>\n";
// do {
// printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n", $myrow["author"], $myrow["reference"], $myrow["title"]);
// } while ($myrow = mysqli_fetch_array($result));
// echo "</table>\n </center>";
// } else {
// echo "$ref: That record appears to be unavailable"; 
// } 

?>

</body>

</html>

