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

<?php 
$username2=$session->username;
//echo "Username = $username2";


$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($link, DB_NAME);
$query = mysqli_query($link, "SELECT * FROM SS2019invite WHERE username = '$username2'"); 
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
 echo "<br><br><br><center><h3>You have already submitted an Invitation Request Form. To view invitation letter <a href=\"invitation.php\" target=\"_blank\">click this link</a>. If information was entered incorrectly, email <a href=\"mailto:iqse@tamu.edu?subject=SS2019 invitation request problems\">iqse@tamu.edu</a> in order for the database entry to be deleted so that you may enter another one.</h3><br><br><br><br><br><br>";} 
else{ 
?>

<center><h3>Summer School Invitation Request Form</h3></center>

<form action="invite2insert.php" method="POST">
<br>
<center> <table width="500" cellpadding="10" cellspacing="0" border="0" >
  <tr><!-- Row 4 -->
     <td align="right">Current Date:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="tdate" value="April 4, 2019"></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">title:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="title" value="Prof., Dr., Mr., Ms., etc."></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="right" width="200">First Name:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="fname" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 2 -->
     <td align="right">Last Name:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="lname" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 3 -->
     <td align="right">Username:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="username" value="<?php echo $session->username; ?>"></td><!-- Col 2 -->
  </tr>
  
  <tr><!-- Row 4 -->
     <td align="right">Address Line 1:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="addressline1" value=""></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Address Line 2:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="addressline2" value="" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Address Line 3:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="addressline3" value="" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="right">Address Line 4:&nbsp;</td><!-- Col 1 -->
     <td><input type="text" size="35"  name="addressline4" value="" ></td><!-- Col 2 -->
  </tr>
  </table><br><br>
<input type="Submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="Reset" value="Reset" />
</form></center>

<br><br>

<!-- ============================== STOP Center Content Entry ============================  -->


<?php
}
?>


</td></tr>
</table>

<table><tr><td></td></tr>
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