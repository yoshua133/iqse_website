<?php $reminder_id = $_GET['reminder_id'];?>
<?php
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
mysql_query( "DELETE FROM IQSEreminders WHERE reminder_id='$reminder_id'" );
?>
<?php
Header("Refresh: 1;url=reminder_list.php");
echo <<< _HTML_END_
Reminder Deleted, redirecting...
_HTML_END_;
?>