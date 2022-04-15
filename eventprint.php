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

<td align="center"><br />
<font size="6"><font color="#500000"><?php echo "<b>$talktype</b>" ?></font></font><br>
<?php $pos=(strlen(stristr($talktype,'OSA Student'))||strlen(stristr($talktype,'Student Meeting')));
if($pos>0){echo "";}else{?>
<br><br>
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


	
		<br><br>
		
		
</body>
</html>
