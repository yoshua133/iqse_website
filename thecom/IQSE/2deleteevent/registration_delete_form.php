<?php 
session_start(); //Allows you to use sessions 
$user = "IQSE"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username4'] == $user AND $_POST['password4'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username4'] = $_POST['username4'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/IQSE/IQSE.php">Login?</a>'); 
  } 
else 
    { 
?> 


<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>

<!-- ============================== Enter Center Content ============================  -->
<!--<?php include("include/topmenu.php"); ?>-->

<?php
//registration_update_form.php
?>
<html><head><title>Event Update Form</title>
</head>
<body>

<center>
<br>
<form method="POST" action="registration_change_form.php">
<pre>
&nbsp;&nbsp;<b><h2>Enter Event ID Number to <font color="#FF0000"><b>Delete</b></font>:</b></h2> <br>
<input type="text" name="id" size="40">
&nbsp;<input type="submit" value="Submit"><input type="reset">
</pre>
</form>
</center><br><br>
<hr>
<br>
<center><table>
<tr>
<td>
<center><b>Quick View <br>(Ordered by Event Date)</b></center> <br>
<?php include("include/ruf2013.php"); ?>
<?php include("include/ruf2012.php"); ?>
<?php include("include/ruf2011.php"); ?>
<?php include("include/ruf2010.php"); ?>
<?php include("include/ruf2009.php"); ?>
<?php include("include/ruf2008.php"); ?>
</td>
<td width=5% valign='top'>
</td>
<td valign='top'>
<?php
/* Change next two lines if using online */
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die(mysqli_error());
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
$result = mysql_query( "SELECT * FROM IQSEevent ORDER BY id DESC" )
or die("SELECT Error: ".mysqli_error());
$num_rows = mysqli_num_rows($result);
if ($myrow = mysqli_fetch_array($result)) {

echo "<center><b>Quick View <br>(Ordered by Most Recently Entered)</b></center><BR><br>";
echo "<table width=\"85%\" border=1>\n";
echo "<tr><td><b>ID Number</b></td><td><b>Speaker Name</b></td><td><b>Event Date</b>:</td></tr>\n";
do {
printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n", $myrow["id"], $myrow["speakername"], $myrow["eventDate"]);
} while ($myrow = mysqli_fetch_array($result));
echo "</table>\n </center>";
} else {
echo "$ref: That record appears to be unavailable"; 
} 





mysql_close($link);
?>

</td>
</tr>
</table></center>
<br><br><br><br><br>
 <hr><center>
<p class="c2">Last update: October 15, 2012</p></center>

<!-- ============================== STOP Center Content Entry ============================  -->

 	
	
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<?php include("../include/footer-1.php"); ?>

<?php
}
?>
</body>
</html>


