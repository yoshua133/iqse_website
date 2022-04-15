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

<html>
<body>

<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>

<!-- ============================== Enter Center Content ============================  -->

<?php
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
?>
<?php
if( empty($_GET['reminder_id']) )
{
?>
<html>
<head><title>List of Reminders</title></head>
<body>

<div align="center"><h1>Reminder List Ordered by Trigger Date</h1></div>
<table width="90%" border="1" align="center">
<tr>
<td>
<b>Activity Type</b></td><td>
<b>Description</b></td><td>
<b>Reminder Date</b></td><td>
<b>Email to:</b></td><td>
<b>ID#</b></td><td>
<b>Delete?</b></td></tr>
<?php
$result = mysql_query( "SELECT * FROM IQSEreminders ORDER BY reminder_date ASC" );
$nr = mysql_num_rows( $result );
if(empty($nr))
{
echo("
<tr>
<td colspan='3'>No Reminders setup</td>
</tr>
");
}
while( $row = mysqli_fetch_array( $result ))
{
$reminder_name = $row["reminder_name"];
$reminder_desc = $row["reminder_desc"];
$reminder_date = $row["reminder_year"].$row["reminder_month"].$row["reminder_date"];
$dbemail = $row["dbemail"];
$reminder_id = $row["reminder_id"];
echo("
<tr>
<td width='20%'>$reminder_name</td>
<td width='35%'>$reminder_desc</td>
<td width='10%'>$reminder_date</td>
<td width='15%'>$dbemail</td>
<td width='7%'>$reminder_id</td>
<td width='7%'><a href='reminder_delete2.php?reminder_id=$reminder_id'>Delete</a></td>
</tr>
");
}
mysql_free_result( $result );
?>
</table>
</body>
</html>
<?php }?>


<br><br><br><br><br>
 <hr><center>
<p class="c2">Last update: September 14, 2013</p></center>

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

