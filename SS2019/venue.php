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

<h3> Casper College, Casper, WY </h3>


This year's summer school will be held at Casper College in Casper, WY! A copy of the Casper College Campus Map can be found by clicking <a href="CCMap.pdf">here</a>. 
Those staying in the Dorm will need to report to the Residence Hall (RH) when they arrive on Sunday. Robert Scully and others will be there to 
greet you and check you in. For general orientation purposes, please note the following meeting/eating locations on the attached Campus Map:<br><br>
 
<b>RESIDENCE HALL (RH):</b> Dorm in which the SS2018 participants will be staying. <br><br>
 
<b>WOLD PHYSICAL SCIENCES (PS)</b> Building: Room 103 (PS 103) is where Presentations are given; Area outside PS 103 is where morning and evening breaks and DINNER on Monday, Tuesday, and Thursday occur. <br><br>
 
<b>GATEWAY</b> Building: Wednesday BBQ Dinner  (food served at 5:00 PM, come early to socialize!). <br><br>
 
<b>TOBIN DINING HALL</b> (in the Student Center and UWC (UU) building): Breakfast and Lunch (Monday through Friday) and Friday night dinner. <br><br>
 

Items which may not be listed in the program include:<br><br>
 
<u>Sunday</u><br>
Afternoon Treats (RH): 2:30 PM pastries and drinks (soda and water)<br>
Dinner (RH): 5:00 PM, with food placed in refrigerator for late arrivals<br><br>
 
<u>Friday</u><br>
Dinner (Tobin Dining Hall): 5:30 PM<br>
Evening break food (RH): 8:00 PM<br><br>
 
<u>Saturday</u><br>
Breakfast (RH): 5:30 AM - 6:30 AM<br><br>
 
 
JUST A FRIENDLY REMINDER: Please remember Casper College is a dry campus (<font color="#FF0000"><b>NO ALCOHOL ALLOWED</b></font>, 
even in the dorms). Also, the <font color="#FF0000"><b>DORM DOES NOT PROVIDE LINENS</b></font> (i.e., BRING YOUR OWN PILLOW, BLANKET, SHEETS, and TOWELS or 
Bring a sleeping bag!). Washers and Dryers are available on each floor. If staying in a hotel, NO PARKING PERMITS are required for 
parking on campus. Those staying off campus are encouraged to dine on campus as the food count does include you. So please eat away!!<font color="#FF0000"><b> DORM ROOMS SHOULD BE LEFT IN GOOD ORDER AT THE END OF YOUR STAY</b></font> in order to avoid uneccessary cleaning fines, higher prices next year, and that we might be allowed to return. <br><br><br><br>


 












<?php
}
else{
?>


<?php
/**
 * User not logged in, display the login form.
 * If user has already tried to login, but errors were
 * found, display the total number of errors.
 * If errors occurred, they will be displayed.
 */
if($form->num_errors > 0){
   echo "<font size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s) found</font>";
}
?>
<form action="process.php" method="POST">
<table align="center" border="0" cellspacing="0" cellpadding="3">
<tr><td>Username:</td><td><input type="text" name="user" maxlength="30" value="<?php echo $form->value("user"); ?>"></td><td><?php echo $form->error("user"); ?></td></tr>
<tr><td>Password:</td><td><input type="password" name="pass" maxlength="30" value="<?php echo $form->value("pass"); ?>"></td><td><?php echo $form->error("pass"); ?></td></tr>
<tr><td colspan="2" align="left"><input type="checkbox" name="remember" <?php if($form->value("remember") != ""){ echo "checked"; } ?>>
<font size="2">Remember me next time &nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="sublogin" value="1">
<input type="submit" value="Login"></td></tr>
<tr><td colspan="2" align="left"><br><font size="2">[<a href="SS2019forgotpass.php">Forgot Password?</a>]</font></td><td align="right"></td></tr>
<tr><td colspan="2" align="left"><br>Not registered? <a href="SS2019register.php">Sign-Up!</a></td></tr>
</table>
</form>

<?php
}
?>
<?php include("footer.php"); ?>


</td></tr>
</table>



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