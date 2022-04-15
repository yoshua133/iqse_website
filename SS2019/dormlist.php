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
if($session->logged_in){
   ?>

<center>  <h3> Registered Dorm List</h3></center>

Below is a list (alphabetical by last name) of those who have indicated they want to stay in the dorm. If your name does not apear on the list, please make sure you have completed the <a href="regform.php">Summer School Registeration Form</a>. If you have completed the Summer School Registration form, please verify using the <a href="4update/registration_update_form.php">Update Summer School Registration Form</a> that you entered "yes" to the question asking whether you want to stay in the Dorm as typos can prevent your name from appearing on the list. If you have registered, verified your answer is "yes" and your name is stll not appearing on the list, please email <a href=\"mailto:iqse@tamu.edu?subject=SS2019 Dorm Registration\">iqse@tamu.edu</a>  and we will get you on the list and track down the problem. <br><br>


<?php
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($link, DB_NAME);
$result = mysqli_query($link, "SELECT * FROM SSRegForm WHERE dorm LIKE '%yes%' ORDER BY last ASC" )
or die("SELECT Error: ".mysqli_error());
$num_rows = mysqli_num_rows($result);
if ($myrow = mysqli_fetch_array($result)) {

echo "<center><table border=1>\n";
echo "<tr><td><b>Last Name:</b></td><td><b>First Name:</b></td><td><b>Status:</b></td></tr>\n";
do {
printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n", $myrow["last"], $myrow["first"], $myrow["status"]);
} while ($myrow = mysqli_fetch_array($result));
echo "</table>\n </center>";
echo "<center><b><table border='0'><tbody style=\"font-family:arial\">";
echo "<tr><td><br><br>There are currently $num_rows rows in the table<br></td></tr>";
echo "</table> </center>";

}
?>
<table><tr><td></td></tr>
<?php include("footer.php"); ?>
</td></tr>
</table>

<br><br><br><br><br><br>
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


<?php
}

?>



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