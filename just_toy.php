<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";

include "config.php";
$link = mysqli_connect($dbhost, $dbuser, $dbpass);
if (! $link)
die("Couldn't connect to MySQL");
echo "sucess";
mysqli_select_db( $link, $db )
or die("Couldn't open $db: ".mysqli_error());

echo "open";

$result = mysqli_query( $link, "SELECT * FROM IQSERR ORDER BY author ASC" )
or die("SELECT Error: ".mysqli_error());
echo "query";

$num_rows = mysqli_num_rows($result);
echo $num_rows;


if ($myrow = mysqli_fetch_array($result)) {

    echo "<center><br>A Quick View<BR><br>";
    echo "<table border=1>\n";
    echo "<tr><td><b>Author:</b></td><td>Reference No.:</td><td>Title:</td></tr>\n";
    do {
    printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n", $myrow["author"], $myrow["reference"], $myrow["title"]);
    } while ($myrow = mysqli_fetch_array($result));
    echo "</table>\n </center>";
    } 
else {
    echo "$ref: That record appears to be unavailable"; 
    } 
?>

</body>
</html>