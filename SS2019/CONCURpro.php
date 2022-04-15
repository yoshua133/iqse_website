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


<center><h3>SETTING UP YOUR CONCUR PROFILE</h3></center>

<ol type="1">
    <li><b>Login to:</b> Single Sign On (<a href="http://sso.tamu.edu" target="_blank">http://sso.tamu.edu</a>)</li>
	<li><b>Select:</b> Concur.</li>
    <li><b>Click:</b> on the person image (top right hand corner), then click "profile settings".</li>
    <li><b>Select:</b> "Personal Information" under the "Your Information" header on the left-hand navigation. </li>
	<li><b>Verify:</b> pre-loaded content is correct. It should match the photo ID you will be using while traveling. 
	<li><b>Complete remaining requirements</b> (indicated by <font color="#FF8000"><b>[required]</b></font>), <b>preferences, and add personal credit cards</b></li>
Note: If your department has a travel arranger or you have an assistant who manages your travel for you, you can list this person in this section. Please note this is not the same as a delegate discussed below. <font color="#FF0000"><b>IQSE does NOT have a travel arranger.</b></font> TAMU employees whose airfare is being reimbursed on IQSE funds must have their airfare purchased on a State Travel Card through Noel's Travel Agency since the account which will reimburse your travel expenses is a State account. If you do not have a State travel card, please contact the IQSE Business Office (<a href="mailto:tengma@tamu.edu">tengma@tamu.edu</a>). <br><br>
     <li><b>Under the "Expense Settings" header on the left-hand navigation pane, Select:</b> "Expense Delegates"  too setup expense delegates (assists with post-travel activities). You may list as many as you want. </li>
For the IQSE SS2019 purposes please list Teng Ma as your delegates so he will be able to prepare (i.e., edit/correct your entries), view (i.e., review), and receive information (i.e., if there are problems) and approval emails (i.e., to know an expense has been paid) related to your expense reports. <br><br>

To add Teng Ma as an expense delegate on your account (or remove Selina Garcia, Katherine Davis, and/or  Patrick Philpot) do the following: <br><br> 

<b>To Add an Expense Delegate</b>
<ul>
<li><b>Click:</b> "Add Delegate" </li>
<li><b>In the "Search by Employee" box type:</b> "Ma, Teng" or "tengma@tamu.edu" and select "Ma, Teng" from the list of names which appears.</li>
<li><b>Once selected, the delegates name will appear in the expense delegates box in your profile. Once Teng's names appears, then check the following boxes:</b></li>
<ul>
<li>Can Prepare</li>
<li>Can View Receipts</li>
<li>Receive Emails</li>
<li>Can Approve (not the same as submit; allows to modify expenses)</li>
<li>Receive Approval Emails</li>
</ul>
<li> <font color="#FF0000"><b>Once boxes are checked, click "Save"</b></font> else your delegates will still not have access to your documents in CONCUR.</ul><br>

<b>To Delete an Expense Delegate</b>
<ul>
<li><b>Click:</b> the check box next to the name of the delegate you wish to remove </li>
<li>Click "Delete" button</li>
</ul><br>
<li> <font color="#FF0000"><b>Click "Save"</b></font> button, else CONCUR may not save the changes. </ul><br>

<font color="#FF0000">Expense Reports can only be "submitted" by employees themselves. When you are ready to submit, click the submit button. The expense report will then route for approval through the Provost's office. <br>
</font> 

<li><b>Under the "Expense Settings" header on the left-hand navigation, Select: </b>"Expense Preferences"  to setup expense preferences (e.g., email options),</li>
<font color="#FF0000"><b>Under Section entitles 'Prompt" please check both boxes </font></b>so that IQSE will know when the traveler has submitted pre-travel authorization requests and expense reports for approval. Otherwise you will need to email <a href="mailto:tengma@tamu.edu?subject=CONCUR document Approval needed"><font color="#000000">tengma@tamu.edu</font></a> so he will know documents have been submitted for approval. <br><br>
Additional user (e.g., more Email Notifications, Date, Time, Homepage) settings, can be found by selecting "System Settings" under the "Other Settings" header on the left-hand navigation.<br><br>

Homepage preference is found in right hand side under "Other Preferences". <br>

<li>To add mobile access via apps for iPhones, Blackberries, and Android devices, select "Mobile Registration" under the "Other Settings" header on the left-hand navigation.</li>

<br>This will allow you to take pictures of receipts while in travel status and directly upload them into your Concur profile for easier processing of receipts when you go to complete your Expense report following your trip as well as help to ensure maximum reimbursement by avoiding the lost receipt issue (e.g., food receipts). 
</ol> 

For more information, please click the following link:  
<a href="http://it.tamus.edu/concur/concur-travel-and-expense-system/concursitemap/" target="_blank">http://it.tamus.edu/concur/concur-travel-and-expense-system/concursitemap/</a>

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