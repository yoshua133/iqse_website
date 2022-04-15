<?php include("../include/session.php"); ?>

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
//registration2_update_form.php
?>
<html><head><title>Registration Update Form</title>
</head>
<body>

<center>
<br>
<form method="POST" action="rm_change_form.php">
<pre>
&nbsp;&nbsp;<h3>Enter Your Username: </h3>
<input type="text" name="yusername" size="30">
&nbsp;<input type="submit" value="Submit"><input type="reset">
</pre>
</form>
</center>

<?php
/* Change next two lines if using online */
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($link, DB_NAME);
$result = mysqli_query($link, "SELECT * FROM RMTable ORDER BY ylast ASC" )
or die("SELECT Error: ".mysqli_error());
$num_rows = mysqli_num_rows($result);
if ($myrow = mysqli_fetch_array($result)) {

echo "<center><br>The Current Registered Roommate List:<BR><br>";
echo "<table border=1>\n";
echo "<tr><td><b>Last Name:</b></td><td><b>First Name</b>:</td><td><b>Username:</b></td><td><b>Email:</b></td><td><b>Last Name:</b></td><td><b>First Name:</b></td><td><b>Username:</b></td><td><b>Email:</b></td></tr>\n";
do {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n", $myrow["ylast"], $myrow["yfirst"], $myrow["yusername"],$myrow["yemail"],$myrow["rlast"], $myrow["rfirst"], $myrow["rusername"],$myrow["remail"]);
} while ($myrow = mysqli_fetch_array($result));
echo "</table>\n </center>";
} else {
echo "$ref: That record appears to be unavailable"; 
} 





mysqli_close($link);
?>
<br><br><br><br><br>
 <hr><center><br>

<!-- ============================== STOP Center Content Entry ============================  -->
<?php
}
?></div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/outofview.js"></script>
  <script src="js/what-input.min.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>$(document).foundation();</script>
</body>

</html>