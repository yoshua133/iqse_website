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


<!-- ============================== Enter Center Content ============================  -->

<table align="center">
<tr><td>

<?php
if($session->logged_in){
   ?>


<?php

$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($link, DB_NAME);

$sql="INSERT INTO SS2019travel (name, dbgroup, dbstatus, email, invitedby ) VALUES ('$_POST[name]', '$_POST[dbgroup]', '$_POST[dbstatus]', '$_POST[email]', '$_POST[invitedby]')";

if (!mysqli_query($link, $sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "<br> <center><h3>Thank you for Registering!</h3></center>";

mysqli_close($link)
?>
<center><br><h4>click to return to the <a href="index.php"> SS2019 homepage</a></h4></center>
<center><h4>click to return to the <a href="grpreg.php"> travel group registration page</a></h4></center>
<br><br>
<br><br>
<?php
}
else
{
die("Wrong Code Entered");
}
?>






<br><br><br><br><br></div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/outofview.js"></script>
  <script src="js/what-input.min.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>$(document).foundation();</script>
</body>

</html>