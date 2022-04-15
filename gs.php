<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="created" content="Wed, 17 Nov 2010 21:05:45 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IQSE Graduate Students</title>

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

<!--&nbsp&nbsp Quick Links: &nbsp&nbsp 		   		
		   		<a href="people.html#faculty">Faculty</a>&nbsp&nbsp 
				<a href="people.html#staff">Staff</a>&nbsp&nbsp
				<a href="people.html#researchers">Researchers</a>&nbsp&nbsp
				<a href="people.html#gs">Graduate Students</a>&nbsp&nbsp 
				<a href="people.html#visitors">Visitors</a>&nbsp&nbsp	<br><br/> -->
		
<div style=" text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table width="98%" border="0" cellpadding="2" cellspacing="2" style="border-width: 0px; background-color: #ffffff;">
<tbody style="font-family:arial"><tr valign="top"> 

<!-- ============================== Enter Center Content ============================  -->
					 
<?php 
$uname = $_GET['uname'];
?> 
<?php

include "config.php";
$link = mysqli_connect($dbhost, $dbuser, $dbpass);
if (! $link)
die("Couldn't connect to MySQL");

mysqli_select_db( $link, $db )
or die("Couldn't open $db: ".mysqli_error());
?>

<?php
$query=" SELECT * FROM IQSEpeople WHERE uname='$uname'";
$result=mysqli_query($link, $query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$first=mysql_result($result,$i,"first");
$last=mysql_result($result,$i,"last");
$title=mysql_result($result,$i,"title");
$title2=mysql_result($result,$i,"title2");
$title3=mysql_result($result,$i,"title3");
$dbgroupmbr=mysql_result($result,$i,"dbgroupmbr");
$dept=mysql_result($result,$i,"dept");
$email=mysql_result($result,$i,"email");
$ophone=mysql_result($result,$i,"ophone");
$lphone=mysql_result($result,$i,"lphone");
$oloc=mysql_result($result,$i,"oloc");
$lloc=mysql_result($result,$i,"lloc");
$fphone=mysql_result($result,$i,"fphone");
$dbworkgroup=mysql_result($result,$i,"dbworkgroup");
$dbdatechange=mysql_result($result,$i,"dbdatechange");
$dbcomment1=mysql_result($result,$i,"dbcomment1");
$dbcomment3=mysql_result($result,$i,"dbcomment3");
$dbwaddress=mysql_result($result,$i,"dbwaddress");
$dbdescription=mysql_result($result,$i,"dbdescription");
$classification=mysql_result($result,$i,"classification");
$dbcomment2=mysql_result($result,$i,"dbcomment2");
/*$emphasis=mysql_result($result,$i,"emphasis");*/
?>

<?php
++$i;
}

?>

<td><br />
<font size="5"><font color="#500000"><?php echo "<b>$first</b>" ?>&nbsp;<?php echo "<b>$last</b>"?></font></font><br>
<font size="4"><font color="#500000"><?php echo "<i><b>$title</i></b>"?></font></font>
<?php if($title2=='none'){;}else{echo "<font color=\"#500000\"><font size=\"4\"><b><i>$title2</i></b></font></font><br>";}?>

<font size="4"><font color="#500000"><b>Focus:</b></font></font>&nbsp;<?php echo "<font size=\"4\"><font color=\"#500000\"><b><i>$dept</i></b></font></font>"?><br>
<font size="4"><font color="#500000"><b>Group:</b></font></font>&nbsp;<?php echo "<font size=\"4\"><font color=\"#500000\"><b><i>$dbworkgroup</i></b></font></font>"?><br><br>


<!--<i><?php echo "$emphasis"?><br></i></h3>-->
<font color="#500000">Email:&nbsp;&nbsp;<a href="mailto:<?php echo "$email" ?>"><?php echo "$email"?></a><br>
Phone:&nbsp;<?php echo "$ophone"?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$lphone"?> <br>
Fax: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$fphone"?><br>
Office:&nbsp;&nbsp;<?php echo "$oloc"?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$lloc"?> <br>
<br>
<?php if($dbcomment1=='none'){echo "&nbsp;";}else{echo "<a href=\"people/cv/".$uname.".pdf\"> <b>Curriculum Vitae</b> </a>";} ?><br>
<?php if($dbcomment3=='none'){echo "";}else{echo "<a href=\"publist.php?uname=".$uname."\"><b>Publication List</b> (partial)</a><br>";}?>
<?php if($dbwaddress=='none'){echo "&nbsp;";}else{echo "<a href=\"$dbwaddress\"> <b>Personal Website</b> </a>";}?><br>
</font></td>
<td><br />
<?php if($dbcomment2=='none'){echo "<img src=\"people/images/shadow.png\" height=\"245\" />";}else{echo "<img src=\"people/images/".$uname.".jpg\" height=\"245\" />";}?><br>
</td>
</tr>

</table>
</div>
<br>

	<hr>
		
		<h3><font color="#500000"><font face="Arial">Research Interests:</font></font></h3>

<table cellpadding="20" width=90%>
<tbody style="font-family:arial">
<tr><td align="center">
<?php echo "<font size=\"4\"><font color=\"#500000\"><b><i>$dbdescription</i></b></font></font>"?><br>
<br><br>
</td>
</tr>
</table>
		<br><br>
		<hr>
<center> <font face="Arial">Last updated:&nbsp; 06 January 2013</font> </center>
		<br>
		
		
		

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

