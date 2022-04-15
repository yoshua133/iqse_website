<?php
session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
//echo "Correct Code Entered";
//Do you stuff
?>

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

<LINK REL=StyleSheet HREF="../../../person.css" TITLE="basic-1"/>
<link rel="stylesheet" type="text/css" href="print.css" media="print" /> 
 
      
</head>


<body>
<div id="outer">
	<div id="left" class="divtest">
<br><br><br><br>
<!--  -----------------------  Enter LEFT Content ---------------------- -->

<br><br>

<?php include("../../include/leftmenu-2.php"); ?>

			
	</div>
<!--  -----------------------  Begin Center Content ---------------------- -->
	<div id="centrecontent">

<div style=" text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table width="98%" border="0" cellpadding="2" cellspacing="2" style="border-width: 0px; background-color: #ffffff;">
<tr valign="top">
</tr></table>

<!-- ============================== Enter Center Content ============================  -->



<?php

$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
mysqli_select_db($link, DB_NAME);

$sql="INSERT INTO SS2019travel (name, dbgroup, dbstatus, email, invitedby ) VALUES ('$_POST[name]', '$_POST[dbgroup]', '$_POST[dbstatus]', '$_POST[email]', '$_POST[invitedby]')";

if (!mysqli_query($link, $sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "<br> <center><h3>Thank you for Registering!</h3></center>";

mysqli_close($link)
?>
<center><br><h3><a href="../registration2019/SS2019main.php">click to return to the main SS2019 page</a></h3></center>
<center><h3><a href="../registration2019/SS2019travelgroups.php">click to return to the travel group registration page</a></h3></center>
<br><br>
<br><br>
<hr>
<?php
}
else
{
die("Wrong Code Entered");
}
?>


<center> Last Updated October 6, 2014 </center>		 
		
  		 			 



<!-- ============================== STOP Center Content Entry ============================  -->

 	</div>
	<div id="clearfooter"></div>
	<!-- to clear footer -->
</div>
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->

<div id="footer">
  
<?php include("../../include/footer-2.php"); ?>  		 
		 
</div>

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<div id="header">

<?php include("../../include/header-2.php"); ?>

</div>

</body>

</html>
