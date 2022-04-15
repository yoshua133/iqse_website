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
extract($_POST); 
$sql="INSERT INTO SaFERplants(plantcolor1, plantcolor2, plantcolor3, plantcolor4, plantcolor5, planttype, plantloc, leafshape, leafmargin, treebranching, barktype, seedtype, familyname, sciname, commonname, dbname, dbphoto1, dbphoto2, dbphoto3, dbphoto4, dbphoto5, plantlink, dbdescription) VALUES ('$plantcolor1', '$plantcolor2','$plantcolor3', '$plantcolor4', '$plantcolor5', '$planttype', '$plantloc', '$leafshape','$leafmargin','$treebranching','$barktype','$seedtype','$familyname', '$sciname', '$commonname', '$dbname', '$dbphoto1','$dbphoto2','$dbphoto3', '$dbphoto4', '$dbphoto5','$plantlink','$dbdescription')";

//echo "$birdcolor1";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysqli_error());
  }
echo "<br><br><center><h3> Plant has been Added successfully.</h3> Return to <a href=\"../SaFER/SaFER-1.php\">SaFER Module</a></center>";

//echo "$birdcolor1";

mysql_close($link)
?> 
<br><br><br><br><br><br>
  <?php include("../include/footer.php"); ?>
  </body>
</html>

<?php 
    } 
?>  
