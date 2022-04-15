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

<html lang="en">
  
<title>IQSE SS2019 registration2</title>
   
<body>



<?php
/**
 * The user is already logged in, not allowed to register.
 */
if($session->logged_in){
   echo "<center><h1>Registered</h1></center>";
   echo "<p><center><h3>We're sorry <b>$session->username</b>, but you've already registered."
       ."&nbsp;<a href=\"index.php\">Return to Main</a></center></p><br><br><br><br><br><br><br><br><br>.</h3>";
}
/**
 * The user has submitted the registration2 form and the
 * results have been processed.
 */
else if(isset($_SESSION['regsuccess'])){
   /* registration2 was successful */
   if($_SESSION['regsuccess']){
      echo "<center><h1>Registered!</h1></center>";
      echo "<p><center>Thank you <b>".$_SESSION['reguname']."</b>, your information has been added to the database,"
          ."you may now <a href=\"index.php\">log in</a>.</center></p>";
   }
   /* registration2 failed */
   else{
      echo "<center><h1>registration2 Failed</h1></center>";
      echo "<p><center>We're sorry, but an error has occurred and your registration2 for the username <b>".$_SESSION['reguname']."</b>, "
          ."could not be completed.<br>Please try again at a later time.</center></p>";
   }
   unset($_SESSION['regsuccess']);
   unset($_SESSION['reguname']);
}
/**
 * The user has not filled out the registration2 form yet.
 * Below is the page with the sign-up form, the names
 * of the input fields are important and should not
 * be changed.
 */
else{
?>

<center><h3>Register for an Account</h3></center>
<?php
if($form->num_errors > 0){
   echo "<td><font size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s) found</font></td>";
}
?>
<br><br>
<form action="process.php" method="POST">
<table align="center" border="0" cellspacing="0" cellpadding="3">
<tr><td>Username:</td><td><input type="text" name="user" maxlength="30" value="<?php echo $form->value("user"); ?>"></td><td><?php echo $form->error("user"); ?></td></tr>
<tr><td>Password:</td><td><input type="password" name="pass" maxlength="30" value="<?php echo $form->value("pass"); ?>"></td><td><?php echo $form->error("pass"); ?></td></tr>
<tr><td>Email:</td><td><input type="text" name="email" maxlength="50" value="<?php echo $form->value("email"); ?>"></td><td><?php echo $form->error("email"); ?></td></tr>
<tr><td colspan="2" align="right">
<input type="hidden" name="subjoin" value="1">
<input type="submit" value="Join!"></td></tr>
<tr><td colspan="2" align="left"><a href="index.php">Return to Main</a></td></tr>
</table>
</form>

<?php
}
?>
<br><br><br><br><br>
<?php include("footer.php"); ?>


 
<!-- ============================== STOP Center Content Entry ============================  -->
<hr>
 	
	

</html></div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/outofview.js"></script>
  <script src="js/what-input.min.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>$(document).foundation();</script>
</body>

</html>