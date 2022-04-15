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
 
<?php 
$username2=$session->username;
//echo "Username = $username2";
#include("include/constants.php");

$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($link, DB_NAME);
$query = mysqli_query($link , "SELECT * FROM SSRegForm WHERE username = '$username2'"); 
//echo "$username2";
/*$result = mysqli_query($link, "SELECT * FROM SSRegForm ORDER BY username ASC");
 
 echo "<center><b><table border='0'>
<tr>
<td>username</b></td>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "</tr>";
  }
echo "</table> </center>";*/


$number=mysqli_num_rows($query); 
// echo "    Number of rows selected = ". $number;

if ($number > 0) {  
 echo "<br><br><br><center><h3>You have already registered, please use the <a href=\"4update/registration_update_form.php\">Update Form</a>.</h3></center><br><br><br><br>"; 
} 
else{ 
?>

<center><h3> Summer School Registration Form</h3>

<form action="regform2insert.php" method="POST">
<br>
<center> <table width="500" cellpadding="10" cellspacing="0" border="0" >
  <tr><!-- Row 1 -->
     <td align="right" width="200">First Name:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="first" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 2 -->
     <td align="right">Last Name:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="last" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 3 -->
     <td align="right">Username:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="username" value="<?php echo $session->username; ?>"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Email Address:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="email" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Affiliation:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="affil" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Presentation:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="present" value="(poster, talk, or n/a only)" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Title:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="title" value="TBD" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Constraints:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="constraints" value="none" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">US Citizen or PR:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="citizen" value="(yes or no only)" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Visa:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="visa" value="(OPT,J1,H1,F1,n/a)"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Visa Sponsor:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="sponsor" value="n/a" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Status:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="status" value="(faculty, postdoc, UG, GS, etc.)"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">State of Texas Employee:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="TXEmployee" value="(yes or no only)" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Do you plan to stay in the Dorm?:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dorm" value="(yes or no only)" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Need a Roommate?:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="roommate" value="(yes or no only)" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Gender:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="gender" value="(male or female only)" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Arrival:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="arrival"value="UK" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Departure:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="depart" value="UK" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Will you need transportation assistance from the Casper airport to Casper College (and back)?:<br> &nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="transplan" value="(yes or no only)"></td><!-- Col 2 -->
  </tr>
  <tr><td colspan="2">
  <center><font color="#FF0000"><b>Note: If yes, arrival/departure information must be submitted by July 1 (via update to your registration form). If not received by July 1, it is assumed you will provide your own transportation.</b></font> </center><br>
  </td></tr>
  <tr><!-- Row 4 -->
     <td align="right">Looking for a rental car group?&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="rentalcar" value="(yes or no only)" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Are you a TAMU licensed driver?&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="licensed" value="(yes or no only)" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">I plan to attend the conference dinner.&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dinner" value="(yes or no only)" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Are you bringing a guest to the dinner?&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="guest" value="(yes or no only)" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">What is (are) your guest's name(s)?&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="gname" value="n/a"></td><!-- Col 2 -->
  </tr>
</table><br><br>
<input type="Submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="Reset" value="Reset" />
</form></center>

<br><br></div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/outofview.js"></script>
  <script src="js/what-input.min.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>$(document).foundation();</script>

<?php
}
}
?>

<?php include("footer.php"); ?>
</body>

</html>