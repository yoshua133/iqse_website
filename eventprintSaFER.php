<!DOCTYPE html>
<html lang="en">
<header>
<script language="javascript">
            function printDiv(divName) {
                  var printContents = document.getElementById(divName).innerHTML;
                  var originalContents = document.body.innerHTML;
                  document.getElementById('header').style.display = 'none';
                  document.getElementById('footer').style.display = 'none';
                  document.body.innerHTML = printContents;
 
                  window.print();
 

                  document.body.innerHTML = originalContents;
            }
<div id="div_print">
      <div id="header" style="background-color:White;"></div>
   <div id="footer" style="background-color:White;"></div>
</div>
      </script>

</header>
<body>
     

<table width="96%" cellpadding="5" border="0" cellspacing="1">
<tbody style="font-family:arial"><tr valign="top">
					 
<?php 
$id = $_GET['id'];
?> 
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
<table width="98%" cellpadding="5" border="0">
<tr bgcolor="500000" valign="middle">
<tr>
<td>
<div align="center"><a href="SaFER/outreach/images/SalterFarmHeader2.jpg"><img src="SaFER/outreach/images/SalterFarmHeader2.jpg" width="750"  alt="" title="" border="0" /></a>
</div></td>
</tr>
</table>

<table width="96%" cellpadding="5" border="0" cellspacing="1">
<tbody style="font-family:arial">
<tr valign="top">

<td  align="left">
<div align="center"><h2><font size="6"><font color="#500000"><?php echo "<b>$talktype</b>" ?></font></font></h2>
<h3>Salter Farm Road, Calvert, TX<br><?php echo "$talkdate"?></h3></div>
</tr>
<td align="left" style='padding:5px 5px 5px 80px'><br />
<br>

<font size="5"><font color="#500000"><b>Hosting:</b> <?php echo "$speakertitle"?></font></font><br>
<br>
<?php $pos=(strlen(stristr($speakerabstract,'none'))); if($pos>0){echo"";}else{ ?>
<font size="5"><font color="#500000"><b>Purpose: </b></font></font>&nbsp;<?php}?>

<?php echo "<font size=\"5\"><font color=\"#500000\">$speakerabstract</font></font>"?><br>
<br><br>
</td>
</tr>
<tr valign="top">
<td align="left" style='padding:5px 5px 5px 80px'>
<font size="5"><font color="#500000"><b>Meeting Details:</b></font></font>&nbsp;<br><br>
<font size="4"><font color="#500000"><b>Time:</b> <?php echo "$talktime"?></font></font><br>
<font size="4"><font color="#500000"><b>Place:</b> <?php echo "$talkloc"?></font></font><br><br>

<?php $pos2=(strlen(stristr($talktype,'SaFER Talk or Workshop'))); if($pos2>0){echo"";}else{ ?>

<font size="5"><font color="#500000"><b>General Information:</b></font></font>&nbsp;<br><br> 
<font size="4"><font color="#500000"> Things to Know When Visiting Salter Farm (<a href="SaFER/wv.php">Click</a>)</font></font><br>
<font size="4"><font color="#500000">How to Get to Salter Research Farm (<a href="SalterFarmMap.pdf">Click</a>)</font></font><br><br>
<?php }; ?>

<font size="5"><font color="#500000"><b>Contact:</b></font></font>&nbsp;<font size="4"><font color="#500000"><?php if($hostemail=='none'){echo "IQSE (<a href=\"mailto:iqse@tamu.edu\">Click</a>)";}else{echo "$speakerhost (<a href=\"mailto:".$hostemail."\" >Click</a>) ";}?>
</font></font><br><br><br><br><br><br>
<div align="center"><font size="5"><font color="#500000"><?php if($dbsponsor=='none'){echo "";}else{echo "$dbsponsor";}?>
</font></font></div>



</td>
</tr></table>
</div>

	
		<br><br>
		
		
</body>
</html>
