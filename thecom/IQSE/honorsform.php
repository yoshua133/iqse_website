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
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/IQSE/IQSE.php">Login?</a>'); 
  } 
else 
    { 
?> 




<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="created" content="Fri, 16 Dec 2011 18:05:58 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
  
<?php include("include/header.php"); ?>
<?php include("include/topmenu.php"); ?>
<div align="center"><font color="#500000"><font size="6">Enter an Honor or an Award</font> </font><br></div>
 <center> (<font color="#FF0000"><b>**Fields Required</b></font>)  </center> <br><br>

<form action="honorsform2insert.php" method="POST">
<center><table width="500" cellpadding="10" cellspacing="0" border="1" ></center>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Award Name:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="awardname" value="Enter the name of the Award" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Award Winner's Name:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="awardeename1" value="Name of Award Winner" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Award Winner 2's Name:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="awardeename2" value="none" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 1 -->
     <td align="center" width="200"><div align="center">Award Presentation Photo File Name:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="himg1" value="none" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 2 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Awardee Uname:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="awardee1" value="Enter your IQSE assigned 'uname'" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 2 -->
     <td align="center" width="200"><div align="center">Awardee2 Uname:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="awardee2" value="none" ></td><!-- Col 2 -->
  </tr>  
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>IQSE Banner Filename:<br><small> (one-pager)</small><br></div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="tlink1" value="IQSE banner filename"</font></td><!-- Col 2 -->
  </tr>
    <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Weblink to News Article:<br><small>(http://.... or none)</small></div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="tlink2" value="none" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center">Weblink to News Article:<br><small>(http://.... or none)</small></div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="tlink3" value="none"</td><!-- Col 2 -->
  </tr>  
  <tr>
  	  <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Year Award Received:</div></td>
	  <td><input type="text" size="35" name="year" value="Year the award was received" ></td>
  </tr>
  <tr>
  	  <td align="center" width="200"><div align="center">Award Receive Date:<br> <small>mm/dd/yyyy</small></div></td>
	  <td><input type="text" size="35" name="datereceived" value="TBA" ></td>
  </tr>
    <tr><!-- Row 2 -->
     <td align="center" width="200"><div align="center">Month Date (mmdd):<br><small>(to order list)</small></div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="himg3" value="1231" ></td><!-- Col 2 -->
  </tr>
  <tr>
  	  <td align="center" width="200"><div align="center">Place Award Received:</div></td>
	  <td><input type="text" size="35" name="placereceived" value="TBA" ></td>
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"><font color="#FF0000">**</font>Name of person posting:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="ppldb" value="Name of the user posting" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 2 -->
     <td align="center" width="200"><div align="center">Comment 1: Is this Item a News Item?</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbcomment1" value="none" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"></font>Comment 2: Enter News Item Description to be posted.</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbcomment2" value="none" ></td><!-- Col 2 -->
  </tr>
  <tr><!-- Row 2 -->
     <td align="center" width="200"><div align="center">Comment 3:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="dbcomment3" value="none" ></td><!-- Col 2 -->
  </tr><tr><!-- Row 4 -->
     <td align="center" width="200"><div align="center"></font>Comment 4:</div></td><!-- Col 1 -->
     <td><input type="text" size="35"  name="himg2" value="none" ></td><!-- Col 2 -->
  </tr>
 </table>
<br><br>

<input type="Submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="Reset" value="Reset" >
</form></center>
   </tr>

<br><br>
<div align="center"><?php include("include/footer.php"); ?></div>

  </body>
</html>


<?php 
    } 
?> 
