<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Tue, 23 Oct 2012 19:58:54 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IQSE Staff List</title>

<LINK REL=StyleSheet HREF="person.css" TITLE="basic-1"/>
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />


  </head>
  <body>
<div id="outer">
	<div id="left" class="divtest">
<br><br><br><br>
  </body>
  <!--<!--  -----------------------  Enter LEFT Content ---------------------- -->
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


<table width="98%" cellpadding="5" border="0"><tbody style="font-family:arial">
<tr bgcolor="500000" valign="middle">
<tr>
<td>
<div align="center"><font size="5" color="500000"><b>STAFF</b></font></div>
</td>
</tr>
</table>

<table width="96%" cellpadding="5" border="0" cellspacing="1"><tbody style="font-family:arial">
<tr bgcolor="#500000" valign="middle">
<td><div align="center">
<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Photo</b></font>
</div></td>
<td><div align="center">
<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Name</b></font>
</div></td>
<td align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Email</b></font></td>
<td align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Phone</b></font></td>
<td align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="-1" color="#f5f5f5"><b>Office</b></font></td>
</tr>
					 
<?php
include "config.php";
// $dbhost = 'localhost';  
// $dbuser = 'new_user';           
// $dbpass = 'iqse'; 
// $db="SS2011db";
$link = mysqli_connect($dbhost, $dbuser, $dbpass);
//echo "success";
if (! $link)
die("Couldn't connect to MySQL");

mysqli_select_db( $link, $db )
or die("Couldn't open $db: ".mysqli_error());
?>



<?php
$query=" SELECT * FROM IQSEpeople WHERE classification='staff' AND dbstatus='active' ORDER BY last ASC";
$result=mysqli_query($link,$query);
$num=mysqli_num_rows($result);
$i=0;
while ($i < $num) {
$first=mysql_result($result,$i,"first");
$last=mysql_result($result,$i,"last");
$email=mysql_result($result,$i,"email");
$ophone=mysql_result($result,$i,"ophone");
$lphone=mysql_result($result,$i,"lphone");
$oloc=mysql_result($result,$i,"oloc");
$lloc=mysql_result($result,$i,"lloc");
$uname=mysql_result($result,$i,"uname");
$classification=mysql_result($result,$i,"classification");
$dbcomment2=mysql_result($result,$i,"dbcomment2");
?>

<center>


<tr valign="top">
<td width="30%" nowrap>
<div align="center"><?php if($dbcomment2=='none'){echo "<img src=\"people/images/shadow.jpg\" height=\"60\" />";}else{echo "<img src=\"people/images/".$uname.".jpg\" height=\"60\" />";}?><br>
</div></td>
<td width="30%" valign="middle" nowrap>
<small><?php if($classification='staff'){echo "<a href=\"staff.php?uname=".$uname."\"> ".$last.",&nbsp;".$first." </a>";}
elseif($classification='gs'){echo "<a href=\"gs.php?uname=".$uname."\"> ".$first." ".$last." </a>";}
else{echo "<a href=\"staff.php?uname=".$uname."\"> ".$first." ".$last."  </a>";}?></small>

</td>
<td width="30%" align="center" valign="middle" nowrap>
<small><a href="mailto:<?php echo "$email" ?>"><?php echo "$email"?></a></small>
</td>
<td width="18%" align="center" valign="middle" nowrap>
<small><?php echo "$ophone"?><br><?php echo "$lphone"?></small>
</td>
<td width="20%" align="center" valign="middle" nowrap>
<small><?php echo "$oloc"?><br><?php echo "$lloc"?></small>
</td></tr>

<?php
++$i;
}

?>
</table>

<br>
 <hr><center>
<p class="c2"><font face="Arial">Last update: 28 December 2012</font></p></center>	<br> 
	 

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

