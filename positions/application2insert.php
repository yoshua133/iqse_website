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

$sql="INSERT INTO IQSEpeople (name, email, vemail, group, sdate, vstatus, ref1, ref2, ref3) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[vemail]', '$_POST[group]', '$_POST[sdate]', '$_POST[vstatus]', '$_POST[ref1]', '$_POST[ref2]', '$_POST[ref3]')";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysqli_error());
  }
echo "<br> <center><h3>Thank you for your application!</h3></center>";

mysql_close($link)
?> 
   
  </body>
</html>

<?php 
    } 
?>  