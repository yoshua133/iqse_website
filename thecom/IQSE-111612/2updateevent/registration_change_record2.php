
<!--  -----------------------  Enter HEADER Content ---------------------- -->

<table bgcolor="#000000">
<tr><td style="vertical-align: top; padding-left: 2px; width: 9%;" columnspan="2">
<a href="http://www.tamu.edu/" title="TexasA&amp;M University Home"><img src="../images/primaryMark.gif" width="135" height="45" align="top" alt="Texas A&amp;M University primary mark" title="TAMULogo" border="0" /></a>           
</td>
<td>
<center><a href="http://art.tamu.edu" title="ART Home"><img src="../images/ARTText.jpg" width="510" height="85" align="middle" alt="ART Banner" title="ART Home" border="0" /></a></center>
</td></tr>
</table>

<!--  -----------------------  Enter LEFT Content ---------------------- -->

	<br>
<center>	 &nbsp&nbsp <a href="http://art.tamu.edu" title="Center Home" target="_blank">CTP Home</a>
			 &nbsp&nbsp <a href="../ART-1.php" title="Main">ART Main Module</a>
			 &nbsp&nbsp <a href="../../COM-1.php" title="Main">the COM</a>
			 &nbsp&nbsp	<a href="../logout.php">Logout</a> &nbsp;&nbsp<br><br>
</center>		 

<br>
<!-- ============================== Enter Center Content ============================  -->
<!--<?php include("include/topmenu.php"); ?>-->

<?php
//registration_change_record.php


$ud_id=$_POST['ud_id'];
$ud_speakername=$_POST['ud_speakername'];
$ud_speakeraffil=$_POST['ud_speakeraffil'];
$ud_speakertitle=$_POST['ud_speakertitle'];
$ud_speakerabstract=$_POST['ud_speakerabstract'];
$ud_talkdate=$_POST['ud_talkdate'];
$ud_talktime=$_POST['ud_talktime'];
$ud_talkloc=$_POST['ud_talkloc'];
$ud_speakerhost=$_POST['ud_speakerhost'];
$ud_hostemail=$_POST['ud_hostemail'];
$ud_dbposter=$_POST['ud_dbposter'];
$ud_talktype=$_POST['ud_talktype'];
$ud_talkbuilding=$_POST['ud_talkbuilding'];
$ud_talkyear=$_POST['ud_talkyear'];
$ud_eventDate=$_POST['ud_eventDate'];
$ud_dborder=$_POST['ud_dborder'];
$ud_dbcomment1=$_POST['ud_dbcomment1'];
$ud_dbcomment2=$_POST['ud_dbcomment2'];
$ud_dbcomment3=$_POST['ud_dbcomment3'];


$db="SS2011db";
$link = mysql_connect("sql.physics.tamu.edu", "iqsedb1", "Iqse4u^2");
if (! $link)
die("Couldn't connect to MySQL");
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
mysql_query("UPDATE IQSEevent SET speakername='$ud_speakername' , speakeraffil='$ud_speakeraffil' , speakertitle='$ud_speakertitle' , speakerabstract='$ud_speakerabstract' , talkdate='$ud_talkdate' , talktime='$ud_talktime', talkloc='$ud_talkloc', speakerhost='$ud_speakerhost', hostemail='$ud_hostemail', dbposter='$ud_dbposter' , talktype='$ud_talktype' , talkbuilding='$ud_talkbuilding', talkyear='$ud_talkyear', eventDate='$ud_eventDate', dborder='$ud_dborder', dbcomment1='$ud_dbcomment1', dbcomment2='$ud_dbcomment2', dbcomment3='$ud_dbcomment3' WHERE id='$ud_id'");


echo "<center><h3> Profile has been Updated successfully.</h3> Return to <a href=\"../CTP-1.php\">CTP Module</a></center>";

mysql_close($link);
?>

<br><br><br><br><br>
 <hr><center><br>
<p class="c2">Last update: October 15, 2012</p></center>

<!-- ============================== STOP Center Content Entry ============================  -->
<hr><center><br>
 	
	
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->
<table bgcolor=#332C2C>
<tr><td style="vertical-align: top; padding-left: 2px; width: 9%;" columnspan="2">
<center>

  		 <br>
         <a title="Texas A&amp;M University"
		 href="http://www.tamu.edu"
		 target="_blank" style="color: white">Texas A&amp;M University</a> 
<font color="#FFFFFF">-</font>
	      <a title="College of Science"
		 href="http://www.science.tamu.edu"
		 target="_blank" style="color: white">College of Science</a> <br/>

	      <a title="Accessibility"
		 href="http://itaccessibility.tamu.edu/"
		 target="_blank" style="color: white">Accessibility</a>
<font color="#FFFFFF">-</font>
	      <a title="Privacy &amp; Security"
		 href="../privacy/privacy.html" style="color: white">Privacy &amp; Security</a>
<font color="#FFFFFF">-</font>
	      <a title="Webmaster"
		 href="mailto:tctp@tamu.edu"
		 target="_blank" style="color: white">Webmaster</a><br/><br/>
	

		 
	<hr style="width: 50%"/>

   <FONT COLOR="#FFFFFF"> 
   Copyright &copy; 2011, Texas A&amp;M University, The Agri-photonics Research adn Teachign Program, All Rights Reserved.<br/>
College Station, TX 77843-4242 | (979) 458-7942 | Fax (979) 458-7931 <br><br/>
	</center></td></tr></table>


</body>
</html>
