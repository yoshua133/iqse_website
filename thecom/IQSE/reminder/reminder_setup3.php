<?php
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());


if($_POST['step'] != '1')
{
?>
<html>
<head><title>Add Reminders</title></head>
<body>
<?php $txt="Event:\nDescription:\nDue Date: \n";?>

<br>
<div align="center"><h1>Add Reminder</h1></div><br>
<form name="setup_reminder" action="reminder/reminder_setup3.php" method="post">
<table border='0' align='center'>
<tr>
<td align="right">Activity Type (Subject Line):</td>
<td>
<input name="reminder_name" type="text" size="45"  maxlength="255" />
</td>
</tr>
<tr>
<td align="right" valign="top">Reminder Email Text:</td>
<td>
<textarea name="reminder_desc" rows="5" cols="34"  /></textarea>
</td>
</tr>
<tr>
<td align="right">Trigger Date:<br><small>(Date Reminder will be sent)</small></td>
<td>
<select name="reminder_year">
<?php
$current_year = date("Y");
for($counter=$current_year;$counter<=$current_year+5;$counter++)
{
echo("\n<option>$counter</option>");
}
?>
</select>
<select name="reminder_month">
<?php
for($counter=1;$counter<=12;$counter++)
{
if($counter < 10)
$prefix = "0";
else
$prefix = "";
echo("\n<option>$prefix$counter</option>");
}
?>
</select>
<select name="reminder_date">
<?php
for($counter=1;$counter<=31;$counter++)
{
if($counter < 10)
$prefix = "0";
else
$prefix="";
echo("\n<option>$prefix$counter</option>");
}
?>
</select>
</td>
</tr>

<tr>
<td align="right" width="200">Email Address(es) to Notify:</div></td><!-- Col 1 -->
<td><input type="text" size="45"  value="mariya.khmel@tamu.edu, yasa@tamu.edu, k-chapin@tamu.edu, scully@tamu.edu" name="dbemail" ></td>
</tr>
<tr>
<td> </td>
<td>
<input name="step" type="hidden" value="1" />
<input name="submit" type="submit" value="add" />
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
}

else
{
$error_list = "";
$todays_date = date( "Ymd" );
$reminder_date = $_POST['reminder_year'].$_POST['reminder_month'].$_POST['reminder_date'];
$due_date=$_POST['due_year'].$_POST['due_month'].$_POST['due_date'];
if( empty($_POST['reminder_name']) )
$error_list .= "No Reminder Name<br />";
if( !checkdate( $_POST['reminder_month'], $_POST['reminder_date'], $_POST['reminder_year'] ))
$error_list .= "Reminder Date is invalid<br />";
else if( $reminder_date < $todays_date )
$error_list .= "Reminder Date is not a future date<br />";
if( empty( $error_list ) )
{
// No error let's add the entry
mysql_query( "INSERT INTO IQSEreminders(`reminder_name`, `reminder_desc`, `reminder_date`, `dbemail`) VALUES('".addslashes($_POST['reminder_name'])."', '".addslashes($_POST['reminder_desc'])."', '".addslashes($reminder_date)."','".addslashes($_POST['dbemail'])."')" );
// Let's go to the Reminder List page
Header("Refresh: 1;url=reminder_list3.php");
echo <<< _HTML_END_
Reminder Added, redirecting ...
_HTML_END_;
}
else
{
// Error occurred let's notify it
echo( $error_list );
}
}
?>

