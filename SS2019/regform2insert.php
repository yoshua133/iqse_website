<?php include("include/session.php");?>
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
//regform2.php
?>

<html><head><title>Registration Form</title>
<style type="text/css">
td {font-family: tahoma, arial, verdana; font-size: 10pt }
</style>



</head>
<body>
<?php

#include("include/constants.php");
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($link, DB_NAME);

$sql="INSERT INTO SSRegForm (first, last, username, email, dorm, affil, present, title, constraints, citizen, visa, sponsor, status, TXEmployee, roommate, gender, arrival, depart, rentalcar, licensed, dinner, guest, gname, transplan) VALUES ('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[email]', '$_POST[dorm]', '$_POST[affil]', '$_POST[present]', '$_POST[title]', '$_POST[constraints]', '$_POST[citizen]', '$_POST[visa]', '$_POST[sponsor]', '$_POST[status]', '$_POST[TXEmployee]', '$_POST[roommate]', '$_POST[gender]', '$_POST[arrival]', '$_POST[depart]', '$_POST[rentalcar]', '$_POST[licensed]', '$_POST[dinner]', '$_POST[guest]', '$_POST[gname]', '$_POST[transplan]')";

if (!mysqli_query($link, $sql))
  {
  die('Error: ' . mysqli_error($link));
  };
echo "<br> <center><h3>Thank you for registering!</h3></center>";

mysqli_close($link)
?> 


<br><br><br><br><br>


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