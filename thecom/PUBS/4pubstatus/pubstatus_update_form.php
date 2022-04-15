<?php 
session_start(); //Allows you to use sessions 
$user = "IQSEpubs"; //Username to protected page. 
$pass = "Letmein2"; //Password to protected page. 
if($_POST['username6'] == $user AND $_POST['password6'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username6'] = $_POST['username6'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/PUBS/PUB.php">Login?</a>'); 
  } 
else 
    { 
?> 

<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>

<!-- ============================== Enter Center Content ============================  -->

<?php
//registration_update_form.php
?>
<html><head><title>Publication Status Update Form</title>
</head>
<body>

<center>
<br>
<form method="POST" action="pubstatus_change_form.php">
<pre>
&nbsp;&nbsp;<h2>Enter Username to Edit: </h2><br>
<input type="text" name="uname" size="30">
&nbsp;<input type="submit" value="Submit"><input type="reset">
</pre>
</form>
</center>

<center><table>
<tr>
<td>
<br>
<center><font size="4">List of Assigned Unames <br>(Ordered by Classification)</font></center> 
<?php include("include/ruffaculty.php"); ?>
<?php include("include/rufstaff.php"); ?>
<?php include("include/rufresearchers.php"); ?>
<?php include("include/rufgs.php"); ?>
<?php include("include/rufvisitors.php"); ?>
<?php include("include/ruffellows.php"); ?>
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
$result = mysql_query( "SELECT * FROM IQSEpeople ORDER BY last ASC" )
or die("SELECT Error: ".mysqli_error());
$num_rows = mysqli_num_rows($result);
if ($myrow = mysqli_fetch_array($result)) {

echo "<center><br><font size=\"4\">List of Assigned Unames <br>(ordered alphabetically by Last Name)</font><BR><br>";
echo "<table width=\"85%\" border=1>\n";
echo "<tr><td>Last Name, First Name:</td><td>Username:</td></tr>\n";
do {
printf("<tr><td>%s</td><td>%s</td></tr>\n", $myrow["last"].",&nbsp;". $myrow["first"], $myrow["uname"]);
} while ($myrow = mysqli_fetch_array($result));
echo "</table>\n </center>";
} else {echo "$ref: That record appears to be unavailable"; 
} 






mysql_close($link);
?>

</td>
</tr>
</table>

<br><br><br><br><br>
 <hr><center>
<p class="c2">Last update: August 24, 2013</p></center>

<!-- ============================== STOP Center Content Entry ============================  -->

 	
	
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<small><?php include("../include/footer-1.php"); ?></small>

<?php
}
?>
</body>
</html>
