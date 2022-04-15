<?php include("include/session.php"); ?>

<?php
if($session->logged_in){
   ?>


<?php 
$username2=$session->username;
//echo "username = $username2";
//echo "<br>";

?>
<a href="invite/ltrhdtop.jpg"><img src="invite/ltrhdtop.jpg" width="1100" alt="" title="" border="0" /></a><br><br>


<?php
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($link, DB_NAME);

$result = mysqli_query($link, "SELECT * FROM SS2019invite WHERE username='$username2'");

echo "<table border='0'><tr>";


WHILE($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td style=\"padding-left: 40px;\"> <font size=\"+2\">" . $row['tdate'] ."<br><br>". "</font></td></tr>";
  echo "<tr><td style=\"padding-left: 40px;\"><font size=\"+2\">" . $row['title'] ."&nbsp;". $row['fname']."&nbsp;". $row['lname']."<br>". $row['addressline1'] ."<br>".  $row['addressline2']."<br>". $row['addressline3']."<br>".$row['addressline4']."<br>". "</font></td>";
  echo "</tr>";
  echo "<tr><td style=\"padding-left: 40px;\"><font size=\"+2\"><br>Dear &nbsp;" . $row['title'] ."&nbsp;". $row['lname'].",<br><br></font></td></tr>"; 
  echo "<tr><td style=\"padding-left: 40px; padding-right: 30px; \"><font size=\"+2\">It is a pleasure to invite you to participate in the 2019 Wyoming Summer School 
   on Quantum Science and Engineering to be held July 21 through 27 in Casper, Wyoming. 
   This year's Summer School is being dedicated to Prof. Marlan O. Scully for Lifetime Achievements in Quantum Science. 
  We invite you to present a talk on the topic of your choice. Looking forward to hearing  
  more about your research and seeing you in Wyoming. <br><br>
  Sincerely,<br></font></td></tr>"; 
  echo "<tr><td style=\"padding-left: 40px;\"><a href=\"invite/signature.jpg\"><img src=\"invite/signature.jpg\" width=\"140\"/></a><br></td></tr>";
  echo "<tr><td style=\"padding-left: 40px;\"><font size=\"+2\">Anatoly Svidzinsky<br>(for the program committee)</font></td></tr>"; 
  }
echo "</table> </center>";

mysqli_close($link);
?>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<a href="invite/ltrhdbottom.jpg"><img src="invite/ltrhdbottom.jpg" width="1100" alt="" title="" border="0" /></a>






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