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
 echo "<br><br><br><center><h2>You have already registered, please use the <a href=\"4RM/RM_update_form.php\">Update Form</a>.</h2></center>"; 
} 
else{ 
?>

<?php

$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($link, DB_NAME);

$sql="INSERT INTO RMTable (yfirst, ylast, yusername, yemail, rfirst, rlast, rusername, remail) VALUES ('$_POST[yfirst]', '$_POST[ylast]', '$_POST[yusername]', '$_POST[yemail]', '$_POST[rfirst]', '$_POST[rlast]', '$_POST[rusername]', '$_POST[remail]')";

if (!mysqli_query($link, $sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "<br><br><center><b>Thank you for registering!</b></center><br><br><br><br><br><br>";

mysqli_close($link)
?></div>

<?php }} ?>

    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/outofview.js"></script>
  <script src="js/what-input.min.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>$(document).foundation();</script>
</body>

</html>