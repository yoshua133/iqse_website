<?php include("../include/session.php"); ?>
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
    <div class="columns small-1 custom-400-small-1 column-1"></div>
    <div class="columns small-11 medium-12 custom-400-small-11">
      <div class="html-element textstyle">


<?php
/**
 * If user is not logged in, then do not display anything.
 * If user is logged in, then display the form to edit
 * account information, with the current email address
 * already in the field.
 */
if($session->logged_in){
?>





<!-- ============================== Enter Center Content ============================  -->
<?php $username=$_POST['username'];
If($session->username == $username){
   
//registration2_change_form.php
?>

<html><head><title>Change Registration Form</title>
<style type="text/css">
td {font-family: tahoma, arial, verdana; font-size: 10pt }
</style>



</head>
<body>
<?php
include('../../config.php');
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($link, DB_NAME);

$query=" SELECT * FROM SSRegForm WHERE username='$username'";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$first=mysql_result($result,$i,"first");
$last=mysql_result($result,$i,"last");
$email=mysql_result($result,$i,"email");
$dorm=mysql_result($result,$i,"dorm");
$affil=mysql_result($result,$i,"affil");
$present=mysql_result($result,$i,"present");
$title=mysql_result($result,$i,"title");
$constraints=mysql_result($result,$i,"constraints");
$citizen=mysql_result($result,$i,"citizen");
$visa=mysql_result($result,$i,"visa");
$sponsor=mysql_result($result,$i,"sponsor");
$status=mysql_result($result,$i,"status");
$TXEmployee=mysql_result($result,$i,"TXEmployee");
$roommate=mysql_result($result,$i,"roommate");
$gender=mysql_result($result,$i,"gender");
$arrival=mysql_result($result,$i,"arrival");
$depart=mysql_result($result,$i,"depart");
$rentalcar=mysql_result($result,$i,"rentalcar");
$licensed=mysql_result($result,$i,"licensed");
$dinner=mysql_result($result,$i,"dinner");
$guest=mysql_result($result,$i,"guest");
$gname=mysql_result($result,$i,"gname");
$transplan=mysql_result($result,$i,"transplan");
?>


<center>

<h3>Update Registration Form</h3>
<table width="500" cellpadding="10" cellspacing="0" border="0" >
<tr><!-- Row 1 -->
     <td align="right" width="200">
<form action="registration_change_record.php" method="POST">
<input type="hidden" name="ud_username" value="<?php echo "$username" ?>">
First Name: 
</td><td>
<input type="text" size="35"  name="ud_first" value="<?php echo "$first"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
Last Name: 
</td><td>
<input type="text" size="35"  name="ud_last" value="<?php echo "$last"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
Email: 
</td><td>
<input type="text" size="35"  name="ud_email" value="<?php echo "$email"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
Affiliation: 
</td><td>
<input type="text" size="35"  name="ud_affil" value="<?php echo "$affil"?>"><br>
</td></tr>
<!--/*<tr align="center" valign="top">
<td align="center" colspan="1">
I am giving a:<br>
<small>(Poster, Talk, n/a only)</small>
</td><td align="center" colspan="1">
<input type="text" size="6"  name="ud_present" value="<?php echo "$present"?>"><br>
</td></tr>*/-->
<tr><!-- Row 1 -->
     <td align="right" width="200">
Presentation:<br>
<small>(poster, talk, or n/a only)</small> 
</td><td>
<input type="text" size="35"  name="ud_present" value="<?php echo "$present"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
Title: 
</td><td>
<input type="text" size="35"  name="ud_title" value="<?php echo "$title"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
Constraints: <br>
<small>(enter "none" if none)</small>
</td><td>
<input type="text" size="35"  name="ud_constraints" value="<?php echo "$constraints"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
US Citizen or Permanent Resident: 
<br>
<small>(yes or no (lower case only))</small>
</td><td>
<input type="text" size="35"  name="ud_citizen" value="<?php echo "$citizen"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
Visa: <br>
<small>(OPT, F1, J1, H1B, n/a, etc.)</small>
</td><td>
<input type="text" size="35"  name="ud_visa" value="<?php echo "$visa"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
Sponsor: 
</td><td>
<input type="text" size="35"  name="ud_sponsor" value="<?php echo "$sponsor"?>"><br>
</td></tr>
<!--/*<tr align="center" valign="top">
<td align="center" colspan="1">
Need a Roommate?:<br>
<small>(Yes/No only)</small><br>
</td><td align="center" colspan="1">
<input type="text" size="3"  name="ud_roommate" value="<?php echo "$roommate"?>"><br>
</td></tr>*/-->
<tr><!-- Row 1 -->
     <td align="right" width="200">
Status: <br>
<small>(faculty, postdoc, GS, UG, etc.)</small>
</td><td>
<input type="text" size="35"  name="ud_status" value="<?php echo "$status"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
State of Texas Employee:<br>
<small>(yes or no only)</small> 
</td><td>
<input type="text" size="35"  name="ud_TXEmployee" value="<?php echo "$TXEmployee"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
Do you plan to stay in the Dorm?: <br>
<small>(yes or no lower case only)</small>
</td><td>
<input type="text" size="35"  name="ud_dorm" value="<?php echo "$dorm"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
Do you need a Roommate?: <br>
<small>(yes or no lower case only)</small>
</td><td>
<input type="text" size="35"  name="ud_roommate" value="<?php echo "$roommate"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
Gender: <br>
<small>(male or female only)</small>
</td><td>
<input type="text" size="35"  name="ud_gender" value="<?php echo "$gender"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
Arrival: <br>
<small>(enter UK if unknown)</small>
</td><td>
<input type="text" size="35"  name="ud_arrival" value="<?php echo "$arrival"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
Departure: 
<br>
<small>(enter UK if unknown)</small>
</td><td>
<input type="text" size="35"  name="ud_depart" value="<?php echo "$depart"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
Will you need transportation assistance from the airport to Casper College (and back)?:
<br>
<small>(yes or no lower case only)</small>
</td><td>
<input type="text" size="35"  name="ud_transplan" value="<?php echo "$transplan"?>"><br>
</td></tr>
<tr><td colspan="2">
<center><font color="#FF0000"><b>Note: If yes, arrival/departure information must be submitted by July 1 (via update to your registration form). If not received by July 1, it is assumed you will provide your own transportation.</b></font><br></center>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
Looking for a rental car group?: 
<br>
<small>(yes or no (lower case only))</small>
</td><td>
<input type="text" size="35"  name="ud_rentalcar" value="<?php echo "$rentalcar"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
TAMU Licensed Driver: 
<br>
<small>(yes or no (lower case only))</small>
</td><td>
<input type="text" size="35"  name="ud_licensed" value="<?php echo "$licensed"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
I will be attending dinner? <br>
<small>(yes or no (lower case only))</small>
</td><td>
<input type="text" size="35"  name="ud_dinner" value="<?php echo "$dinner"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
I will bring a guest to the dinner? 
<small>(yes or no (lower case only))</small>
</td><td>
<input type="text" size="35"  name="ud_guest" value="<?php echo "$guest"?>"><br>
</td></tr>
<tr><!-- Row 1 -->
     <td align="right" width="200">
Guest Name(s): 
</td><td>
<input type="text" size="35"  name="ud_gname" value="<?php echo "$gname"?>"><br>
</td></tr></table><br><br>
<input type="Submit" value="Update"></form>
<?php
++$i;
}
}else{
echo "<center><h2>Username entered does not match registered participant account.<br>"
     ."Please re-enter your username</h2></center>";
}
?>

<br><br><br><br><br>
 

<!-- ============================== STOP Center Content Entry ============================  -->

<?php
}
?></div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/outofview.js"></script>
  <script src="js/what-input.min.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>$(document).foundation();</script>
</body>

</html>