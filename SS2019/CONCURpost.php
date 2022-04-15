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


<center><h3>CREATING A CONCUR EXPENSE REPORT</h3></center><br>

<font color="#FF0000">After your trip, you will need to complete a CONCUR Expense Report.</font> <br><br>
<h4>Instructions for Creating an Expense Report</h4>
<ol type="1">
    <li><b>Login to:</b> Single Sign On (<a href="http://sso.tamu.edu" target="_blank">http://sso.tamu.edu</a>)</li>
	<li><b>Select:</b> Concur.</li>
    <li><b> Under the "Request" tab, Select:</b> "View Requests"</li> then create a new expense report by either:</li>
<ul>
<li>Open approved travel request and click "Create New Expense Report" button or</li>
<li>Click the "Expense" link in "action" column on the same line as your approved travel request.</li>
</ul>
<li> The usual report header will appear. Enter trip details not already populated via the inital Travel Request. Specifically:</li> 
<b>Report Header Details:</b><br>
<ul><li><b>Destination: </b>should auto populate</li>
<li><b>Trip Start Date: </b>should auto populate</li>
<li><b>Trip End Date: </b> should auto populate</li>
<li><b>Report Date: </b> system assigned, i.e., date you are created the Expense Report</li>
<li><b>Policy: </b>FAMIS</li>
<li><b>Purpose and Benefit: </b>  should auto populate</li>
<li><b>Report Key: </b>system assigned</li>
<li><b>System Member: </b> (02) Texas A&M University</li>
<li><b>Department/SubDepartment: </b> IQSE </li>
<li><b>Account:</b> (292118 00000) CRI - CTR FOR BIOPHOTONICS (IQSE)</li>
<li><b>Account Attribute: </b>(S) State</li>
<li><b>Personal Travel: </b>should auto populate</li>
<li><b>Department Reference: </b> should auto populate (SS2019) </li>
<li><b>Travel Classification: </b>should auto populate</li>
<li><b>Notes: </b>should auto populate</li>
<li><b><font color="#FF0000">Status: </b>Select "Final" for all post-travel Expense Report. </li>
</font></ul><br>
<li><b>Select: </b> "Next" to continue. </li>
The next screen will display a list of credit card charges (expenses paid within the CONCUR system). 
<li><b>Select:  </b> the charges needing to be reported on the current Expense Report bay placing a check mark next to each to be imported, then Click "Import" . </li>
<li><font color="#FF0000"><b>Note:</b> If your plane ticket was purchased on the STATE Credit Card, you will
need to import these charges into your expense report in order for the credit
card expenses to be paid. Once imported the system will automatically
indicate "payment type" of the expense for the imported airfare and agency
fee as "travel card agency liability", indicating the expense reimbursement
will be made from the IQSE account to TAMU directly, since TAMU paid the
credit card bill prior to the traveler going on travel. <br><br>If personal travel is
involved and the <u>actual cost is greater than the quote</u>, the expense will need to
be itemized with the <u>"quoted"</u> amount being listed as <u>"travel card agency
liability"</u> and the <u>additional amount</u> payment type being listed as <u>"out-of-pocket"</u>
with both quote and actual expenses being attached to the expense
report. TAMU will then send the traveler a bill for the "out-of-pocket"
expense so that the traveler reimburses TAMU the additional expense which
TAMU paid on the ticket prior to the traveler going on travel. If the <u>actual
expense was less than the quoted</u> amount, this should be indicted in the
comments section and both the quote and actual expenses should be attached.
The "payment type" should remain <u>"travel card agency liability."</u>
</font></li><br>

The checked expenses you wished to be imported then move from the right side of the screen (smart expense column) to the left side of the screen (Expenses).<br><br>
There are various icons listed under the date of each expense. The "<font color="#0000FF">blue</font>" symbol which appears to have a lightning bolt represents the presence of an electronic receipt.  Clicking on this icon will allow you to view the receipt.</b> <br>
<br>

<h4>For items without an e-receipt (e.g., imported airfare and agency fee expenses):</h4> 
<li><b>Double Click: </b> "Expense Name" (Description given in blue under the "Expense Type" column). This will open up a detail description (in right side window) for the Expense Name selected allowing you to complete details,  edit amounts/remove personal expenses from the reimbursement request, etc. </li>
<br>

<h4>To remove personal expense:</h4> 
<li><b>Click:</b> "itemize"  (bottom of the Expense Window on right hand side of screen). </li>
<li><b>Select:</b> "Expense Type" to be reduced in the drop down menu which appears.   </li>
<li><b>Scroll down, enter amount, and check box next to "Personal Expense (do not reimburse)"</b></li>
<li><b>Click: </b>Save</li>
In upper right hand corner of Expense Window the remaining balance of expense to be itemized will appear as well as the drop down expense menu.<br><br>
 Select Expense to itemize (again), repeat above steps, but do NOT check "Personal Expense (do not reimburse)" box in order that the remainder of the expense will be added as a business expense to be reimbursed in the List of Expenses in the left hand column.  
<li><b>Click: </b> Save (remainder of itemized expense should now appear in the left hand window) </li>

<br>
<h4>Add a new Expense:</h4>
<li><b>Click: </b> "+ New Expense" (located in the menu just above the Expense window on the left hand side of the screen).  A New Expense Window will open on the right hand side of the screen. </li>
<li><b>Select: </b> "Expense Type" in the drop down menu and then fill in the Details </li>

<b>Example: </b>Personal Car Mileage
<ol>
<li><b>Select Transaction Date: </b> Enter Date of Receipt </li>
<li><b>Purpose of the Trip: </b>Enter description, e.g., for car mileage description would be "From Office to Airport". </li>
<li><b>From Location: </b>Address of Office</li>
<li><b>To Location: </b>Address of Airport</li>
If calculating mileage please note the "mileage calculator" link at the bottom of the "New Expense Window" (scroll to bottom of active window) 
<li><b>Click: </b> Mileage link. This will bring up the mileage. </li> 
If mileage is round trip 
<ul>
<li><b>Click: </b> "make round trip link" </li>
<li><b>Click: </b> "Add mileage to Expense" (Else just click "Add Mileage to Expense"). </li>
</ul>
The mileage will then be added into the new expense window.  The amount of the mileage reimbursement is calculated automatically. 
<li><b>Verify Travel Classification: </b> (in-state, out-of-state, foreign, etc.) </li>
</ol>
<li><b>Click: </b> Save</li><br>
<br>

<h4>Attaching Receipts</h4>
<b>Select:</b> "Receipts" tab to manage your receipts. 
<ul>
<li><b>Method 1: </b> Using an App to upload receipts while on travel. Retrieve receipts by clicking "+New Receipts" and then "Receipt Store" (upper right hand corner of the New expense Window on right hand side of screen).  To attach a receipt to an expense entry: </li>
<ul>
<li><b> Click:</b> on receipt in the "Receipt Store" which is to be added to the expense report. Then drag and drop the receipt onto the appropriate expense entry. </li>
When you attach the receipt to the expense, the icon changes to a "Receipt Received" icon. To view the attached receipt, mouse over the "Receipt Received" icon. Click "Detach From Entry" to remove this receipt from the expense. 
</ul><li><b>Method 2: </b> Scan receipt images (e.g. .pdf) to your computer, then add to Expense Report. To add to the expense report: </li>
<ul>
<li><b>Click: </b> "Receipts" located on menu just above Expense Window on left hand side of screen. </li> 
<li><b>Select: </b> "Attach Receipt Image", then navigate to where your receipts have been stored on your computer. </li>
<li><b>Select: </b> Receipt file</li>
<li><b>Click: </b> Open</li>
<li><b>Click: </b>Upload</li>
Message will appear beneath browse field indicating image has been uploaded. 
<li><b>Click: </b>Close. </li>
<li><font color="#FF0000"><b>Note: it is no longer necessary to attach a receipt line item by line item. It is acceptable to scan all documents into one pdf file and attach all at once using Method 2. If this is done, please be sure all ducmentation is included and "DO NOT" check each oif the boxes which appear as this will upload the receipts multiple times (as many times as you check a box)</b></font>. </li>
</ul>
</ol>
Note: Scanned images may be of the form: .png, .jpg, .jpeg,.pdf, or .tiff with a limit of 5MB per file. Best results are for black and white, 300 dpi. Please know that the group computers in the group room (IQSE 562) are able to scan in .pdf easily. The student workers would be happy to help you if you have not used the scanners before. <br><br>
<font color="#FF0000">Only the Traveler can Submit the Expense Report since the Traveler will be certifying that the expenses are true, correct, and unpaid to the best of their knowledge and that the expenses were incurred in the course of official business, research, or other sponsored activities and can be properly charged to account(s) listed.<br><br>
</font>
<br>

<h4>To Submit Expense Report:</h4>
<ul>
<li><b>Click: </b> Submit </li>
<li><b>Click: </b> Accept & Submit . </li> 
A Report Submit Status window then pops-up indicating the Report was submitted successfully.  
<li><b>Click: </b>Close. </li>
</ul>
<br>

<h4>To View the Status of a Report</h4>
<ul>
<li><b>In My CONCUR (homepage)Click: </b>Expense Tab, then if the report is not visible, "click" on "Report Library" (upper right hand corner). </li><br><br>
A list of submitted Expense Reports will appear. The status of a report can be found by looking in the "status" column.<br><br>
 Once the expense report has been approved, the traveler will receive an email notification 
</ul>
For more information please click of the following link: <a href="http://it.tamus.edu/concur/concur-travel-and-expense-system/concursitemap/" target="_blank">http://it.tamus.edu/concur/concur-travel-and-expense-system/concursitemap/</a>

<br>
<br>
<br>
<br>




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
}?>

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