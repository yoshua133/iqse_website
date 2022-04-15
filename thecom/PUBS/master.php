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



<html lang="en">
  <head>
    
    <title>Uname Master List</title>
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
  
<?php include("include/header.php"); ?>
<?php include("include/topmenu.php"); ?>

<div align="center"><h2><font color="#500000">Master List of IQSE Assigned Unames (Usernames) </h2></font></div>
 <br>
<?php
/* Change next two lines if using online */
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die(mysqli_error());
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
$result = mysql_query( "SELECT * FROM IQSEpeople ORDER BY last ASC  " )
or die("SELECT Error: ".mysqli_error());
$num_rows = mysqli_num_rows($result);
if ($myrow = mysqli_fetch_array($result)) {

echo "<center><table width=\"85%\" border=1>\n";
echo "<tr><td><b>Last Name, First Name:</b></td><td><b>Assigned Uname:</b></td></tr>\n";
do {
printf("<tr><td>%s</td><td>%s</td></tr>\n", $myrow["last"].",&nbsp;".$myrow['first'],  $myrow["uname"]);
} while ($myrow = mysqli_fetch_array($result));
echo "</table>\n </center>";
} else {
echo "$ref: That record appears to be unavailable"; 
} 





mysql_close($link);
?>

<br><br>
<div align="center"><?php include("include/footer.php"); ?></div>

  </body>
</html>

<?php 
    } 
?>  