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
<a href='../reminders2.php'>Add new Reminder</a>

<div align="center"><h1>List of Upcoming Reminders</h1></div>
<table width="90%" border="1" align="center">
<tr>
<td>
<b>Activity</b></td><td>
<b>Description</b></td><td>
<b>Reminder Date</b></td><td>
<b>Due Date</b></td><td>
<b>Email to:</b></td><td>
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
$due_date = $row["due_year"].$row["due_month"].$row["due_date"];
$dbemail = $row["dbemail"];
$reminder_id = $row["reminder_id"];
echo("
<tr>
<td width='20%'>$reminder_name</td>
<td width='35%'>$reminder_desc</td>
<td width='10%'>$reminder_date</td>
<td width='10%'>$due_date</td>
<td width='15%'>$dbemail</td>
<td width='10%'><a href='reminder_delete2.php?reminder_id=$reminder_id'>delete</a></td>
</tr>
");
}
mysql_free_result( $result );
?>
</table>
</body>
</html>
<?php }?>