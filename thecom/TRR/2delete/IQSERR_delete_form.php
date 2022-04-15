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
<html><head><title>Delete Book Form</title>
</head>
<body>


<center>	
<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>
</center>		 

<!-- ============================== Enter Center Content ============================  -->
<!--<?php include("include/topmenu.php"); ?>-->

<?php
//registration_update_form.php
?>


<center>
<form method="POST" action="IQSERR_change_form.php">
<pre>
&nbsp;&nbsp;<b><h2>Enter <font color="#FF8080"><u>ID Number</u> (not Reference Number)</font> of book to Delete:</b></h2> <br>
<input type="text" name="id" size="40">
&nbsp;<input type="submit" value="Submit"><input type="reset">
</pre>
</form>
</center>
<br>


<?php
/* Change next two lines if using online */
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die(mysqli_error());
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
$result = mysql_query( "SELECT * FROM IQSERR ORDER BY ABS(id) ASC" )
or die("SELECT Error: ".mysqli_error());
$num_rows = mysqli_num_rows($result);
if ($myrow = mysqli_fetch_array($result)) {

echo "<center><table width=\"85%\" border=1>\n";
echo "<tr><td><b><font color=\"#FF8080\">ID#:</font></b></td><td><b>Reference#:</b></td><td><b> Title</b></td><td><b>1st Author Last Name</b>:</td></tr>\n";
do {
printf("<tr><td><font color=\"#FF8080\"><b>%s</b></font></td><td>%s</td><td>%s</td><td>%s</td></tr>\n", $myrow["id"], $myrow["reference"], $myrow["title"], $myrow["lastauthor"]);
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
 
<div align="center">
<?php include("../include/footer-1.php"); ?>
</div>
<?php
}
?>

</body>

</html>

