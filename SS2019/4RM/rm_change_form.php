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
<?php $yusername=$_POST['yusername'];
If($session->username == $yusername){
   
//rm_change_form.php
?>

<html><head><title>Change Roommate Registration Form</title>
<style type="text/css">
td {font-family: tahoma, arial, verdana; font-size: 10pt }
</style>



</head>
<body>
<?php
include('../../config.php');
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($link, DB_NAME);

$query=" SELECT * FROM RMTable WHERE yusername='$yusername'";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$yfirst=mysql_result($result,$i,"yfirst");
$ylast=mysql_result($result,$i,"ylast");
$yemail=mysql_result($result,$i,"yemail");
$rfirst=mysql_result($result,$i,"rfirst");
$rlast=mysql_result($result,$i,"rlast");
$remail=mysql_result($result,$i,"remail");
?>

<center>

<h3>Update Registration Form</h3>
<table width="500" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0">
<form action="rm_change_record.php" method="POST">
<tr align="center" valign="top">
<td align="center" colspan="1">
<input type="hidden" name="ud_yusername" value="<?php echo "$yusername" ?>">
Your First Name: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_yfirst" value="<?php echo "$yfirst"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Your Last Name: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_ylast" value="<?php echo "$ylast"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Your Email Address: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_yemail" value="<?php echo "$yemail"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Roommate's First Name: <br><small> (if your status is faculty or staff,<br> enter guest's info or "none")</small> 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_rfirst" value="<?php echo "$rfirst"?>"><br>
</td></tr><tr align="center" valign="top">
<td align="center" colspan="1">
Roommate's Last Name: <br><small> (if your status is faculty or staff,<br> enter guest's info or "none")</small> 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_rlast" value="<?php echo "$rlast"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Roommate's Email Address: <br><small> (if your status is faculty or staff,<br> leave blank)</small> 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_remail" value="<?php echo "$remail"?>"><br>
</td></tr></table><br><br>
<input type="Submit" value="Update"></form>
<?php
++$i;
}
}else{
echo "<center><h2>Username entered does not match registered participant account.<br>"
     ."Please re-enter your username</h2></center>";
}
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