<?php
/**
 * regform.php
 *
 * This page is for users to edit their account information
 * such as their password, email address, etc. Their
 * usernames can not be edited. When changing their
 * password, they must first confirm their current password.
 *
 * Written by: Jpmaster77 a.k.a. The Grandmaster of C++ (GMC)
 * Last Updated: August 26, 2004
 */
include("include/session.php");
?>

<html>
<body>
<?php
/**
 * If user is not logged in, then do not display anything.
 * If user is logged in, then display the form to edit
 * account information, with the current email address
 * already in the field.
 */
if($session->logged_in){
?>
<html>
<title>IQSE SS2011 Login</title>
<body>

<!--  -----------------------  Enter HEADER Content ---------------------- -->

<?php include("../include/headerSaFER.php"); ?>
<?phpinclude("include/topmenu.php"); ?>

<!--  -----------------------  Enter LEFT Content ---------------------- -->
<br>
	 
<br>
<!-- ============================== Enter Center Content ============================  -->
 
<center><h2>  <font face="Arial">Welcome <b><font color="#FF0000"><?php echo $session->username; ?></font></font></b> to the registration form!</h2></center>

<center><script type="text/javascript" src="swfobject.js"></script><div id="CC4988486">Form Object</div><script type="text/javascript">var so = new SWFObject("ssregform.swf", "ssregform.xml", "600", "900", "7,0,0,0", "#ffffff");so.addParam("classid", "clsid:d27cdb6e-ae6d-11cf-96b8-444553540000");so.addParam("quality", "high");so.addParam("scale", "noscale");so.addParam("salign", "lt");so.addParam("FlashVars", "xmlfile=ssregform.xml&w=600&h=900");so.write("CC4988486");</script> 
</center>
 

<hr><center><br>
<p class="c2"><font face="Arial">Last update: June 16, 2014</font></p></center>

<!-- ============================== STOP Center Content Entry ============================  -->
<hr><center><br>
 	
	
<!--  -----------------------  End Center Content ---------------------- -->
<!-- end outer div -->

<!--  -----------------------  Enter FOOTER Content ---------------------- -->
<br><br>
<?php include("../include/footer.php"); ?>

