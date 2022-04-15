<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="created" content="Wed, 17 Nov 2010 21:05:45 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>IQSE Faculty List</title>

<LINK REL=StyleSheet HREF="person.css" TITLE="basic-1"/>
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" /> 
</head>


<body>
<div id="outer">
	<div id="left" class="divtest">
<br><br><br><br>
<!--  -----------------------  Enter LEFT Content ---------------------- -->
<br><br>

<?php include("include/leftmenu.php"); ?>


			 			
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

<?php

$dbhost = 'localhost';  
$dbuser = 'new_user';           
$dbpass = 'iqse'; 
$db="SS2011db";
$link = mysql_connect($dbhost, $dbuser, $dbpass);
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
echo "success"
?>

<table width="98%" cellpadding="5" border="0">
<tbody style="font-family:arial">
	   <tr bgcolor="500000" valign="middle">
	       <td>
		   	   <div align="center"><font size="5" color="500000"><b>FACULTY</b></font></div>
		   </td>
		</tr>
</table>





<div id="footer">
  
<?php include("include/footer.php"); ?>  		 
		 
</div>

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<div id="header">

<?php include("include/header.php"); ?>

</div>

</body>

</html>