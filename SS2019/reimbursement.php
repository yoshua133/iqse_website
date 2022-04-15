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

   
<center><h3> How to Get Reimbursed: Travel Reimbursement Procedures</h3></center>
<br>
<font color="#FF0000"><b><div align="center">All Reimbursements must be submitted by August 15, 2019 or expenses might not be reimbursed.  
</b></font> <br>In order to be reimbursed for Summer School travel expenses, the following should be provided according to your status. <br><br>
</div>
<h4>General Note Regarding Food Expenses</h4>
NOTE to SS2019 participants: Since all meals are being provided via Casper College Food Services beginning with Dinner on July 21, 2019 and ending with breakfast on July 27, 2019, personal food/meal expenses which occur within this period will <b>NOT</b> be reimbursed. However, food expenses up to 20$/day (actual expense off receipts in traveler's name, itemized, and showing proof of payment) will be reimbursed for food expenses incurred while traveling to and from Casper, WY. <br><br>

<h4>Texas A&M Employees and Student Employees</h4>
<ul>
	<li>Itemized Original Receipts showing proof of payment</li>
	<li>Typed summary of expenses including 1) date and time of departure from College Station, 2) date and time of return to College Station, 3) rental van/car group, 4) roommates while at Casper College (if applicable)</li>
	<li>All documents noted in the <a href="pretravel.php"><b>Pre-Travel section</b></a></li>
	<li> All State of Texas Employees whose system part is using CONCUR (e.g., TAMU, Tarleton State) will need to submit their reimbursement requests through CONCUR in the form of an EXPENSE REPORT. Instructions for processing expense reports can be found by clicking <a href="CONCURpost.php"><b>Creating a CONCUR Expense Report</b></a></li>
</ul>
<h4>Texas A&M Scholarship Students and TAMU Non-Employees</h4>
<ul>
	<li>Itemized Original Receipts showing proof of payment</li>
	<li>Typed summary of expenses including 1) date and time of departure from College Station, 2) date and time of return to College Station, 3) rental van/car group, 4) roommates while at Casper College (if applicable)</li>
	<li>All documents noted in the <a href="pretravel.php"><b>Pre-Travel section</b></a></li>
</ul>

<h4>U.S. Faculty, Undergraduate and Graduate Students</h4>
<ul>
	<li>Itemized Original Receipts</li>
	<li>Completed and signed <a href="forms/RRF.docx"target="_blank"><b>Reimbursement Request Form</b></a> </li>
	<li>Completed and signed <a href="forms/IRF.pdf" target="_blank"><b>Individual Reimbursement Form</b></a>  </li>
	<li>Completed and signed <a href="forms/W9.pdf" target="_blank"><b>W9 Form</b></a> </li>
	<li>All documents noted in the <a href="pretravel.php"><b>Pre-Travel section</b></a></li>
</ul>
<h4>Foreign Faculty, Undergraduate and Graduate Students</h4>
<ul>
	<li>Itemized Original Receipts</li>
	<li>Completed and signed <a href="forms/RRF.docx"target="_blank"><b>Reimbursement Request Form</b></a> </li>
	<li>Completed and signed <a href="forms/IRF.pdf" target="_blank"><b>Individual Reimbursement Form</b></a>  </li>
	<li>Completed and signed <a href="forms/W8BEN.pdf" target="_blank"><b>W8BEN</b></a>  (if applicable) </li>
	<li>All documents noted in the <a href="pretravel.php"><b>Pre-Travel section</b></a></li>
</ul>
If a TAMU employee or student you may submit the documents by one of the following:
<ul>
  <li>Drop off in box located outside of RM 562 MPHY</li>
  <li>Send by campus mail to Mr. Teng Ma, IQSE, 4242 TAMU</li>
</ul>
If located off campus, please mail receipts to the following address: <br><br>
<table>
<tr valign="top">
<td style="vertical-align: top; padding-left: 20; width: 90%;">
	Mr. Teng Ma<br>
	Texas A&M University<br>
	IQSE, 4242 TAMU<br>
    College Station, TX  77843-4242<br>
    Phone: 979-845-2013<br><br>
</td>
</tr>
</table>
<div align="center"><font color="#FF0000"><b>NOTE: Please be sure to make copies of all documentation before mailing.</b></font><br><br>

For more information email: <a href="mailto:tengma@tamu.edu?subject=Reimbursement Info Request">tengma@tamu.edu</a>.
</div>


<br><br><br>
<br><br>





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