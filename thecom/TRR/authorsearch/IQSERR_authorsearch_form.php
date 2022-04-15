<?php 
session_start(); //Allows you to use sessions 
$user = "TRR"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username5'] == $user AND $_POST['password5'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username5'] = $_POST['username5'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="../TRR.php">Login?</a>'); 
  } 
else 
    { 
?> 

<html><head><title>IQSE Reading Room Book Check-out System</title>
</head>
<body>

<div align="center">
<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>
</div>	 
<center>

<form method="POST" action="IQSERR_authorsearch2_form.php">
<pre>
&nbsp;&nbsp;<h2>Enter Name of Book Author (full or partial):</h2> <br>
<input type="text" name="author" size="30">
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
<br><br><br><br><br><br>
<div align="center">
<?php include("../include/footer-1.php"); ?>
</div>
</body>

</html>
<?php } ?>
