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


<center><h3>CONCUR Pre-Trip Authorization Requests</h3></center>
<br>

<center><font color="#FF0000"><b>If you are traveling on IQSE funds and are a TAMU or State of Texas Employee, you MUST complete a CONCUR Travel Request PRIOR to Travel.</font></b><br></center>

<br>
<h4>How to Complete the CONCUR Travel Request:</h4>

<ol type="1">
    <li><b>Login to:</b> Single Sign On (<a href="http://sso.tamu.edu" target="_blank"><font color="#000000">http://sso.tamu.edu</font></a>)</li>
	<li><b>Select:</b> Concur.</li>
    <li><b>Under the "Request" tab, Select:</b> New Request </li>
	<li><b>In the <u><b>Request Header</b></u> (note tabs given under "Request" title), enter the following details:</b></li> 
<ul>
    <li><b>Trip Name/Destination: </b>Casper, WY</li>
    <li><b>Trip Start Date:</b> July 21, 2019</li>
    <li><b>Trip End Date:</b> July 27, 2019</li>
    <li><b>Travel Classification:</b> Employee-Out of State</li>
    <li><b>Traveler Type:</b> Select appropriate type (Faculty, Graduate Student, Staff) Note: Postdocs are considered staff</li>
    <li><b>Student Travel Activity Type:</b> all employees should leave this field blank since you are traveling in your function as an employee, not a student</li>
	<li><b>Contracts/Grants:</b> No</li>
	<li><b>Purpose and Benefit:</b></li>
    To present research results in the 2019 TAMU-Casper College Summer School on Quantum Science and Engineering. Participation results in mutual exchange of information, increased visibility of TAMU and TAMU Quantum Optics group, to establish professional networks, and more efficient use of limited funds. I am traveling as an employee. Presentation of research results to the scientific community  falls within my job duties.<br>
   	<li><b>Personal Travel Included: </b><font color="#FF0000">if yes, you must add comment in notes </font> to explain (e.g., if departure above is on July 20, then comment would be: personal  travel on July 20 not claiming rental car/gas expenses for this day, airfare quote for travel had personal travel not been involved has been obtained and forwarded to the IQSE Business office.) <font color="#FF0000">Note: If personal travel is included, you MUST see Teng Ma <b><i><i><u>BEFORE</u></i></i></b> making any purchases, e.g., airfare, in order to ensure proper procedures are being followed so that maximum reimbursement may be obtained.</font></li>
    <li><b>Guest Traveler Name (Last, First):</b> None</li>
	<li><b>Notes:</b> Enter any notes you may have. Student Technicians please enter: I am traveling in my capacity as an employee.</li>
	<li><b>Foreign Fields</b>   Not applicable, please skip</li> 
	<li><b>System:</b> FAMIS</li>
	<li><b>System Member:</b> (02) Texas A&M University</li>
    <li><b>Department/SubDepartment:</b> IQSE</li>
	<li><b>Account:</b> (292118 00000) CRI - CTR FOR BIOPHOTONICS (IQSE)</li>
    <li><b>Account Attribute:</b>(S) STATE</li>
	<li><b>Department Reference Number:</b> SS2019</li>
</ul>
<li> When all information has been entered into the Request Header, Click on the <b><u>Expense tab</u></b> (note tabs given under "Request" title) and enter the following information:</li>
<ul>
    <li><b>Lodging Expense:</b> (leave blank since dorm costs are being direct billed to the University)</li>
    <li><b>Individual Meals:</b> Click "Meals" and enter 40$, then click "Save" (each traveler will receive a maximum of 20$/day for traveling to and from Casper; reimbursement will be for actual cost up to the maximum allowed off receipts; receipts must be in your name, itemized, and show proof of payment in order to be valid; all other meals are provided for and will be direct billed to TAMU).</li>
    <li><b>Transportation:</b> Click "Airfare", enter 500$, then click "Save" (for airfare estimate)</li>
    <li><b>Transportation:</b> Click "Car Rental", </li> (those renting the rental car only should add this expense to the travel request)
	<ul><li>enter 600$; </li>
	<li>in the Description field, enter the to/from information, e.g., "from Denver, CO to Casper, WY on 7/21/18, then in Casper, WY 7/21/18 to 7/27/18, from Casper, WY to Denver, CO on 7/27/18" </li>
	<li>In the Notes field, enter the name of the people you are sharing the rental car with</li>
	<li>then click "Save" </li>
	<li><font color="#FF0000"><b>Note: only rental car group leaders should be claiming rental cars; rental car groups must be approved by the Business Office  <u>PRIOR</u> to submission of the Travel Request.</b></font> </li></ul>
    <li><b>Transportation:</b> Click "Gasoline", enter 100$, Click "Save"</li>
</ul><br><br> 


<br>For more information please click: 
<a href="http://it.tamus.edu/concur/concur-travel-and-expense-system/concursitemap/" target="_blank"><font color="#000000">http://it.tamus.edu/concur/concur-travel-and-expense-system/concursitemap/</a><br><br>
<br>

<br><br>
<br><br>




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