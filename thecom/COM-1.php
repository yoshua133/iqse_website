<?php 
session_start(); //Allows you to use sessions 
$user = "IQSE"; //Username to protected page. 
$pass = "entersaysme"; //Password to protected page. 
if($_POST['username'] == $user AND $_POST['password'] == $pass){ 
$_SESSION['logged_in'] = "true"; 
$_SESSION['username'] = $_POST['username'];  
echo('<meta name="refresh" content="0; url=page.php" />');  
} 
if(!isset($_SESSION['logged_in'])){ 
  echo('<center><h2><font color="#500000">You are not logged in!</font> </h2><br> <a href="http://iqse.tamu.edu/thecom/COM.php">Login?</a>'); 
  } 
else 
    { 
?> 




<html lang="en">
  <head>
   
  </head>
  <body>
<?php include("include/header.php") ?>
<?php include("include/topmenu.php"); ?>
<br><br>

<div align="center"><h2><font color="#500000">Please select the Module in which you wish to work:</h2></font><br></div>
<br><br>
<table>
<tbody style="font-family:arial">
<tr>
<td style="padding-left: 50px;">
 <ul>
    <li>  	<font size="4"><b><a href="CTP/CTP.php">CTP</a></b></font> <font size="3">&nbsp;&nbsp;(Center for Theoretical Physics)</font></li><br><br>
    <li>	<font size="4"><b><a href="IQSE/IQSE.php">IQSE</a></b></font> <font size="3">(Institute for Quantum Science and Engineering)</font></li><br><br>
    <li>	<font size="4"><b><a href="SaFER/SaFER.php">SaFER</a></b> (search engines)</font> <font size="3">&nbsp;(The Salter Farm Educational Research Program)</font></li><br><br>
	<li>    <font size="4"><b><a href="ART/ART.php">SRF</a></b> (ART & SaFER people)</font> <font size="3">&nbsp;(Salter Research Farm)</font></li><br><br>
    <li>	<font size="4"><b><a href="TRR/TRR.php">TRR</a></b></font> <font size="3">&nbsp;(The Townes Reading Room)</font></li><br><br>
</ul> 
</td>
</tr>
</table>
   <br><br>
<?php include("include/footer.php"); ?>
  </body>
</html>

<?php 
    } 
?>  