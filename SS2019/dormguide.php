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
/**
 * User has already logged in, so display relavent links, including
 * a link to the admin center if the user is an administrator.
 */
if($session->logged_in){
   ?>

  
<h3> Staying in the Dorms</h3>

Lodging will be in the Casper College Residence Hall Complex. In order for there to be enough space to house all our participants, the following rules should be followed:<br>
<br>

<u>Students and Postdocs </u>
      <ul><li> Two people to a room</li>
	  <li>Only roommates registered via the Summer School website will be acknowledged.</li>
	  <li>Please help keep the Bulletin Board current by completing the <a href="4update/registration_update_form.php" target="_blank">Update Registration Form</a> once you have found a roommate.
	  <li><font color="#FF0000"><b>Roommates should be specified by May 31, 2019.</b></font></li>
	  </ul>
<u>Faculty and Staff</u>
      <li> One person to a room, as best as we can accomodate.</li><br>
	 
<b>Note: Rommates will be automatically assigned on May 31, 2019 for students and postdocs not yet having registered for a roommate.</b><br>
<br>

<h4>How to Find a Roommate</h4>

<li>Please Visit the <a href="rmboard.php">"The Roommate Bulletin Board"</a>.</li><br>

<h4>How to Register as Roommates</h4>
<ul>
<li>Please visit the <a href="rmreg.php">Roommate Registration Form</a>.</li>
<li>Please note your roommate will need to already be registered for the Summer School in order for you to be able to register them as your roommate, i.e., you will need information they provide during the Summer School registeration process to complete the Roommate Registration Form. Incomplete Roommate Registration forms will not be considered valid since details are needed to generate reports which will be given to Casper Campus Housing for rooms to be held. </li></ul>

<h4>How to Change Roommates</h4>

<li>Please visit the <a href="4RM/rm_update_form.php">UPDATE Roommate Registration Form</a>.</li><br>

<h4>Current Roommate List</h4>

<li>To view the current roommate list, please click <a href="rmlist.php">Current Roommate List</a>.</li><br>

<h4>Current Dorm List (full list)</h4>

<li>To view the current dorm list (regardless of roommate status), please click <a href="dormlist.php">Current Dorm List</a>.</li><br>

<br><br>

<h3> What About Hotels?</h3>




<font color="#FF0000"><b>The following applies unless <u>prior</u> arrangements have been made.</b></font><br><br>


<h4> All TAMU Students and Employees Should be Staying in the Dorm!</h4><br>
<h4>For Those Staying in Hotels:</h4>
	<ul>	<li>The maximum reimbursement has been set at $30.00/night/person (the cost it would have been had you stayed in the dorm). </li>
		<li>We do not make Summer School related hotel reservations. Online sites such as <a href="http://Orbitz.com">Orbitz</a>, etc. may assist you in locating hotels in the area according to your preferences.</li>
		<li>You will be responsible for your own transportation to/from the campus/hotel. IQSE members will <u>not</u> be running a taxi service between the hotels and campus throughout the week.</li>
		<li>If IQSE is reimbursing your expenses, our accounts are not be able to reimburse for the extra rental car expense you may need should you decide not to stay in the dorm.</li>
	</ul>

<b>Thank you for you understanding that we are a State Institution running the Summer School on a very limited budget.</b>




<br><br><br><br><br><br>
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




<br><br><br><br><br>
 
<!-- ============================== STOP Center Content Entry ============================  --></div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/outofview.js"></script>
  <script src="js/what-input.min.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>$(document).foundation();</script>
</body>

</html>