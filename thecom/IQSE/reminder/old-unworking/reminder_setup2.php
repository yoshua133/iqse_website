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
<br>
<div align="center"><h1>Add Reminder</h1></div><br>
<form name="setup_reminder" action="reminder/reminder_setup2.php" method="post">
<table border='0' align='center'>
<tr>
<td>Event:</td>
<td>
<input name="reminder_name" type="text" maxlength="255" />
</td>
</tr>
<tr>
<td>Description</td>
<td>
<textarea name="reminder_desc" rows="5" /></textarea>
</td>
</tr>
<tr>
<td>Trigger Date</td>
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
<td>Due Date</td>
<td>
<select name="due_year">
<?php
$current_year = date("Y");
for($counter=$current_year;$counter<=$current_year+5;$counter++)
{
echo("\n<option>$counter</option>");
}
?>
</select>
<select name="due_month">
<?php
for($counter=1;$counter<=12;$counter++)
{
if($counter < 10)
$prefix = "0";
else
$prefix =""; 
echo("\n<option>$prefix$counter</option>");
}
?>
</select>
<select name="due_date">
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
<td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Email Address(es) to Notify:</div></td><!-- Col 1 -->
<td><input type="text" size="50"  name="dbemail" ></td>
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
mysql_query( "INSERT INTO IQSEreminders(`reminder_name`, `reminder_desc`, `reminder_date`, `due_date`, `dbemail`) VALUES('".addslashes($_POST['reminder_name'])."', '".addslashes($_POST['reminder_desc'])."', '".addslashes($reminder_date)."','".addslashes($due_date)."', '".addslashes($_POST['dbemail'])."')" );
// Let's go to the Reminder List page
Header("Refresh: 1;url=http://iqse.tamu.edu/reminder/reminder_list2.php");
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
