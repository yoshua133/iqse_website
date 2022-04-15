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

	 
<br>
<!-- ============================== Enter Center Content ============================  -->

<?php
//rm_change_record.php

$ud_yusername=$_POST['ud_yusername'];
$ud_yfirst=$_POST['ud_yfirst'];
$ud_ylast=$_POST['ud_ylast'];
$ud_yemail=$_POST['ud_yemail'];
$ud_rlast=$_POST['ud_rlast'];
$ud_rfirst=$_POST['ud_rfirst'];
$ud_remail=$_POST['ud_remail'];

$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($link, DB_NAME);
mysqli_query($link, "UPDATE RMTable SET yfirst='$ud_yfirst' , ylast='$ud_ylast' , yemail='$ud_yemail' , rfirst='$ud_rfirst' , rlast='$ud_rlast' , remail='$ud_remail' WHERE yusername='$ud_yusername'");

echo "<center><h3> Your Roommate Registration has been Updated successfully. Click to Return to <a href=\"../index.php\">Main</a>.</h3></center>";

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