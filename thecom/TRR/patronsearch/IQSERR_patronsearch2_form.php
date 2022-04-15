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
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="../TRR.php">Login?</a>'); 
  } 
else 
    { 
?> 

<html>
<head>
<title>IQSERR Title Search </title>

</head>
<body>

<br>
<div align="center">
<?php include("../include/header-1.php"); ?>
<?php include("../include/topmenu-1.php"); ?>
</div>	 


<?php $patron=$_POST['patron'];
?>
<center>


<?php

$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());

$query=" SELECT * FROM IQSERR WHERE last LIKE '%$patron%' OR UIN='$patron'";

?>

<center><h2>Books checked out by <font color="#FF0000">"<?php echo "$patron"; ?>" </font>include:</h2></center>
<?php
$result=mysqli_query($link, $query);
echo "<center><b><table width=\"85%\" border='2'>
<tr>

<td><b>Last Name:</b></td>
<td><b>First Name:</b></td>
<td><b>UIN:</b></td>
<td><b>Title:</b></td>
<td><b>Author</b></td>
<td><b>Checked Out?:</b></td>
<td><b>Check Out Date:</b></td>

</tr>";
WHILE($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['last'] . "</td>";
  echo "<td>" . $row['first'] . "</td>";
  echo "<td>" . $row['UIN'] . "</td>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['author'] . "</td>";
  echo "<td>" . $row['status'] . "</td>";
  echo "<td>" . $row['outdate'] . "</td>";
  echo "</tr>";
  }
echo "</table> </center>";


++$i;
?>
<br><br><br><br><br><br>
<div align="center">
<?php include("../include/footer-1.php"); ?>
</div>
</body>

</html>
<?php } ?>

