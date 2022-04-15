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
<?php
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
?>

<?php
$query=" SELECT * FROM IQSEevent WHERE id='$id'";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$talkbuilding=mysql_result($result,$i,"talkbuilding");
?>

<?php
++$i;
}

?>


<div align="center"><h2><font color="#500000">RSVP for Reception </h2></font><br></div>
 <br> <center>
  <br><br>
<?php echo"<form action=\"dinnerRSVP2insert.php?id=".$id."\" method=\"POST\">"; ?>
<center> <table width="500" cellpadding="10" cellspacing="0" border="0" >
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Name:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="name" value=""></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 3 -->
     <td align="center" width="200"><div align="center">Email Address:<br><small>(to notify you if anything changes)</small></div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="email" value="none" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 3 -->
     <td align="center" width="200"><div align="center">Title:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="title" value="Member of the Community, Professor, Graduate Student, etc." ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 2 -->
     <td align="center" width="200"><div align="center">Department (if on Campus):</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dept" value="" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 2 -->
     <td align="center" width="200"><div align="center">Affiliation:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="affil" value="e.g., <?php echo "".$talkbuilding."";?>"></td><!-- Col 2 -->
   
      <tr><!-- Row 5 -->
     <td align="center" width="200"><div align="center">Guest's Name:<br></div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="gname" value="none"</td><!-- Col 2 -->
  </tr>
    <tr><!-- Row 3 -->
     <td align="center" width="200"><div align="center">Guest's Title:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="gtitle" value="n/a" ></td><!-- Col 2 -->
  </tr>
     <tr><!-- Row 3 -->
  <td align="center" width="200"><div align="center">Guest's Department:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="gdept" value="n/a" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 2 -->
     <td align="center" width="200"><div align="center">Guest's Affiliation:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="gaffil" value="n/a"></td><!-- Col 2 -->
	 </tr>
	 <tr>
 <td align="center" width="200"><div align="center">Enter Image Text</div></td>
<td align="center" width="200"><input name="captcha" type="text"> <img src="captcha1.php" /><br></td></tr>

  </table><br><br>
<input type="Submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="Reset" value="Reset" />
</form></center>

<br><br>
<hr>

<center> Last Updated February 3, 2016 </center>		 
		
  		 			 



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