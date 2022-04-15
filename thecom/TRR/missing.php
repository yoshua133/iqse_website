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
<?php
/**
 * User has already logged in, so display relavent links, including
 * a link to the admin center if the user is an administrator.
 */
?>
<html><body>
<br>
<center>	<?php include("include/header.php"); ?>
<?php include("include/topmenu.php"); ?>
</center>		 

<center>  <h2> Townes Reading Room Missing Books</h2></center>



<?php
$con = mysql_connect("sql.physics.tamu.edu","iqsedb1","Iqse4u^2");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysql_select_db("SS2011db", $con);

$query=" SELECT * FROM IQSERR WHERE missing LIKE '%yes%'";

?>

<center><h3>List of Missing Books</h3></center>
<?php
$result=mysqli_query($link, $query);
echo "<center><b><table width=\"85%\" border='2'>
<tr>

<td><b>Location:</b></td>
<td><b>Title:</b></td>
<td><b>Author:</b></td>
<td><b>Reference:</b></td>
<td><b>Missing:</b></td>
</tr>";
WHILE($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['location'] . "</td>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['author'] . "</td>";
  echo "<td>" . $row['reference'] . "</td>";
  echo "<td>" . $row['missing'] . "</td>";
  echo "</tr>";
  }
echo "</table> </center>";


++$i;
?>
<br><br><br><br><br><br>
</body>

</html>
<?php include("include/footer.php"); ?>
<?php } ?>