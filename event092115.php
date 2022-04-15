<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="created" content="Wed, 17 Nov 2010 21:05:45 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IQSE Event Announcement</title>

<LINK REL=StyleSheet HREF="person.css" TITLE="basic-1"/>
<!--<link rel="stylesheet" type="text/css" href="printEvent.css" media="print" /> 
-->

<style type="text/css">
@media print{
  body{ background-color:#FFFFFF; background-image:none; color:#000000 }
  #header{ display:none;}
  #footer{ display:none;}
  #left{ display:none;}
  #centrecontent{ width:100%;}
}
</style>
     
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
		
<div style=" text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table width="98%" border="0" cellpadding="2" cellspacing="2" style="border-width: 0px; background-color: #ffffff;">
<tr valign="top"> 
</tr></table>

<!-- ============================== Enter Center Content ============================  -->

<?php 
$id = $_GET['id'];
?> 

<?php echo "<a href=\"eventprint.php?id=".$id."\"> [printer friendly version] </a>"; ?>

<table width="96%" cellpadding="5" border="0" cellspacing="1">
<tbody style="font-family:arial">
<tr valign="top">
					 

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
$speakername=mysql_result($result,$i,"speakername");
$speakeraffil=mysql_result($result,$i,"speakeraffil");
$speakertitle=mysql_result($result,$i,"speakertitle");
$speakerabstract=mysql_result($result,$i,"speakerabstract");
$talkdate=mysql_result($result,$i,"talkdate");
$talktime=mysql_result($result,$i,"talktime");
$talkloc=mysql_result($result,$i,"talkloc");
$hostemail=mysql_result($result,$i,"hostemail");
$speakerhost=mysql_result($result,$i,"speakerhost");
$dbposter=mysql_result($result,$i,"dbposter");
$talktype=mysql_result($result,$i,"talktype");
$talkbuilding=mysql_result($result,$i,"talkbuilding");
$dbsponsor=mysql_result($result,$i,"dbsponsor");
$dbfood=mysql_result($result,$i,"dbfood");
$dbcomment1=mysql_result($result,$i,"dbcomment1");
$dbcomment2=mysql_result($result,$i,"dbcomment2");
?>

<?php
++$i;
}

?>

<td align="center"><br />
<font size="6"><font color="#500000"><?php echo "<b>$talktype</b>" ?></font></font><br>
<br><br>
<?php $pos=(strlen(stristr($talktype,'OSA Student'))||strlen(stristr($talktype,'Student Meeting'))); if($pos>0){echo"";}else{ ?>
<font size="6"><font color="#500000"><?php echo "\"<b>$speakertitle</b>\""?></font></font><br>
<br><br>

<font size="5"><font color="#500000"><?php echo "<b>$speakername</b>"?></font></font><br>
<font size="4"><font color="#500000"><?php echo "<i>$speakeraffil</i>"?></font></font><br><br>

<font size="4"><font color="#500000"><b>ABSTRACT</b></font></font>&nbsp;<br><br><?php}?>
</td>
</tr>
<tr><td align="left">
<?php echo "<font size=\"3\"><font color=\"#500000\">$speakerabstract</font></font>"?><br>
<br><br>
</td>
</tr>
<tr valign="top">
<td align="center">

<font size="5"><font color="#500000"><?php echo "<b>$talkdate</b>"?></font></font><br>
<font size="5"><font color="#500000"><?php echo "<b>$talkloc, $talktime</b>"?></font></font><br>
<font size="5"><font color="#500000"><?php echo "<b>$talkbuilding</b>"?></font></font><br><br> <br>
<font size="4"><font color="#500000"><?php if($dbsponsor=='none'){echo "";}else{echo "$dbsponsor";}?><br><br>
</font></font>

<font size="2"><font color="#500000"><?php echo "<b>$dbfood</b>"?></font></font><br>
<?php if($dbcomment1=='none'){echo "";}else{echo "$dbcomment1";}?><br>
</font></font>
<font size="2"><font color="#500000">
<?php if($hostemail=='none'){;}else{echo "Host: <a href=\"mailto:".$hostemail."\" >$speakerhost </a> ";}?><br>
</font></font><br>

</td>
</tr></table>
</div>

	
		<br><br>
		
		

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

