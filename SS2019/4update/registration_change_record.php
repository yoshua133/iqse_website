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
//registration_change_record.php

$ud_username=$_POST['ud_username'];
$ud_first=$_POST['ud_first'];
$ud_last=$_POST['ud_last'];
$ud_email=$_POST['ud_email'];
$ud_dorm=$_POST['ud_dorm'];
$ud_affil=$_POST['ud_affil'];
$ud_present=$_POST['ud_present'];
$ud_title=$_POST['ud_title'];
$ud_constraints=$_POST['ud_constraints'];
$ud_citizen=$_POST['ud_citizen'];
$ud_visa=$_POST['ud_visa'];
$ud_sponsor=$_POST['ud_sponsor'];
$ud_status=$_POST['ud_status'];
$ud_TXEmployee=$_POST['ud_TXEmployee'];
$ud_roommate=$_POST['ud_roommate'];
$ud_gender=$_POST['ud_gender'];
$ud_arrival=$_POST['ud_arrival'];
$ud_depart=$_POST['ud_depart'];
$ud_rentalcar=$_POST['ud_rentalcar'];
$ud_licensed=$_POST['ud_licensed'];
$ud_dinner=$_POST['ud_dinner'];
$ud_guest=$_POST['ud_guest'];
$ud_gname=$_POST['ud_gname'];
$ud_transplan=$_POST['ud_transplan'];
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($link, DB_NAME);

mysqli_query($link, " UPDATE SSRegForm SET first='$ud_first' , last='$ud_last' , email='$ud_email' , dorm='$ud_dorm', affil='$ud_affil' , present='$ud_present' , title='$ud_title', constraints='$ud_constraints', citizen='$ud_citizen', visa='$ud_visa' , sponsor='$ud_sponsor' , status='$ud_status', TXEmployee='$ud_TXEmployee', roommate='$ud_roommate' , arrival='$ud_arrival' , depart='$ud_depart' , rentalcar='$ud_rentalcar', licensed='$ud_licensed', dinner='$ud_dinner', guest='$ud_guest', gname='$ud_gname', transplan='$ud_transplan' WHERE username='$ud_username'");

echo "<br><br><center><h3> Your registration has been Updated successfully. Click to return to <a href=\"../index.php\">Main</a>. </h3></center>";

mysqli_close($link);
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