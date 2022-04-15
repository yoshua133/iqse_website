<?php 
session_start(); //Allows you to use sessions 
$user = "SaFER"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username7'] == $user AND $_POST['password7'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username7'] = $_POST['username7'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/SaFER/SaFER.php">Login?</a>'); 
  } 
else 
    { 
?> 




<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="created" content="Fri, 16 Dec 2011 18:05:58 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php include("../include/headerSaFER.php"); ?>
<?phpinclude("include/topmenu.php"); ?>
 <?php

$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());

$sql="INSERT INTO SaFERpeople (first, last, email, oloc, ophone, lloc, lphone, fphone, title, title2, title3, dept, dept2, dept3, uname, classification, dbgroupmbr, dbworkgroup, dbstatus, dbdateadd, dbdatechange, dbdateterm, dbFYadd, dbFYterm, dbcomment1, dbcomment2, dbcomment3, dbwaddress, dbdescription) VALUES ('$_POST[first]', '$_POST[last]', '$_POST[email]', '$_POST[oloc]', '$_POST[ophone]', '$_POST[lloc]', '$_POST[lphone]', '$_POST[fphone]', '$_POST[title]', '$_POST[title2]', '$_POST[title3]', '$_POST[dept]', '$_POST[dept2]', '$_POST[dept3]', '$_POST[uname]', '$_POST[classification]', '$_POST[dbgroupmbr]', '$_POST[dbworkgroup]', '$_POST[dbstatus]', '$_POST[dbdateadd]', '$_POST[dbdatechange]', '$_POST[dbdateterm]', '$_POST[dbFYadd]', '$_POST[dbFYterm]', '$_POST[dbcomment1]', '$_POST[dbcomment2]', '$_POST[dbcomment3]', '$_POST[dbwaddress]', '$_POST[dbdescription]')";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysqli_error());
  }
echo "<br><br><center><h3> Person has been Added successfully.</h3> Return to <a href=\"../SaFER/SaFER-1.php\">SaFER Module</a></center>";

mysql_close($link)
?> 
<br><br><br><br><br><br>
  <?php include("../include/footer.php"); ?>
  </body>
</html>

<?php 
    } 
?>  
