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



<html>
<head>
<title>IQSE Publication Management System </title>

</head>


<body>
<?php $pubDate2=$_POST['pubDate'];?>
<?php include("../include/header-1.php");
include("../include/topmenu-1.php"); ?>

<font face="Arial">
<?php

$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());

$query=" SELECT * FROM IQSEpubs WHERE pubDate LIKE '%$pubDate2%'";

?>
<?php
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);

If($num>0){
echo "<center><a href=\"../pub_checkout_form.php\"><font face=\"Arial\"><b>Search Again</b></a> &nbsp;&nbsp;&nbsp; <a href=\"../pubform.php\"><b>Continue</b></a>&nbsp;&nbsp;&nbsp; <a href=\"../2updatepub/pub_update_form.php\"><b>Modify an Existing Entry</b></a></font></center><br><br>";
echo "<h3>Search Results for <font color=\"#FF0000\">$pubDate2</font>:</h3><br>";
echo "<center><b><table border='2' cellpadding='7'><tbody style=\"font-family:arial\">
<tr>
<td><b><b><font color=\"#FF0000\">ID</font>:</b></b></td>
<td><b><b>DOI:</b></b></td>
<td><b><b>Publication Information</b></b></td>
</tr>";
WHILE($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['pubDate'] . "</td>";
  echo "<td>" . $row['dbpub'] . "</td>";
  echo "</tr>";
  }
echo "</table> </center>";


++$i;
?>
</font>

<?php
}else{echo "<br><br><div align=\"center\"><h3>No matches found for <font color=\"#FF0000\">$pubDate2</font>.</h3>";
echo "<center><a href=\"../pub_checkout_form.php\"><font face=\"Arial\"><b>Search Again</b></a> &nbsp;&nbsp;&nbsp; <a href=\"../pubform.php\"><b>Continue</b></a>&nbsp;&nbsp;&nbsp; <a href=\"../2updatepub/pub_update_form.php\"><b>Modify an Existing Entry</b></a></font></center><br><br>";
}
?>
</font>

<br>

<br><br>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include("../include/footer-1.php");?>
</body>

</html>
<?php } ?>

