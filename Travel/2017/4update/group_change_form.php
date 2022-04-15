
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

<LINK REL=StyleSheet HREF="../../../person.css" TITLE="basic-1"/>
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
<?php $name=$_POST['name'];?>

<html><head><title>Update Bulletin Board Information Form</title>
<style type="text/css">
td {font-family: tahoma, arial, verdana; font-size: 10pt }
</style>



</head>
<body>

<br>
<?php

$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());

$query=" SELECT * FROM PW2017needgroup WHERE name='$name'";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$dbtg=mysql_result($result,$i,"dbtg");
$dblg=mysql_result($result,$i,"dblg");
$dbrcg=mysql_result($result,$i,"dbrcg");
$email=mysql_result($result,$i,"email");
$invitedby=mysql_result($result,$i,"invitedby");
?>

<center>

<h3>Updating Bulletin Board Information on:</h3> <font color="#FF0000"><font size="5"><b><?php echo $name;?></b></font></font><br>
<table width="500" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0">
<form action="group_change_record.php" method="POST">
<tr align="center" valign="top">
<td align="center" colspan="1">
<input type="hidden" name="ud_name" value="<?php echo "$name" ?>">
Email Address: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_email" value="<?php echo "$email"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Looking for a Travel Group? 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbtg" value="<?php echo "$dbtg"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Looking for a Lodging Group? 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dblg" value="<?php echo "$dblg"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Looking for a Rental Car Group? 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_dbrcg" value="<?php echo "$dbrcg"?>"><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Invited to Princeton Workshop by:  
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ud_invitedby" value="<?php echo "$invitedby"?>"><br>
</td></tr>
<tr>
 <td align="center" width="200"><div align="center">Enter Image Text</div></td>
<td align="center" width="200"><input name="captcha" type="text"> <img src="captcha1.php" /><br></td></tr>
</table><br><br>
<input type="Submit" value="Update"></form>
<?php
++$i;
}

?>

<br><br><br><br><br>
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
  
<?php include("../../../include/footer-2.php"); ?>  		 
		 
</div>

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<div id="header">

<?php include("../../../include/header-2.php"); ?>

</div>

</body>

</html>
