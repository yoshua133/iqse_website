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

<?php include("include/header.php"); ?>
<?php include("include/topmenu.php"); ?>

<center>  <h2> List of Books Currently Checked Out of the Townes Reading Room</h2></center><br>



<?php
$con = mysql_connect("sql.physics.tamu.edu","iqsedb1","Iqse4u^2");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysql_select_db("SS2011db", $con);

$result = mysql_query("SELECT * FROM IQSERR WHERE status='yes'AND missing='no' ORDER BY last ASC" );

echo "<center><b><table border='2'>
<tr>
<td><b>Date Checked Out:</b></td>
<td><b>First Name:</b></td>
<td><b>Last Name:</b></td>
<td><b>Email:</b></td>
<td><b>Reference No.:</b></td>
<td><b>Title:</b></td>
</tr>";
WHILE($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['outdate'] . "</td>";
  echo "<td>" . $row['first'] . "</td>";
  echo "<td>" . $row['last'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['reference'] . "</td>";
  echo "<td>" . $row['title'] . "</td>";
  echo "</tr>";
  }
echo "</table> </center>";

mysql_close($con);
?>
<?php echo "<br><br><br><br><br><br><br><br><br>";?>
<?php include("include/footer.php"); ?>
<?php }?>