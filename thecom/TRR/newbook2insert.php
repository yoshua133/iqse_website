<?php 
session_start(); //Allows you to use sessions 
$user = "TRR"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username5'] == $user AND $_POST['password5'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username5'] = $_POST['username5'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="TRR.php">Login?</a>'); 
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

$sql="INSERT INTO IQSERR (reference, title, author,lastauthor,publish,description,location,ISBN,subject,evans,comment1,comment2,comment3,donator,donatedate,missing,status,outdate,indate,duedate,first,last,UIN,email,altemail,phone,cellphone,afill)  VALUES ('$_POST[reference]','$_POST[title]','$_POST[author]','$_POST[lastauthor]','$_POST[publish]','$_POST[description]','$_POST[location]','$_POST[ISBN]','$_POST[subject]','$_POST[evans]','$_POST[comment1]','$_POST[comment2]','$_POST[comment3]','$_POST[donator]','$_POST[donatedate]','$_POST[missing]','$_POST[status]','$_POST[outdate]','$_POST[indate]','$_POST[duedate]','$_POST[first]','$_POST[last]','$_POST[UIN]','$_POST[email]','$_POST[altemail]','$_POST[phone]', '$_POST[cellphone]','$_POST[afill]')";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysqli_error());
  }

echo "<br><br><br><br><center><h3> Book has been Added successfully.</h3> Return to <a href=\"TRR-1.php\">TRR Module</a></center>";

mysql_close($link)
?> 
<br><br><br><br><br><br><br><br>
  </body>
</html>
<?php include("include/footer.php"); ?>
<?php 
    } 
?> 