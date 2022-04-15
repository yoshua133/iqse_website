<?php include("include/session.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="SS2019">
  <meta name="keywords" content="">
  <meta name="generator" content="Responsive Site Designer 2.0.2044">
  <title>SS2019</title>
  <link rel="stylesheet" href="css/foundation.min.css">
  <link rel="stylesheet" href="css/wireframe-theme.min.css">
  <script>document.createElement( "picture" );</script>
  <script src="js/picturefill.min.js" class="picturefill" async="async"></script>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Finger+Paint%7CLato:400,b">
 <link rel="stylesheet" type="text/css" href="css/menu-menu.css" media="screen">
</head>

<body class="main-grid no-js">
  <div class="row">
    <div class="columns small-12">
      <div class="html-element"><?php include("menu.php"); ?></div>
    </div>
  </div>
  <div class="row">
    <div class="columns small-1 custom-400-small-1 column-1"></div>
    <div class="columns small-11 medium-12 custom-400-small-11">
      <div class="html-element textstyle">

<?php
/**
 * If user is not logged in, then do not display anything.
 * If user is logged in, then display the form to edit
 * account information, with the current email address
 * already in the field.
 */
if($session->logged_in){
?>

<!-- ============================== Enter Center Content ============================  -->
 
<?php 
$username2=$session->username;
//echo "Username = $username2";


$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($link, DB_NAME);
$query = mysqli_query($link, "SELECT * FROM RMTable WHERE yusername = '$username2'"); 
//echo "$username2";
/*$result = mysqli_query($link, "SELECT * FROM RMTable ORDER BY yusername ASC");
 
 echo "<center><b><table border='0'>
<tr>
<td>username</b></td>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['yusername'] . "</td>";
  echo "</tr>";
  }
echo "</table> </center>";*/

$number=mysqli_num_rows($query); 
// echo "    Number of rows selected = ". $number;

if ($number > 0) {  
 echo "<br><br><br><center><h3>You have already registered, please use the <a href=\"4RM/rm_update_form.php\">Update Form</a>.</h3></center>"; 
} 
else{ 
?>
<div align="center"><h3>Roommate Registration Form</h3></div>
<br>
  <form action="rmform2insert.php" method="POST">
 <center> <table width="700" cellpadding="10" cellspacing="0" border="0" >
  <tr><!-- Row 1 -->
     <td align="right" width="400">Your First Name:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="yfirst" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 2 -->
     <td align="right">Your Last Name:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="ylast" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 3 -->
     <td align="right">Your Username Name:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="yusername" value="<?php echo $session->username; ?>" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Your Email Address:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="yemail" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right"></td><!-- Col 1 -->
     <td></td><!-- Col 2 -->
  </tr>
  
  <tr><!-- Row 1 -->
     <td align="right">Roommate's First Name:<br><small> </small>&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="rfirst" value="If SS2019 participant, must be registered"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 2 -->
     <td align="right">Roommate's Last Name: <br><small> </small>&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="rlast" value="Registered participants shown in Table below"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 3 -->
     <td align="right">Roommate's Username Name:<br><small> (If roommate is a guest, enter "Guest")</small>&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="rusername" value="As indicated in Table below"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Roommate's Email Address:<br><small> (If roommate is a Guest, enter "none")</small>&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="remail" value="As indicated in Table below"></td><!-- Col 2 -->
  </tr>
</table></center>
<br><br><center>
 <input type="Submit" value="Submit"></center></form>

<br><br>
<?php
/* Change next two lines if using online */
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($link, DB_NAME);
$result = mysqli_query($link, "SELECT * FROM SSRegForm ORDER BY last ASC" )
or die("SELECT Error: ".mysqli_error());
$num_rows = mysqli_num_rows($result);
if ($myrow = mysqli_fetch_array($result)) {

echo "<center><br>Current Registered Participant List<BR><br>";
echo "<table border=1>\n";
echo "<tr><td><b>Last Name:</b></td><td><b>First Name</b>:</td><td><b>Username:</b></td><td><b>Email:</b></td></tr>\n";
do {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n", $myrow["last"], $myrow["first"], $myrow["username"],$myrow["email"]);
} while ($myrow = mysqli_fetch_array($result));
echo "</table>\n </center>";
} 
}
?>  

<br><br><br>

<!-- ============================== STOP Center Content Entry ============================  -->
<?php
}
?>
<table><tr><td></td></tr>
<?php include("footer.php"); ?>
</td></tr>
</table>
</div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/outofview.js"></script>
  <script src="js/what-input.min.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>$(document).foundation();</script>
</body>

</html>