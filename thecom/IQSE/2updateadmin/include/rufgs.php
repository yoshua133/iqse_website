<!DOCTYPE html>
<html lang="en">
  <head>
    
  </head>
  <body>

  <?php
/* Change next two lines if using online */
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die(mysqli_error());
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
$result = mysql_query( "SELECT * FROM IQSEpeople WHERE classification='gs' ORDER BY last ASC" )
or die("SELECT Error: ".mysqli_error());
$num_rows = mysqli_num_rows($result);
if ($myrow = mysqli_fetch_array($result)) {

echo "<center><br><font size=\"4\">Graduate Students</font><BR><br>";
echo "<table width=\"85%\" border=1>\n";
echo "<tr><td><b>Last Name, First Name:</b></td><td>Username:</td></tr>\n";
do {
printf("<tr><td>%s</td><td>%s</td></tr>\n", $myrow["last"].",&nbsp;". $myrow["first"], $myrow["uname"]);
} while ($myrow = mysqli_fetch_array($result));
echo "</table>\n </center>";
} else {echo "$ref: That record appears to be unavailable";
} 

 




mysql_close($link);
?>

  
  </body>
</html>