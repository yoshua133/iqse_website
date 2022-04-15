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

<LINK REL=StyleSheet HREF="../person.css" TITLE="basic-1"/>
<link rel="stylesheet" type="text/css" href="../css/print.css" media="print" /> 
 
     
 


</head>


<body>
<div id="outer">
	<div id="left" class="divtest">
<br><br><br><br>
<!--  -----------------------  Enter LEFT Content ---------------------- -->
<br><br>

<?php include("../include/leftmenu-1.php"); ?>


			 			
	</div>
<!--  -----------------------  Begin Center Content ---------------------- -->
	<div id="centrecontent">

		
<!--<center> Quick Links: &nbsp&nbsp 
		   		<a href="#faculty">Faculty</a>&nbsp&nbsp 
				<a href="#staff">Staff</a>&nbsp&nbsp
				<a href="#researchers">Researchers</a>&nbsp&nbsp
				<a href="#gs">Graduate Students</a>&nbsp&nbsp 
				<a href="#visitors">Visitors</a>&nbsp&nbsp	<br><br/></center>
				
	<br>	
<div style=" text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table width="98%" border="0" cellpadding="2" cellspacing="2" style="border-width: 0px; background-color: #ffffff;">
</table>-->

<!-- ============================== Enter Center Content ============================  -->
<?php $person=$_POST['person'];
?>
<table width="98%" cellpadding="5" border="0">
<tbody style="font-family:arial"><tr bgcolor="500000" valign="middle">
<tr>
<td>
       <div align="center"><font size="5" color="500000"><b>Center Directory Search Results for <font color="#FF0000"><?php echo "$person"; ?> </font>:</b></font></div>
</td>
</tr>
</table>

<center>

<font face="Arial">
<?php

include "../config.php";
$link = mysqli_connect($dbhost, $dbuser, $dbpass);
if (! $link)
die("Couldn't connect to MySQL");

mysqli_select_db( $link, $db )
or die("Couldn't open $db: ".mysqli_error());

$query=" SELECT * FROM IQSEpeople WHERE dbstatus='active' AND first LIKE '%$person%' OR dbstatus='active' AND last LIKE '%$person%' ";

?>
<?php
$result=mysqli_query($link, $query);
echo "<center><b><table border='2' cellpadding='7'><tbody style=\"font-family:arial\">
<tr>

<td><b>Name:</b></td>
<td><b>Email</b></td>
<td><b>Office Location</b></td>
<td><b>Office Phone</b></td>
<td><b>Lab Phone</b></td>
</tr>";
WHILE($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td><a href=\"../".$row['classification'].".php?uname=".$row['uname']."\">" .$row['last'].",&nbsp;".$row['first']."</a></td>";
  echo "<td><a href=\"mailto:" . $row['email'] . "\"> ". $row['email'] . "</a></td>";
  echo "<td>" . $row['oloc'] . "</td>";
  echo "<td>" . $row['ophone'] . "</td>";
  echo "<td>" . $row['lphone'] . "</td>";
  echo "</tr>";
  }
echo "</table> </center>";


#++$i;
?>
</font>
<br><br><br>
<center><h3><a href="../people.php"><font face="Arial">Search again?</font></a></h3></center>
		
		
		
		<br><br><br><br><br><br><br><br><br><br>
 <hr><center><br>
<p class="c2"><font face="Arial">Last update:  01 January 2013</font></p></center><br>	
<!-- ============================== STOP Center Content Entry ============================  -->

 	</div>
	<div id="clearfooter"></div>
	<!-- to clear footer -->
</div>
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<div id="footer">
  
  		 <?php include("footer.php"); ?>
</div>

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<div id="header">

<?php include("header.php"); ?>
</div>
 

</body>

</html>


