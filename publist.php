<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="created" content="Wed, 17 Nov 2010 21:05:45 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Publication List</title>

<LINK REL=StyleSheet HREF="person.css" TITLE="basic-1"/>
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" /> 
 
     
 

</head>


<body>
<div id="outer">
	<div id="left" class="divtest">
<br><br><br><br>
<!--  -----------------------  Enter LEFT Content ---------------------- -->
<br><br><br>

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
$uname = $_GET['uname'];

?>
<br>
<table width="98%" cellpadding="5" border="0">

<tbody style="font-family:arial">
<tr bgcolor="500000" valign="middle">
<tr>
<td>
<div align="center"><font size="5" color="500000"><b>Publications (Partial Listing)</b></font></div>
</td>
</tr>
</table>
<?php

include "config.php";
$link = mysqli_connect($dbhost, $dbuser, $dbpass);
if (! $link)
die("Couldn't connect to MySQL");

mysqli_select_db( $link, $db )
or die("Couldn't open $db: ".mysqli_error());
?>


<table width="96%" cellpadding="5" border="0" cellspacing="0">
<tbody style="font-family:arial">
<tr bgcolor="#500000" valign="middle"></td>
<td width="10%" align="left" nowrap>
<td width="60%" align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Publication</b></font></td>
<td width="25%" align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>DOI Link</b></font></td>
</tr>
<tr bgcolor="#FFFFFF" valign="top">				 

<?php
$query=" SELECT * FROM IQSEpubs WHERE dbunames LIKE '%$uname%' ORDER BY ABS(pubDate) DESC";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
$count=abs($num-$i);
while ($i < $num) {
$pubdoi=mysql_result($result,$i,"pubdoi");
$dbpub=mysql_result($result,$i,"dbpub");
$dbunames=mysql_result($result,$i,"dbunames");
$pubDate=mysql_result($result,$i,"pubDate");
?>

<?php if($num=='0'){echo "There Are no Entries";}else{ ?>

</td>
<td width="5%" align="right" valign="top">
<small><?php echo "$count."?></a></small>
</td>
<td width="65%" align="left">
<small><?php echo $dbpub; ?></small>
</td>
<td width="30%" align="center" valign="top">
<?php if(strcasecmp($pubdoi, 'none')==0){echo "<small>none</small>";}else{echo "<small><a href=\"http://dx.doi.org/".$pubdoi."\"> ".$pubdoi."</a></small>";}?><br>
</td>
</tr>
<?php
++$i;
$count=abs($num-$i);
}
?>
<?php }?>
</table>
<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




<center>
<p class="c2"><font face="Arial">Last update: August 24, 2013</font></p></center>	 
<!-- ============================== STOP Center Content Entry ============================  -->

 	</div>
	<div id="clearfooter"></div>
	<!-- to clear footer -->
</div>
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<div id="footer">
  
<?php include("include/footer.php"); ?>  		 
		 
</div>

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<div id="header">

<?php include("include/header.php"); ?>

</div>

</body>

</html>

