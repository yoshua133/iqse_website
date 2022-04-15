<?php if (!isset($_POST['message'])||
       !isset($_POST['subject']))
       died('We are sorry, but there appears to be a problem with the form you submitted.'); 

	   $message = $_POST['message']; // required     
	   $subject = $_POST['subject']; // required 
	   
	   
$db="SS2011db";
$link = mysql_connect("sql.physics.tamu.edu", "iqsedb1", "Iqse4u^2");
if (! $link)
die("Couldn't connect to MySQL");
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());

$result = mysql_query("SELECT email FROM TAMUPW2017Reg");
$headers="From: TAMU Princeton Workshop Follow-on Meeting <iqse@tamu.edu>\n";

while($row=mysqli_fetch_array($result)){
set_time_limit(0);
$email=$row['email'];
mail($email,$subject,stripslashes($message),$headers);
echo "email sent to:$email<br>";
}
?>
