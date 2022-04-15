<?php 
session_start(); //Allows you to use sessions 
$user = "TRR"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username5'] == $user AND $_POST['password5'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username5'] = $_POST['username5'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/TRR/TRR.php">Login?</a>'); 
  } 
else 
    { 
?> 


<?php 
$db="SS2011db";
$link = mysql_connect("sql.physics.tamu.edu", "iqsedb1", "Iqse4u^2");
if (! $link)
die("Couldn't connect to MySQL");
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
  
$result = mysql_query("SELECT email FROM IQSERR WHERE status='yes'AND missing='no'");

$headers="From: The Townes Reading Room <iqse@tamu.edu>\n";
$subject = "Subject goes here"; 
$body = "Message goes here"; 

while($row=mysqli_fetch_array($result)){
set_time_limit(0);
$email=$row['email'];
mail($email,$subject,$body,$headers);
echo "reminder sent to:$email<br>";
}
?>

<?php } ?>

 