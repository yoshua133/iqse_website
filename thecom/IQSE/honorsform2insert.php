<?php 
session_start(); //Allows you to use sessions 
$user = "IQSE"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username4'] == $user AND $_POST['password4'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username4'] = $_POST['username4'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/IQSE/IQSE.php">Login?</a>'); 
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
  
<?php include("include/header.php"); ?>
<?php include("include/topmenu.php"); ?>

 <?php

$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());

$sql="INSERT INTO IQSEhonors (awardname, himg1, himg2, himg3, tlink1, tlink2, tlink3, ppldb, year, awardeename1, awardeename2, awardee1, awardee2, dbcomment1, dbcomment2, dbcomment3, datereceived, placereceived) VALUES ('$_POST[awardname]', '$_POST[himg1]', '$_POST[himg2]', '$_POST[himg3]', '$_POST[tlink1]', '$_POST[tlink2]', '$_POST[tlink3]', '$_POST[ppldb]', '$_POST[year]', '$_POST[awardeename1]', '$_POST[awardeename2]', '$_POST[awardee1]', '$_POST[awardee2]', '$_POST[dbcomment1]', '$_POST[dbcomment2]', '$_POST[dbcomment3]', '$_POST[datereceived]', '$_POST[placereceived]')";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysqli_error());
  }
echo "<br><br><center><h2> Award or Honor Information has been Added successfully.</h2> Return to <a href=\"../IQSE/IQSE-1.php\">IQSE Module</a></center>";

mysql_close($link)
?> 
<br><br><br><br><br><br>
<small><div align="center"><?php include("include/footer.php"); ?></div></small>
   
  </body>
</html>

<?php 
    } 
?>  
