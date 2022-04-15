<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="created" content="Wed, 17 Nov 2010 21:05:45 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IQSE</title>

<LINK REL=StyleSheet HREF="../../../../person.css" TITLE="basic-1"/>
<link rel="stylesheet" type="text/css" href="print.css" media="print" /> 
      
</head>


<body>
<?php 
$id = $_GET['id'];
?> 
<div id="outer">
	<div id="left" class="divtest">
<br><br><br><br>
<!--  -----------------------  Enter LEFT Content ---------------------- -->

<br><br>

<?php include("../../include/leftmenu-2.php"); ?>
		
	</div>
<!--  -----------------------  Begin Center Content ---------------------- -->
	<div id="centrecontent">

<div style=" text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table width="98%" border="0" cellpadding="2" cellspacing="2" style="border-width: 0px; background-color: #ffffff;">
<tr valign="top">

<!-- ============================== Enter Center Content ============================  -->

<center>  <h2> TAMU PQE Registered Speakers</h2></center><br><br>



<?php
$con = mysql_connect("sql.physics.tamu.edu","iqsedb1","Iqse4u^2");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysql_select_db("SS2011db", $con);

$result = mysql_query("SELECT * FROM WDLS$id");
$num_rows = mysql_num_rows( $result );

echo "<center><b><table border='2'>
<tr>
<td><b>Name</b></td>
<td><b>Email</b></td>
</tr>";
WHILE($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] ."</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "</tr>";
  }
echo "</table> </center>";
echo "<center><b><table border='0'><tbody style=\"font-family:arial\">";
echo "<tr><td><br><br>There are currently $num_rows rows in the table<br></td></tr>";
echo "</table> </center>";

mysql_close($con);
?>


<br><br><br><br><br>
<hr>

<center> Last Updated December 12, 2012 </center>		 
		
  		 			 



<!-- ============================== STOP Center Content Entry ============================  -->

 	</div>
	<div id="clearfooter"></div>
	<!-- to clear footer -->
</div>
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<div id="footer">
  
<?php include("../../include/footer.php"); ?>  		 
		 
</div>

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<div id="header">

<?php include("../../include/header.php"); ?>

</div>

</body>

</html>