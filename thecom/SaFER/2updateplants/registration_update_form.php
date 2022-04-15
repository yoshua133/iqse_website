<?php 
session_start(); //Allows you to use sessions 
$user = "SaFER"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username7'] == $user AND $_POST['password7'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username7'] = $_POST['username7'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/SaFER/SaFER.php">Login?</a>'); 
  } 
else 
    { 
?> 
<!--  -----------------------  Enter HEADER Content ---------------------- -->

<?php include("../../include/headerSaFER-1.php"); ?>
<?phpinclude("../include/topmenu.php"); ?>
<br><br>

<!--  -----------------------  Enter LEFT Content ---------------------- -->


<br>
<!-- ============================== Enter Center Content ============================  -->
<!--<?php include("include/topmenu.php"); ?>-->

<?php
//registration_update_form.php
?>
<html><head><title><font face="Arial">Bird Update Form</font></title>
</head>
<body>

<center>
<br>
<form method="POST" action="registration_change_form.php">
<pre>
&nbsp;&nbsp;<font face="Arial">Enter DBNAME to Edit:</font> <br>
<input type="text" name="dbname" size="30">
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
$result = mysql_query( "SELECT * FROM SaFERplants ORDER BY commonname ASC" )
or die("SELECT Error: ".mysqli_error());
$num_rows = mysqli_num_rows($result);
if ($myrow = mysqli_fetch_array($result)) {

echo "<center><br>A Quick View<BR><br>";
echo "<table border=1><tbody style=\"font-family:arial\">\n";
echo "<tr><td><b>Common Name:</b></td><td>Scientific Name:</td><td>DBNAME:</td></tr>\n";
do {
printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n", $myrow["commonname"], $myrow["sciname"], $myrow["dbname"]);
} while ($myrow = mysqli_fetch_array($result));
echo "</table>\n </center>";
} else {
echo "$ref: That record appears to be unavailable"; 
} 





mysql_close($link);
?>

<br><br><br><br><br>
 <hr><center><br>
<p class="c2">Last update: June 16, 2014</p></center>

<!-- ============================== STOP Center Content Entry ============================  -->
<hr><center><br>
 	
	
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->
<?php include("../../include/footer.php"); ?>
<?php
}
?>

</body>

</html>

