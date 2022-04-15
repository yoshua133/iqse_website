<?php
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());

// Values you need set
$number_of_days_before = 0;

$reminder_details = "";
$todays_date = date( "Ymd" );
$year = substr($todays_date, 0, 4);
$month = substr($todays_date, 4, 2);
$date = substr($todays_date, 6, 2);
$trigger_date = date("Ymd", mktime (0,0,0,$month,$date-$number_of_days_before,$year));
$result = mysql_query( "SELECT * FROM IQSEreminders WHERE reminder_date = $trigger_date ORDER BY reminder_date ASC" );
$nr = mysql_num_rows( $result );
while( $row = mysqli_fetch_array( $result ) )
{
set_time_limit(0);
$year = substr($row["reminder_date"], 0, 4);
$month = substr($row["reminder_date"], 4, 2);
$date = substr($row["reminder_date"], 6, 2);
$reminder_date = date("M j, Y", mktime (0,0,0,$month,$date,$year));
$reminder_details .= "Event: ".$row["reminder_name"]."\n";
$reminder_details .= "Reminder Date: ".$reminder_date."\n";
$reminder_details .= "Due Date:".$due_date."\n";
$reminder_details .= $row["reminder_desc"]."\n\n";
$dbemail=$row['dbemail'];
$mailheader = "From: Reminder System <$email>\nX-Mailer: Reminder\nContent-Type: text/plain";
mail($dbemail,"Reminder","$reminder_details","$mailheader");
echo "<center>Reminder sent to:&nbsp;$dbemail<br></center>";
}
mysql_free_result( $result );
if( !empty( $nr ) )
{
// Send out Reminder mail

// Delete the sent reminders
mysql_query("DELETE FROM IQSEreminders WHERE reminder_date <= $trigger_date" );
}
?>
