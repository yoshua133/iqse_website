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


<html><body>
<br>
<center>	 
<?php include("include/header.php"); ?>
<?php include("include/topmenu.php"); ?>
</center>		 

<center>  <h2> Townes Reading Room Current Inventory</h2></center><br><br>



<?php
$con = mysql_connect("sql.physics.tamu.edu","iqsedb1","Iqse4u^2");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysql_select_db("SS2011db", $con);

$result = mysql_query("SELECT * FROM IQSERR ORDER BY ABS(reference) ASC" );

echo "<center><b><table width=\"85%\" border='2'>
<tr>

<td><b>Reference No.:</b></td>
<td><b><b><font color=\"#FF0000\">ID#</font></b>:</b></td>
<td><b>Title:</b></td>
<td><b>Author:</b></td>
<td><b>Checked Out?</b></td>
<td><b>Missing?</b></td>
<td><b>Location:</b></td>
</tr>";
WHILE($row = mysqli_fetch_array($result))
  {
  echo "<tr>";

  echo "<td>" . $row['reference'] . "</td>";
  echo "<td><b><font color=\"#FF0000\">" . $row['id'] . "</font></b></td>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['author'] . "</td>";
  echo "<td>" . $row['status'] . "</td>";
  echo "<td>" . $row['missing'] . "</td>";
  echo "<td>" . $row['location'] . "</td>";
  echo "</tr>";
  }
echo "</table> </center>";

mysql_close($con);
?> <br><br>
</body>
</html>
<?php include("include/footer.php"); ?>
<?php }?>
