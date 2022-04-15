<?php 
session_start(); //Allows you to use sessions 
$user = "TRR"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username5'] == $user AND $_POST['password5'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username5'] = $_POST['username5'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="TRR.php">Login?</a>'); 
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
<?php include("include/topmenu.php"); ?><br>

<div align="center"><font color="#500000"><font size="6">Add a Book to the IQSE Database</font> </font><br></div>
<center>
(<font color="#FF0000"><b>**Fields Required</b></font>) <br><br>
<form action="newbook2insert.php" method="POST">
<center> 
<h3>Book Information</h3>
<table width="500" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0">
<tr align="center" valign="top">
<td align="center" colspan="1">
Reference No.: 
</td><td><input type="text" size="35" name="reference"></td>
</tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Title: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="title" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Author: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="author" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Last Name of First Author?: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="lastauthor" ><br>
</td></tr>

<tr align="center" valign="top">
<td align="center" colspan="1">
Published/Created: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="publish" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Description: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="description" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Location (1,1,1):<br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="location" ><br>
</td></tr>
<!--<tr align="center" valign="top">
<td align="center" colspan="1">
Call Number:<br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="call" ><br>
</td></tr>-->
<tr align="center" valign="top">
<td align="center" colspan="1">
ISBN:<br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="ISBN" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Subject Heading(s):<br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="subject" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
On Loan from Evans:<br>
<small>(yes or no)</small> 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="evans" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 1:<br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="comment1" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 2: 
</td><td align="center" colspan="1">
<input type="text" size="35"  name="comment2" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Comment 3:<br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="comment3" ><br>
</td></tr>
</table>

<h3>Donation Information</h3>
<table width="500" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0">
<tr align="center" valign="top">
<td align="center" colspan="1">
Donated By: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="donator" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Date Donated: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="donatedate" ><br>
</td></tr>
</table>

<h3>Status Information</h3>
<table width="500" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0">
<!--<tr align="center" valign="top">
<td align="center" colspan="2">
<h3>Status Information:<h3>
</td></tr>-->
<tr align="center" valign="top">
<td align="center" colspan="1">
Missing: <br>
<small>(reported/found, date)</small><br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="missing" value="no" ><br>
</td></tr>
<!--<tr align="center" valign="top">
<td align="center" colspan="1">
Condition: <br>
<small>(good, fair, markings throughout, torn back cover, etc.)</small><br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="condition" value="new" ><br>
</td></tr>-->
<tr align="center" valign="top">
<td align="center" colspan="1">
Checked Out?: <br>
<small>(yes or no)</small><br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="status" value="no" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Check Out Date: <br>
<small>(mm/dd/yyyy)</small><br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="outdate" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Check In Date: <br>
<small>(mm/dd/yyyy)</small><br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="indate" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Due Date: <br>
<small>(mm/dd/yyyy)</small><br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="duedate" ><br>
</td></tr>
</table>

<h3>Patron Information</h3>
<table width="500" cellpadding="10" cellspacing="0" border="1" bgcolor="#C0C0C0">
<!--<tr align="center" valign="top">
<td align="center" colspan="2">
<h3>Status Information:<h3>
</td></tr>-->
<tr align="center" valign="top">
<td align="center" colspan="1">
First Name: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="first" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Last Name: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="last" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
UIN: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="UIN" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Email Address: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="email" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Alternate Email (non-TAMU): <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="altemail" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Phone Number: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="phone" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Cell Number: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="cellphone" ><br>
</td></tr>
<tr align="center" valign="top">
<td align="center" colspan="1">
Department/Institution: <br>
</td><td align="center" colspan="1">
<input type="text" size="35"  name="afill" value="IQSE/TAMU" ><br>
</td></tr>
</table>

<br>
<input type="Submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="Reset" value="Reset" />
</form></center>
  
  <br><br>


  </body>
</html>
<?php include("include/footer.php"); ?>
<?php 
    } 
?>  