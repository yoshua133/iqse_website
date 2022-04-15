<?php 
session_start(); //Allows you to use sessions 
$user = "ART"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username2'] == $user AND $_POST['password2'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username2'] = $_POST['username2'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000"><font face="Arial">You are not logged in!</font></font> </h2><br> <a href="http://iqse.tamu.edu/thecom/ART/ART.php">Login?</a>'); 
  } 
else 
    { 
?> 




<html lang="en">
  <head>
    
    
  </head>
  <body>
  
<?php include("../include/headerART.php"); ?>
<?phpinclude("include/topmenu.php"); ?>
<br><br>
<div align="center"><h2><font color="#500000"><font face="Arial">Welcome to the ART Module</font> </h2></font><br></div>
 <br> 
  <h3><div align="center"><font face="Arial">Please select the Function you wish to access:</font></div></h3>
<br>
<table>
<tbody style="font-family:arial">
<tr>
<td style="padding-left: 50px;">
 <ul>
    <li>    <font size="4"><b>People Functions</b></font> </li><br><br>
    <ul>
    <li>  	<font size="3"><b><a href="ART-2.php">Enter New Profile</a></b></font> </li><br><br>
    <li>	<font size="3"><b><a href="2updateadmin/registration_update_form.php">Update an Existing Entry</a></b></font> </li><br><br>
    </ul> </ul> 
</td>
</tr>
</table>
   
 
<br><br>
<?php include("../include/footer.php"); ?>
 </body>
</html>
<?php 
    } 
?>  
