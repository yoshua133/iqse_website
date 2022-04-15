<?php
#include "config.php";
$link = mysqli_connect($dbhost, $dbuser, $dbpass);
if (! $link)
die("Couldn't connect to MySQL");

mysqli_select_db( $link, $db )
or die("Couldn't open $db: ".mysqli_error());

// Values you need set
$number_of_days_before = 0;
$reminder_details = "";
$todays_date = date( "Ymd" );
$year = substr($todays_date, 0, 4);
$month = substr($todays_date, 4, 2);
$date = substr($todays_date, 6, 2);
$trigger_date = date("Ymd", mktime (0,0,0,$month,$date-$number_of_days_before,$year));
$result = mysqli_query( $link, "SELECT * FROM IQSEreminders WHERE reminder_date <= $trigger_date ORDER BY reminder_date ASC" );
$nr = mysqli_num_rows( $result );

$mailheader = "From: Reminder System <iqse@tamu.edu>\nX-Mailer: Reminder\nContent-Type: text/plain";

while($row=mysqli_fetch_array($result)){
set_time_limit(0);
$dbemail=$row['dbemail'];
$reminder_name=$row['reminder_name'];
$reminder_desc=$row['reminder_desc'];
mail($dbemail,"Reminder: $reminder_name",stripslashes($reminder_desc),$mailheader);
/*echo "<center>Reminder sent to:&nbsp;$dbemail<br></center>";*/
}

mysqli_free_result( $result );
if( !empty( $nr ) )
{
// Send out Reminder mail

// Delete the sent reminders
mysqli_query($link, "DELETE FROM IQSEreminders WHERE reminder_date <= $trigger_date" );
}
?>
