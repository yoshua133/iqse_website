<?php 
session_start(); //Allows you to use sessions 
$user = "IQSE"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username'] == $user AND $_POST['password'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username'] = $_POST['username'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/COM.php">Login?</a>'); 
  } 
else 
    { 
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    
  </head>
  <body>
<?php include("../include/headerCTP.php"); ?>
<?phpinclude("include/topmenu.php"); ?>
<br><br>

<div align="center"><h2><font color="#500000"><font face="Arial">Welcome to the CTP Module</font></h2></font><br></div>
 <br> 
  <h3><div align="center"><font face="Arial">Please Login to continue</font></div></h3>
<center>
<form method="post" action="CTP-1.php"> 
<table> 
<tbody style="font-family:arial">
<tr><td>Username:</td><td><input type="text" name="username3" /></td></tr> 
<tr><td>Password:</td><td><input type="password" name="password3" /></td></tr> 
<tr><td></td><td><input type="submit" name="login" value="Log In" /></td></tr> 
</table> 
</form> </center> 

<br><br>  
  <?php include("../include/footer.php"); ?>
  
  </body>
</html>

<?php
}
?>
