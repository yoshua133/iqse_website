<?php 
session_start(); //Allows you to use sessions 
$user = "IQSE"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username4'] == $user AND $_POST['password4'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username4'] = $_POST['username4'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/CTP/CTP.php">Login?</a>'); 
  } 
else 
    { 
?> 

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


$ud_uname=$_POST['ud_uname'];
$ud_first=$_POST['ud_first'];
$ud_last=$_POST['ud_last'];
$ud_email=$_POST['ud_email'];
$ud_oloc=$_POST['ud_oloc'];
$ud_ophone=$_POST['ud_ophone'];
$ud_lloc=$_POST['ud_lloc'];
$ud_lphone=$_POST['ud_lphone'];
$ud_fphone=$_POST['ud_fphone'];
$ud_title=$_POST['ud_title'];
$ud_title2=$_POST['ud_title2'];
$ud_title3=$_POST['ud_title3'];
$ud_dept=$_POST['ud_dept'];
$ud_dept2=$_POST['ud_dept2'];
$ud_dept3=$_POST['ud_dept3'];
$ud_classification=$_POST['ud_classification'];
$ud_dbgroupmbr=$_POST['ud_dbgroupmbr'];
$ud_dbstatus=$_POST['ud_dbstatus'];
$ud_dbdatechange=$_POST['ud_dbdatechange'];
$ud_dbdateadd=$_POST['ud_dbdateadd'];
$ud_dbdateterm=$_POST['ud_dbdateterm'];
$ud_dbFYadd=$_POST['ud_dbFYadd'];
$ud_dbFYterm=$_POST['ud_dbFYterm'];
$ud_dbworkgroup=$_POST['ud_dbworkgroup'];
$ud_dbcomment1=$_POST['ud_dbcomment1'];
$ud_dbcomment2=$_POST['ud_dbcomment2'];
$ud_dbcomment3=$_POST['ud_dbcomment3'];
$ud_dbwaddress=$_POST['ud_dbwaddress'];
$ud_dbdescription=$_POST['ud_dbdescription'];

$db="SS2011db";
$link = mysql_connect("sql.physics.tamu.edu", "iqsedb1", "Iqse4u^2");
if (! $link)
die("Couldn't connect to MySQL");
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysqli_error());
mysql_query("UPDATE IQSEpeople SET first='$ud_first' , last='$ud_last' , email='$ud_email' , oloc='$ud_oloc' , ophone='$ud_ophone' , lloc='$ud_lloc', lphone='$ud_lphone', fphone='$ud_fphone', title='$ud_title' , title2='$ud_title2' , title3='$ud_title3', dept='$ud_dept', dept2='$ud_dept2', dept3='$ud_dept3', classification='$ud_classification', dbgroupmbr='$ud_dbgroupmbr', dbstatus='$ud_dbstatus', dbdatechange='$ud_dbdatechange', dbdateadd='$ud_dbdateadd', dbdateterm='$ud_dbdateterm', dbFYadd='$ud_dbFYadd', dbFYterm='$ud_dbFYterm', dbworkgroup='$ud_dbworkgroup', dbcomment1='$ud_dbcomment1', dbcomment2='$ud_dbcomment2', dbcomment3='$ud_dbcomment3', dbwaddress='$ud_dbwaddress', dbdescription='$ud_dbdescription' WHERE uname='$ud_uname'");


echo "<center><h3> Profile has been Updated successfully.</h3> Return to <a href=\"../CTP-1.php\">CTP Module</a></center>";

mysql_close($link);
?>

<br><br><br><br><br>
 <hr><center><br>
<p class="c2">Last update: December 30, 2011</p></center>

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

<?php
}
?>
</body>
</html>
