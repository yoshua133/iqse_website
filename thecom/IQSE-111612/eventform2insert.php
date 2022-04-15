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
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/CTP/CTP.php">Login?</a>'); 
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
  
<?php include("include/topmenu.php"); ?>

<div align="center"><h2><font color="#500000">Welcome to the IQSE Module </h2></font><br></div>
 <?php

$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());

$sql="INSERT INTO IQSEevent (speakername, speakeraffil, speakertitle, speakerabstract, talkdate, talktime, talkloc, speakerhost,  hostemail, dbposter, talktype, talkbuilding, talkyear, dborder, eventDate, dbcomment1, dbcomment2, dbcomment3) VALUES ('$_POST[speakername]', '$_POST[speakeraffil]', '$_POST[speakertitle]', '$_POST[speakerabstract]', '$_POST[talkdate]', '$_POST[talktime]', '$_POST[talkloc]', '$_POST[speakerhost]', '$_POST[hostemail]', '$_POST[dbposter]', '$_POST[talktype]', '$_POST[talkbuilding]', '$_POST[talkyear]', '$_POST[dborder]', '$_POST[eventDate]', '$_POST[dbcomment1]', '$_POST[dbcomment2]','$_POST[dbcomment3]')";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysqli_error());
  }
echo "<br> <center><h3>Thank you for registering!</h3></center>";

mysql_close($link)
?> 
   
  </body>
</html>

<?php 
    } 
?>  