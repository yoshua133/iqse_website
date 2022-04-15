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

<LINK REL=StyleSheet HREF="../../person.css" TITLE="basic-1"/>
<link rel="stylesheet" type="text/css" href="print.css" media="print" /> 
 
      
</head>


<body>
<div id="outer">
	<div id="left" class="divtest">
<br><br><br><br>
<!--  -----------------------  Enter LEFT Content ---------------------- -->

<br><br>

<?php include("../leftmenu-2.php"); ?>

	
	</div>
<!--  -----------------------  Begin Center Content ---------------------- -->
	<div id="centrecontent">

<div style=" text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table width="98%" border="0" cellpadding="2" cellspacing="2" style="border-width: 0px; background-color: #ffffff;">
<tr valign="top">

<!-- ============================== Enter Center Content ============================  -->


<?php $author=$_POST['author'];
?>
<center>


<?php

include "../../config.php";
$link = mysqli_connect($dbhost, $dbuser, $dbpass);
if (! $link)
die("Couldn't connect to MySQL");

mysqli_select_db( $link, $db )
or die("Couldn't open $db: ".mysqli_error());

$query=" SELECT * FROM IQSERR WHERE author LIKE '%$author%'";

?>
<table align=center>
<tbody style="font-family:arial">
<tr><td>
<center><h3>Books in the Townes Reading Room by <font color="#FF0000">"<?php echo "$author"; ?>" </font>include:</h3></center>
</td>
</tr>
</table>

<?php
$result=mysqli_query($link, $query);
echo "<center><b><table width=\"85%\" border='2'>
<tbody style=\"font-family:arial\">
<tr>

<td><b>Reference No.:</b></td>
<td><b>Title:</b></td>
<td><b>Author</b></td>
<td><b>Checked Out?</b></td>
<td><b>Location</b></td>
<td><b>Missing</b></td>
</tr>";
WHILE($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['reference'] . "</td>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['author'] . "</td>";
  echo "<td>" . $row['status'] . "</td>";
  echo "<td>" . $row['location'] . "</td>";
  echo "<td>" . $row['missing'] . "</td>";
  echo "</tr>";
  }
echo "</table> </center>";


#++$i;
?>
<br><br>
<!-- ============================== STOP Center Content Entry ============================  -->

 	</div>
	<div id="clearfooter"></div>
	<!-- to clear footer -->
</div>
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<div id="footer">
  
<?php include("../footer-2.php"); ?>  		 
		 
</div>

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<div id="header">

<?php include("../header-2.php"); ?>

</div>

</body>

</html>
