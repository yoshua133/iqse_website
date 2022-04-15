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
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
</head>

<body class="main-grid no-js">
  <div class="row">
    <div class="columns small-1 custom-400-small-1 column-1"></div>
    <div class="columns small-11 medium-12 custom-400-small-11">
      <div class="html-element textstyle">

<html>
<body>

<!-- ============================== Enter Center Content ============================  -->

<table align="center">
<tr><td>

<?php
/**
 * User has already logged in, so display relavent links, including
 * a link to the admin center if the user is an administrator.
 */
if($session->logged_in){ ?>

<!--  -----------------------  Enter TOP MENU ---------------------- -->
 <?php include("menu.php"); ?> 
<!-- ============================== Enter Center Content ============================  -->

Dear Summer School participants, <br><br>

We are delighted you will be joining us for another spectacular Wyoming Summer School! 
The venue is again Casper College in Casper, WY. The links in the menu will take you to more detailed information. Some of the highlights include:<br><br>

<ol type="1">
    <li>Summer School Registration - complete ASAP! - this is what gets you on the dorm list, in our counts, and in the program! </li>
    <li> IQSE Members: Pre-Travel deadline is May 31, 2019</li>
    <li>Everyone: Post-Travel deadline is August 15, 2019.</li>
    <li>Travel visas: you must travel on a <u>business</u> (WB or B1) visa or IQSE accounts will not be able to reimburse expenses</font>.</li>
</ol>
Wishing you a wonderful and safe time in Wyoming!!<br><br>

Sincerely,<br>
IQSE<br><br><br><br>



</td></tr>
<?php include("footer.php"); ?>
</td></tr>

</table>


<br><br><br><br><br>

<!-- ============================== STOP Center Content Entry ============================  -->
<hr><center><br>
 	
	
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->




<?php
}
else{?>


<!--  -----------------------  Enter TOP MENU ---------------------- -->

<?php include("header.php"); ?>


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
<tr><td colspan="2" align="left"><br><font size="2">[<a href="forgotpass.php">Forgot Password?</a>]</font></td><td align="right"></td></tr>
<tr><td colspan="2" align="left"><br>Not registered? <a href="register.php">Sign-Up!</a></td></tr>
</table>
</form>



<?php
}
?>


</body>

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