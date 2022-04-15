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
  echo('You are not logged in! <br><br> <a href="http://iqse.tamu.edu/maintenance/LoginSystem/login.html">Login?</a>'); 
  } 
else 
    { 
?> 
<a href="logout.php">Logout</a><br>
<a href="page.php">Page 1</a>
PAGE 2 CONTENT HERE 
<?php 
    } 
?>  