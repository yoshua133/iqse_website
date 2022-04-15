<?php 
session_start(); //Allows you to use sessions 
$user = "SaFER"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username7'] == $user AND $_POST['password7'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username7'] = $_POST['username7'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000"><font face="Arial">You are not logged in!</font></font> </h2><br> <a href="http://iqse.tamu.edu/thecom/SaFER/SaFER.php">Login?</a>'); 
  } 
else 
    { 
?> 




<html lang="en">
  <head>
    
    
  </head>
  <body>
  
<?php include("../include/headerSaFER.php"); ?>
<?phpinclude("include/topmenu.php"); ?>
<br><br>
<div align="center"><h2><font color="#500000"><font face="Arial">Welcome to the SaFER Module</font> </h2></font><br></div>
 <br> 
  <h3><div align="center"><font face="Arial">Please select the Function you wish to access:</font></div></h3>
<br>
<table>
<tbody style="font-family:arial">
</tr>
<tr>
<td style="padding-left: 50px;">
 <ul>
    <li>    <font size="4"><b>Bird Database</b></font> </li><br><br>
    <ul>
    <li>  	<font size="3"><b><a href="birdform.php">Enter New Bird</a></b></font> </li><br><br>
    <li>	<font size="3"><b><a href="2updatebirds/registration_update_form.php">Update an Existing Bird Entry</a></b></font> </li><br><br>
    </ul> </ul> 
</td>
</tr>
<tr>
<td style="padding-left: 50px;">
 <ul>
    <li>    <font size="4"><b>Insect Database</b></font> </li><br><br>
    <ul>
    <li>  	<font size="3"><b><a href="insectform.php">Enter New Insect</a></b></font> </li><br><br>
    <li>	<font size="3"><b><a href="2updateinsects/registration_update_form.php">Update an Existing Insect Entry</a></b></font> </li><br><br>
    </ul> </ul> 
</td>
</tr>
<tr>
<td style="padding-left: 50px;">
 <ul>
    <li>    <font size="4"><b>Plant Database</b></font> </li><br><br>
    <ul>
    <li>  	<font size="3"><b><a href="plantform.php">Enter New Plant</a></b></font> </li><br><br>
    <li>	<font size="3"><b><a href="2updateplants/registration_update_form.php">Update an Existing Plant Entry</a></b></font> </li><br><br>
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
