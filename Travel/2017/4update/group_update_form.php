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
<div id="outer">
	<div id="left" class="divtest">
<br><br><br><br>
<!--  -----------------------  Enter LEFT Content ---------------------- -->

<br><br>

<?php include("../../../include/leftmenu-4.php"); ?>
			  
			
	</div>
<!--  -----------------------  Begin Center Content ---------------------- -->
	<div id="centrecontent">

<div style=" text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table width="98%" border="0" cellpadding="2" cellspacing="2" style="border-width: 0px; background-color: #ffffff;">
<tbody style="font-family:arial"><tr valign="top"><td>






<!-- ============================== Enter Center Content ============================  -->

<?php
//group_update_form.php
?>
<html><head><title>Bulletin Board Information Update Form</title>
</head>
<body>

<center>
<br>
<form method="POST" action="group_change_form.php">
<pre>
&nbsp;&nbsp;<h3><span style="font-weight: normal; font-style: normal; text-decoration: none; font-size: 14pt;">Enter Your Name as it Appears on the Bulletin Board List:</span> </h3>
<input type="text" name="name" size="30">
&nbsp;<input type="submit" value="Submit"><input type="reset">
</pre>
</form>
</center>

<?php
/* Change next two lines if using online */
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die(mysqli_error());
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
$result = mysql_query( "SELECT * FROM PW2017needgroup ORDER BY name ASC" )
or die("SELECT Error: ".mysqli_error());
$num_rows = mysqli_num_rows($result);
if ($myrow = mysqli_fetch_array($result)) {

echo "<center><br>The Current Bulletin Board Name List:<BR><br>";
echo "<table border=1>\n";
echo "<tr><td><b>Name</b></td></tr>\n";
do {
printf("<tr><td>%s</td></tr>\n", $myrow["name"]);
} while ($myrow = mysqli_fetch_array($result));
echo "</table>\n </center>";
} else {
echo "$ref: That record appears to be unavailable"; 
} 





mysql_close($link);
?>
<br><br></div>

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
  
<?php include("../../../include/footer-2.php"); ?>  		 
		 
</div>

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<div id="header">

<?php include("../../../include/header-2.php"); ?>

</div>

</body>

</html>
