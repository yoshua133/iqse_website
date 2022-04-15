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

<div align="center"><h3>Foreign Faculty, Graduate or Undergraduate Student</h3></div>
If you will be travelling to the U.S. from another country, the following documentation will be required in order to reimburse travel expenses and to pay direct billed summer school costs. <br><br>

The following required documents may be emailed to <a href="mailto:tengma@tamu.edu">tengma@tamu.edu</a>.<br>

<h4>Required Documents</h4>
<ul>
	<li>Current CV</li>
	<li>Copy of Visa</li>
	<li>Copy of Passport (personal info pages)</li>
	<li>Copy of passport/I-94 card with status of entry clearly visible (provide after entry)</li>
</ul>
<h4>Entering on B1/B2 Visa Waiver Program</h4>
If you will be travelling to the U.S. on a B1/B2 visa, the following will be required:
<ul>
	<li>Current CV</li>
	<li>Copy of Passport (personal info pages)</li>
	<li><a href="forms/B1B2VWF.pdf" target="_blank">B1/B2 Visa Waiver Academic Certification Form</a></li>
	<li> Copy of Passport/I-94 card with status of entry (B1 or W-B) clearly visible (provide after entry)</li>
</ul><br>

<div align="center"><font color="#FF0000"><b>Foreign participants MUST be on a <u>BUSINESS</u> visa (B1 or WB) in order for IQSE to be able reimburse travel expenses. If you need an official invitation, please complete the <a href="invitereq.php">Invitation Request Form</a>.
</b></font><br><br></div>



<center>For more information email:<a href="mailto:tengma@tamu.edu?subject=Foreign Faculty, GS, UG Question"><font color="#000000">tengma@tamu.edu</font></a>.


<br><br><br>
<br><br>


<?php include("footer.php"); ?>


</td></tr>
</table>




<br><br><br><br><br>
 

<!-- ============================== STOP Center Content Entry ============================  -->


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