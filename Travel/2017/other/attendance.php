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

<LINK REL=StyleSheet HREF="../../../conferences/conference.css" TITLE="basic-1"/>
<link rel="stylesheet" type="text/css" href="print.css" media="print" /> 
 
      
</head>


<body>
<div id="outer">
	<div id="left" class="divtest">
<br><br><br><br>
<!--  -----------------------  Enter LEFT Content ---------------------- -->

<br>
			 &nbsp&nbsp <a href="http://iqse.tamu.edu" title="IQSE Home">Home</a><br><br>
			 &nbsp&nbsp <a href="../../../people/people.html" title="People">People</a><br><br>
			 &nbsp&nbsp <a href="../../../research/research.html" title="Research">Research</a><br><br>
			 &nbsp&nbsp <a href="../../../conferences/conferences.html" title="Conferences">Conferences</a><br><br>
			 &nbsp&nbsp <a href="../../../outreach/outreach.html" title="Outreach">Outreach</a><br><br>
			 &nbsp&nbsp <a href="../../../calendar/calendar.html" title="Calendar">Calendar</a><br><br>
			 &nbsp&nbsp <a href="../../../contact/contact.html" title="Contact">Contact Us</a><br><br>
			 &nbsp&nbsp <a href="../../../visiting/visiting.html" title="Contact">Visiting IQSE</a><br><br>
			  
			
	</div>
<!--  -----------------------  Begin Center Content ---------------------- -->
	<div id="centrecontent">

<div style=" text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table width="98%" border="0" cellpadding="2" cellspacing="2" style="border-width: 0px; background-color: #ffffff;">
<tr valign="top">

<!-- ============================== Enter Center Content ============================  -->

<center>  <h2> TAMU Princeton Workshop Dinner Attendance List</h2></center><br><br>



<?php
$con = mysql_connect("sql.physics.tamu.edu","iqsedb1","Iqse4u^2");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysql_select_db("SS2011db", $con);

$result = mysql_query("SELECT * FROM TAMUPW2017dinner");

echo "<center><b><table border='2'>
<tr>
<td><b>Name</b></td>
<td><b>Title</b></td>
<td><b>Department</b></td>
<td><b>Affiliation</b></td>
</tr>";
WHILE($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['dept'] . "</td>";
  echo "<td>" . $row['affil'] . "</td>";
  echo "</tr>";
  }
echo "</table> </center>";

mysql_close($con);
?>


<br><br><br><br><br>
<hr>

<center> Last Updated December 12, 2012 </center>		 
		
  		 			 



<!-- ============================== STOP Center Content Entry ============================  -->

 	</div>
	<div id="clearfooter"></div>
	<!-- to clear footer -->
</div>
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<div id="footer">
  
  		 <br>
         <a title="Texas A&amp;M University"
		 href="http://www.tamu.edu"
		 target="_blank" style="color: white">Texas A&amp;M University</a> 
-
	      <a title="College of Science"
		 href="http://www.science.tamu.edu"
		 target="_blank" style="color: white">College of Science</a> <br/>

	      <a title="Accessibility"
		 href="http://itaccessibility.tamu.edu/"
		 target="_blank" style="color: white">Accessibility</a>
-
	      <a title="Privacy &amp; Security"
		 href="../../../privacy/privacy.html" style="color: white">Privacy &amp; Security</a>
-
	      <a title="Webmaster"
		 href="mailto:iqse@tamu.edu"
		 target="_blank" style="color: white">Webmaster</a><br/><br/>
	
	
		 
	<hr style="width: 50%"/>

   <FONT COLOR="#FFFFFF"> 
   Copyright &copy; 2010, Texas A&amp;M University, Institute for Quantum Science and Engineering, All Rights Reserved.<br/>
College Station, TX 77843-4242  |  (979) 458-7942  |  Fax (979) 458-7931 <br><br/>
	
</div>

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<div id="header">
<table>
<tr><td style="vertical-align: top; padding-left: 2px; width: 9%;" columnspan="2">
<a href="http://www.tamu.edu/" title="TexasA&amp;M University Home"><img src="../../../images/primaryMark.gif" width="135" height="45" align="top" alt="Texas A&amp;M University primary mark" title="TAMULogo" border="0" /></a>           
</td>
<td>
<center><a href="http://iqse.tamu.edu" title="Institute Home"><img src="../../../images/iqseText.jpg" width="550" height="125" align="middle" alt="IQSE Banner" title="IQSE Home" border="0" /></a></center>
</td></tr>
</table>
 
</div>

</body>

</html>

