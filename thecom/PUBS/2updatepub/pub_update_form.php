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
<!--<?php include("include/topmenu.php"); ?>-->

<?php
//registration_update_form.php
?>
<html><head><title>Publication Update Form</title>
</head>
<body>

<center>
<br>
<form method="POST" action="pub_change_form.php">
<pre>
&nbsp;&nbsp;<b><h2>Enter Publication <font color="#FF0000">ID</font> Number to Edit:</b></h2> <br>
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
<center><b>Quick View <br>(Ordered by Publication Year)</b></center> <br>
<?php include("include/pubyear.php"); ?><br>
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
$result = mysql_query( "SELECT * FROM IQSEpubs ORDER BY id DESC" )
or die("SELECT Error: ".mysqli_error());
$num_rows = mysqli_num_rows($result);
if ($myrow = mysqli_fetch_array($result)) {

echo "<center><b>Quick View <br>(Ordered by Most Recently Entered)</b></center><BR><br>";
echo "<table width=\"85%\" border=1>\n";
echo "<tr><td><b><font color=\"#FF0000\">ID</font></b></td><td><b>Publication</b>:</td></tr>\n";
do {
printf("<tr><td>%s</td><td>%s</td></tr>\n", $myrow["id"], $myrow["dbpub"]);
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
<p class="c2">Last update: August 23, 2013</p></center>

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


