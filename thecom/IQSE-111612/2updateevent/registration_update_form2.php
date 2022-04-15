


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
<center>	 &nbsp&nbsp <a href="http://art.tamu.edu" title="ART Home" target="_blank">ART Home</a>
			 &nbsp&nbsp <a href="../ART-1.php" title="Main">ART Main Module</a>
			 &nbsp&nbsp <a href="../../COM-1.php" title="Main">the COM</a>
			 &nbsp&nbsp	<a href="../logout.php">Logout</a> &nbsp;&nbsp<br><br>
</center>		 

<br>
<!-- ============================== Enter Center Content ============================  -->
<!--<?php include("include/topmenu.php"); ?>-->

<?php
//registration_update_form.php
?>
<html><head><title>People Update Form</title>
</head>
<body>

<center>
<br>
<form method="POST" action="registration_change_form2.php">
<pre>
&nbsp;&nbsp;Enter ID Number to Edit: <br>
<input type="text" name="id" size="30">
&nbsp;<input type="submit" value="Submit"><input type="reset">
</pre>
</form>
</center>

<?php
/* Change next two lines if using online */
$db="SS2011db";
$link = mysql_connect('sql.physics.tamu.edu', 'iqsedb1', 'Iqse4u^2');
if (! $link)
die(mysqli_error());
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
$result = mysql_query( "SELECT * FROM IQSEevent ORDER BY id ASC" )
or die("SELECT Error: ".mysqli_error());
$num_rows = mysqli_num_rows($result);
if ($myrow = mysqli_fetch_array($result)) {

echo "<center><br>A Quick View<BR><br>";
echo "<table border=1>\n";
echo "<tr><td><b>ID Number</b></td><td>Speaker Name</td><td>Talk Date:</td></tr>\n";
do {
printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n", $myrow["id"], $myrow["speakername"], $myrow["talkdate"]);
} while ($myrow = mysqli_fetch_array($result));
echo "</table>\n </center>";
} else {
echo "$ref: That record appears to be unavailable"; 
} 





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
   Copyright &copy; 2011, Texas A&amp;M University, The Agriphotonics Research and Teaching Program, All Rights Reserved.<br/>
College Station, TX 77843-4242 | (979) 458-7942 | Fax (979) 458-7931 <br><br/>
	</center></td></tr></table>


</body>

</html>

