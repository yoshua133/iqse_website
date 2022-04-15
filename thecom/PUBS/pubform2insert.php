<?php 
session_start(); //Allows you to use sessions 
$user = "IQSEpubs"; //Username to protected page. 
$pass = "Letmein2"; //Password to protected page. 
if($_POST['username6'] == $user AND $_POST['password6'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username6'] = $_POST['username6'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/PUBS/PUB.php">Login?</a>'); 
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

$sql="INSERT INTO IQSEpubs(pubdoi, dbpub, dbunames, pubDate,  dbcomment1, dbcomment2, dbcomment3, dbcomment4) VALUES ('$_POST[pubdoi]', '$_POST[dbpub]', '$_POST[dbunames]', '$_POST[pubDate]', '$_POST[dbcomment1]', '$_POST[dbcomment2]', '$_POST[dbcomment3]', '$_POST[dbcomment4]')";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysqli_error());
  }
echo "<br><br><center><h2> Publication Information has been Added successfully.</h2> Return to <a href=\"../PUBS/PUB-1.php\">IQSE Pubs Module</a></center>";

mysql_close($link)
?> 
<br><br><br><br><br><br><br><br><br><br><br><br>
<small><div align="center"><?php include("include/footer.php"); ?></div></small>
   
  </body>
</html>

<?php 
    } 
?>  