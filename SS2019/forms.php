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


<h3> Forms (click on file-type)</h3>
 
<ul>
    <li>B1/B2 Visa Waiver Form (<a href="forms/B1B2VWF.pdf" target="_blank"><font color="#000000">.pdf</font></a>)<br></li>
    <li>Individual Reimbursement Form(<a href="forms/IRF.pdf" target="_blank"><font color="#000000">.pdf</font></a>)<br></li>
    <li>Reimbursement Request Form (<a href="forms/RRF.docx" target="_blank"><font color="#000000">.docx</font></a> )<br></li>
    <li>State of Texas Employee Conflict of Insterest Form (<a href="forms/StateofTexasForm.pdf" target="_blank"><font color="#000000">.pdf</font></a>)<br></li>
    <li>TAMU T&L Form &nbsp;(<a href="forms/TAMUTLR.pdf" target="_blank"><font color="#000000">.pdf</font></a>&nbsp;, &nbsp; <a href="forms/TAMUTLR.xls" target="_blank"><font color="#000000">excel</font></a>) <br></li>
    <li>Visa Sponsor Letter (example)(<a href="forms/sponsorletter.doc" target="_blank"><font color="#000000">.doc</font> </a>) <br></li>
    <li>Waiver of Liability  (<a href="forms/LWF.pdf" target="_blank"><font color="#000000">.pdf</font></a>)<br></li>
    <li>W-9 (<a href="forms/W9.pdf" target="_blank"><font color="#000000">.pdf</font></a>)<br></li>
    <li>W8BEN&nbsp; (<a href="forms/W8BEN.pdf" target="_blank"><font color="#000000">.pdf</font></a>)<br></li>
    <li>Certificate of Foreign Status&nbsp; (<a href="forms/CFS.pdf" target="_blank"><font color="#000000">.pdf</font></a>)<br></li>
</ul> 






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