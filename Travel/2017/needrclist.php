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

<?php include("../../include/leftmenu-2.php"); ?>
			  
			
	</div>
<!--  -----------------------  Begin Center Content ---------------------- -->
	<div id="centrecontent">

<div style=" text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table width="98%" border="0" cellpadding="2" cellspacing="2" style="border-width: 0px; background-color: #ffffff;">
<tbody style="font-family:arial"><tr valign="top"><td>

<!-- ============================== Enter Center Content ============================  -->
<a href="PW2017.php">[return PW2017 travel page]</a><br><center><h2> Lodging Group Bulletin Board</h2></center><br>
</td></tr></table>


<table width="96%" cellpadding="5" border="0" cellspacing="1"><tbody style="font-family:arial">
<?php

$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
?>

<table width="96%" cellpadding="5" border="0" cellspacing="1">
<tbody style="font-family:arial">					 
<tr valign="top" align="left">
<td valign=\"top\"><b>Name:</b></td><td valign=\"top\"> <b>Email Address:</b></td><td valign=\"top\"><b>Travel Group Needed Also?</b></td></tr>
<?php
$query=" SELECT * FROM PW2017needgroup WHERE dbrcg='yes' ORDER BY name DESC";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$name=mysql_result($result,$i,"name");
$dblg=mysql_result($result,$i,"dblg");
$dbtg=mysql_result($result,$i,"dbtg");
$email=mysql_result($result,$i,"email");
$invitedby=mysql_result($result,$i,"invitedby");
?>



<tr valign="top" align="left">
<div align="left">
<?php echo "<td valign=\"top\">". $name. "</td>";
echo "<td valign=\"top\">".$email."</td>";
echo "<td valign=\"top\">". $dbtg."</td><td>";?></div>
</td>
</tr>
<?php
++$i;
}
?>

</table>
</div>

<br><br>
<hr>

<center> <font face="Arial">Last Updated October 14, 2017</font> </center>		 
		
  		 			 



<!-- ============================== STOP Center Content Entry ============================  -->

 	</div>
	<div id="clearfooter"></div>
	<!-- to clear footer -->
</div>
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<div id="footer">
  
<?php include("../../include/footer-2.php"); ?>  		 
		 
</div>

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<div id="header">

<?php include("../../include/header-2.php"); ?>

</div>

</body>

</html>
