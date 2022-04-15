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


<center>  <h3> Staying in the Dorm "No" List</h3></center><br><br>



<?php
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($link, DB_NAME);
$result = mysqli_query($link, "SELECT * FROM SSRegForm WHERE dorm='no' ORDER BY last ASC" )
or die("SELECT Error: ".mysqli_error());
$num_rows = mysqli_num_rows($result);
if ($myrow = mysqli_fetch_array($result)) {

echo "<center><table border=1>\n";
echo "<tr><td><b>Staying in Dorm:</b></td><td><b>Last Name:</b></td><td><b>First Name:</b></td><td><b>Email:</b></td></tr>\n";
do {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n", $myrow["dorm"],$myrow["last"], $myrow["first"], $myrow["email"]);
} while ($myrow = mysqli_fetch_array($result));
echo "</table>\n </center>";
echo "<center><b><table border='0'><tbody style=\"font-family:arial\">";
echo "<tr><td><br><br>There are currently $num_rows rows in the table<br></td></tr>";
echo "</table> </center>";

}
?>



<br><br><br><br><br><br>
<?php
   echo "<center>[<a href=\"userinfo.php?user=$session->username\">My Account</a>] &nbsp;&nbsp;";
   echo "[<a href=\"useredit.php\">Edit Account</a>] &nbsp;&nbsp;";
   if($session->isAdmin()){
      echo "[<a href=\"admin/admin.php\">Admin Center</a>] &nbsp;&nbsp;";
   }
   echo "[<a href=\"process.php\">Logout</a>]&nbsp;&nbsp;";
   echo "[<a href=\"4update/registration_update_form.php\"><u>UPDATE</u> Summer School Registration Form</a>]&nbsp;&nbsp;";
   echo "[<a href=\"mailto:iqse@tamu.edu?subject=SS2019 Information Request\">Contact</a>]&nbsp;&nbsp;</center>";

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

/**
 * Just a little page footer, tells how many registered members
 * there are, how many users currently logged in and viewing site,
 * and how many guests viewing site. Active users are displayed,
 * with link to their user information.
 */
echo "</td></tr><tr><td align=\"center\"><br><br>";
echo "<b>Member Total:</b> ".$database->getNumMembers()."<br>";
echo "There are $database->num_active_users registered members and ";
echo "$database->num_active_guests guests viewing the site.<br><br>";

include("include/view_active.php");

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