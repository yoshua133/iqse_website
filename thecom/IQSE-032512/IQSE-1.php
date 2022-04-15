<?php 
session_start(); //Allows you to use sessions 
$user = "CTP"; //Username to protected page. 
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
  
<?php include("include/topmenu.php"); ?>

<div align="center"><h2><font color="#500000">Welcome to the IQSE Module </h2></font><br></div>
 <br> 
  <h3><div align="center">Please select the Function you wish to access:</div></h3>
<br>
<table>
<tr>
<td style="padding-left: 50px;">
 <ul>
    <li>    <font size="4"><b>People Functions</b></font> </li><br><br>
    <ul>
    <li>  	<font size="3"><b>New Entry</b></font> </li><br><br>
    <li>	<font size="3"><b>Update an Existing Entry</b></font> </li><br><br>
    </ul> </ul> 
</td>
</tr>
</table>
   
  </body>
</html>

<?php 
    } 
?>  