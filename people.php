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

<LINK REL=StyleSheet HREF="person.css" TITLE="basic-1"/>
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" /> 


      
</head>


<body>
<div id="outer">
	<div id="left" class="divtest">
<br><br><br><br>
<!--  -----------------------  Enter LEFT Content ---------------------- -->

<br><br>

<?php 

include("include/leftmenu.php"); ?>

			
	</div>
<!--  -----------------------  Begin Center Content ---------------------- -->
	<div id="centrecontent">

<!--<center>&nbsp&nbsp Quick Links: &nbsp&nbsp 		   		
		   		<a href="facultylist.php">Faculty</a>&nbsp&nbsp 
				<a href="researcherlist.php">Researchers</a>&nbsp&nbsp
				<a href="gslist.php">Graduate Students</a>&nbsp&nbsp
				<a href="visitorlist.php">Visitors</a>&nbsp&nbsp 
				<br><br/> </center>-->
		
<div style=" text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table width="98%" border="0" cellpadding="2" cellspacing="2" style="border-width: 0px; background-color: #ffffff;">
<tbody style="font-family:arial"><tr valign="top"> </tr></td></table>

<!-- ============================== Enter Center Content ============================  -->

<font face="Arial"><table width="98%" cellpadding="5" border="0">
<tr bgcolor="500000" valign="middle">
<tr>
<td>
<br><br><div align="center"><font size="5" color="500000"><b>Search Institute Directory</b></font></div>
</td>
</tr>
</table>

<?php 
include "config.php";
include("include/peoplesearch.php"); ?>		
		
		
		<br><br><br><br><br><br><br><br><br><br>
 <hr><center>
<p class="c2"><font face="Arial">Last update:  04 January 2013</font></p></center></font>
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

